<?php
use tyt\TYT;
use tyt\TYTModel;
			
class ControllerStartupStartup extends Controller {
	public function index() {
		// Store
		if ($this->request->server['HTTPS']) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "store WHERE REPLACE(`ssl`, 'www.', '') = '" . $this->db->escape('https://' . str_replace('www.', '', $_SERVER['HTTP_HOST']) . rtrim(dirname($_SERVER['PHP_SELF']), '/.\\') . '/') . "'");
		} else {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "store WHERE REPLACE(`url`, 'www.', '') = '" . $this->db->escape('http://' . str_replace('www.', '', $_SERVER['HTTP_HOST']) . rtrim(dirname($_SERVER['PHP_SELF']), '/.\\') . '/') . "'");
		}
		
		if (isset($this->request->get['store_id'])) {
			$this->config->set('config_store_id', (int)$this->request->get['store_id']);
		} else if ($query->num_rows) {
			$this->config->set('config_store_id', $query->row['store_id']);
		} else {
			$this->config->set('config_store_id', 0);
		}
		
		if (!$query->num_rows) {
			$this->config->set('config_url', HTTP_SERVER);
			$this->config->set('config_ssl', HTTPS_SERVER);
		}
		
		// Settings
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "setting` WHERE store_id = '0' OR store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY store_id ASC");
		
		foreach ($query->rows as $result) {
			if (!$result['serialized']) {
				$this->config->set($result['key'], $result['value']);
			} else {
				$this->config->set($result['key'], json_decode($result['value'], true));
			}
		}

		// Set time zone
		if ($this->config->get('config_timezone')) {
			date_default_timezone_set($this->config->get('config_timezone'));

			// Sync PHP and DB time zones.
			$this->db->query("SET time_zone = '" . $this->db->escape(date('P')) . "'");
		}

		// Theme
		$this->config->set('template_cache', $this->config->get('developer_theme'));
		
		// Url
		$this->registry->set('url', new Url($this->config->get('config_url'), $this->config->get('config_ssl')));

            // Journal Theme Modification
            if (isset($this->session->data['user_id']) && $this->session->data['user_id'] && isset($this->request->get['j3dt']) && $this->request->get['j3dt']) {
                if (version_compare(VERSION, '3', '>=')) {
                    $this->config->set('config_theme', 'default');
                    $this->config->set('theme_default_status', 1);
                } else {
                    $this->config->set('config_theme', 'theme_default');
                    $this->config->set('theme_default_status', 1);
                }
            }
            // End Journal Theme Modification
            
		
		// Language
		$code = '';
		
		$this->load->model('localisation/language');
		
		$languages = $this->model_localisation_language->getLanguages();

            if (isset($languages[$this->config->get('config_language')])) {
                $this->config->set('config_default_language_id', $languages[$this->config->get('config_language')]['language_id']);
            }
            
		
		if (isset($this->session->data['language'])) {
			$code = $this->session->data['language'];
		}
				
		if (isset($this->request->cookie['language']) && !array_key_exists($code, $languages)) {
			$code = $this->request->cookie['language'];
		}
		
		// Language Detection
		if (!empty($this->request->server['HTTP_ACCEPT_LANGUAGE']) && !array_key_exists($code, $languages)) {
			$detect = '';
			
			$browser_languages = explode(',', $this->request->server['HTTP_ACCEPT_LANGUAGE']);
			
			// Try using local to detect the language
			foreach ($browser_languages as $browser_language) {
				foreach ($languages as $key => $value) {
					if ($value['status']) {
						$locale = explode(',', $value['locale']);
						
						if (in_array($browser_language, $locale)) {
							$detect = $key;
							break 2;
						}
					}
				}	
			}			
			
			if (!$detect) { 
				// Try using language folder to detect the language
				foreach ($browser_languages as $browser_language) {
					if (array_key_exists(strtolower($browser_language), $languages)) {
						$detect = strtolower($browser_language);
						
						break;
					}
				}
			}
			
			$code = $detect ? $detect : '';
		}
		
		if (!array_key_exists($code, $languages)) {
			$code = $this->config->get('config_language');
		}
		
		if (!isset($this->session->data['language']) || $this->session->data['language'] != $code) {
			$this->session->data['language'] = $code;
		}
				
		if (!isset($this->request->cookie['language']) || $this->request->cookie['language'] != $code) {
			setcookie('language', $code, time() + 60 * 60 * 24 * 30, '/', $this->request->server['HTTP_HOST']);
		}
				
		// Overwrite the default language object
		$language = new Language($code);
		$language->load($code);
		
		$this->registry->set('language', $language);
		
		// Set the config language_id
		$this->config->set('config_language_id', $languages[$code]['language_id']);	

		// Customer
		$customer = new Cart\Customer($this->registry);
		$this->registry->set('customer', $customer);
		
		// Customer Group
		if (isset($this->session->data['customer']) && isset($this->session->data['customer']['customer_group_id'])) {
			// For API calls
			$this->config->set('config_customer_group_id', $this->session->data['customer']['customer_group_id']);
		} elseif ($this->customer->isLogged()) {
			// Logged in customers
			$this->config->set('config_customer_group_id', $this->customer->getGroupId());
		} elseif (isset($this->session->data['guest']) && isset($this->session->data['guest']['customer_group_id'])) {
			$this->config->set('config_customer_group_id', $this->session->data['guest']['customer_group_id']);
		} else {
			$this->config->set('config_customer_group_id', $this->config->get('config_customer_group_id'));
		}
		
		// Tracking Code
		if (isset($this->request->get['tracking'])) {
			setcookie('tracking', $this->request->get['tracking'], time() + 3600 * 24 * 1000, '/');
		
			$this->db->query("UPDATE `" . DB_PREFIX . "marketing` SET clicks = (clicks + 1) WHERE code = '" . $this->db->escape($this->request->get['tracking']) . "'");
		}		
		
		// Currency
		$code = '';
		
		$this->load->model('localisation/currency');
		
		$currencies = $this->model_localisation_currency->getCurrencies();
		
		if (isset($this->session->data['currency'])) {
			$code = $this->session->data['currency'];
		}
		
		if (isset($this->request->cookie['currency']) && !array_key_exists($code, $currencies)) {
			$code = $this->request->cookie['currency'];
		}
		
		if (!array_key_exists($code, $currencies)) {
			$code = $this->config->get('config_currency');
		}
		
		if (!isset($this->session->data['currency']) || $this->session->data['currency'] != $code) {
			$this->session->data['currency'] = $code;
		}
		
		if (!isset($this->request->cookie['currency']) || $this->request->cookie['currency'] != $code) {
			setcookie('currency', $code, time() + 60 * 60 * 24 * 30, '/', $this->request->server['HTTP_HOST']);
		}		
		
		$this->registry->set('currency', new Cart\Currency($this->registry));
		
		// Tax
		$this->registry->set('tax', new Cart\Tax($this->registry));
		
		// PHP v7.4+ validation compatibility.
		if (isset($this->session->data['shipping_address']['country_id']) && isset($this->session->data['shipping_address']['zone_id'])) {
			$this->tax->setShippingAddress($this->session->data['shipping_address']['country_id'], $this->session->data['shipping_address']['zone_id']);
		} elseif ($this->config->get('config_tax_default') == 'shipping') {
			$this->tax->setShippingAddress($this->config->get('config_country_id'), $this->config->get('config_zone_id'));
		}

		if (isset($this->session->data['payment_address']['country_id']) && isset($this->session->data['payment_address']['zone_id'])) {
			$this->tax->setPaymentAddress($this->session->data['payment_address']['country_id'], $this->session->data['payment_address']['zone_id']);
		} elseif ($this->config->get('config_tax_default') == 'payment') {
			$this->tax->setPaymentAddress($this->config->get('config_country_id'), $this->config->get('config_zone_id'));
		}

		$this->tax->setStoreAddress($this->config->get('config_country_id'), $this->config->get('config_zone_id'));
		
		// Weight
		$this->registry->set('weight', new Cart\Weight($this->registry));
		
		// Length
		$this->registry->set('length', new Cart\Length($this->registry));
		
		// Cart
		$this->registry->set('cart', new Cart\Cart($this->registry));
		
		// Encryption
		$this->registry->set('encryption', new Encryption($this->config->get('config_encryption')));

		// check if tyt user logged in
		$tyt = new TYT($this->registry);
		if (!$tyt->isLoggedIn()) {
			$this->response->redirect('https://tap.thankyouteacher.my/login'); 
		}
		
		$tyt_user = $tyt->getUser();
		$tyt_model = new TYTModel($this->registry);
		$customer = $tyt_model->getCustomerByTytUserId($tyt_user['id']);
		$data = [];
		
		// check if oc customer exists, create user if doesnt exist
		if (empty($customer)) {
			$data = [
				'customer_group_id' => 1,
				'tyt_user_id' => $tyt_user['id'],
				'firstname' => $tyt_user['name'],
				'lastname' => '',
				'email' => $tyt_user['email'],
				'telephone' => $tyt_user['phone'],
				'password' => 'password',
				'newsletter' => 1,
				'status' => 1,
				'safe' => 1,
			];

			$tyt_model->addCustomer($data);
			$customer = $tyt_model->getCustomerByTytUserId($tyt_user['id']);
		}

		if ($this->customer->isLogged()) {
			if ($customer['customer_id'] != $this->customer->getId()) {
				$this->customer->logout();

				$this->customer->login($customer['email'], 'password');
			}
		} else {
			$this->customer->login($customer['email'], 'password');
		}
	}
}

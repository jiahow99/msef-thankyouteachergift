<?php
namespace tyt;

class TYTModel {
    protected $registry;

    public function __construct($registry) {
        $this->registry = $registry;
    }

    public function addCustomer($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "customer SET customer_group_id = '" . (int)$data['customer_group_id'] . "', tyt_user_id = '" . (int)$data['tyt_user_id'] . "', firstname = '" . $this->db->escape($data['firstname']) . "', lastname = '" . $this->db->escape($data['lastname']) . "', email = '" . $this->db->escape($data['email']) . "', telephone = '" . $this->db->escape($data['telephone']) . "', custom_field = '" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : json_encode(array())) . "', newsletter = '" . (int)$data['newsletter'] . "', salt = '" . $this->db->escape($salt = token(9)) . "', password = '" . $this->db->escape(sha1($salt . sha1($salt . sha1($data['password'])))) . "', status = '" . (int)$data['status'] . "', safe = '" . (int)$data['safe'] . "', date_added = NOW()");
	
		return $this->db->getLastId();
    }

    public function getCustomerByTytUserId($tyt_user_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer` WHERE tyt_user_id = '" . (int)$tyt_user_id . "'");

        return $query->row;
    }

    public function __get($key) {
        return $this->registry->get($key);
    }

    public function __set($key, $value) {
        $this->registry->set($key, $value);
    }
}
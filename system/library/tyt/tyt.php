<?php 
namespace tyt;

class TYT {
    protected $registry;
    protected $config;
    protected $model;

    public function __construct($registry) 
    {
        $this->registry = $registry;
		$this->config = $registry->get('config');
    }

    public function decrypt($payload)
    {
        $payload = json_decode(base64_decode($payload), true);

        $iv = base64_decode($payload['iv']);

        $tag = empty($payload['tag']) ? null : base64_decode($payload['tag']);

        $key = base64_decode($this->config->get('module_tyt_secret_key'));

        $decrypted = \openssl_decrypt(
            $payload['value'], strtolower('aes-256-cbc'), $key, 0, $iv, $tag ?? ''
        );
        
        $parts = explode('|', $decrypted);

        if (isset($parts[1])) {
            return json_decode($parts[1], true);
        }

        return [];
    }

    public function getUser()
    {
        $token = isset($_COOKIE['tyt_auth_token']) ? $_COOKIE['tyt_auth_token'] : '';
        $token = "eyJpdiI6IllVTnZkeldONWs5eUVwV1JSZy82ekE9PSIsInZhbHVlIjoibmpNL0RyWk5ubkRzMThZNThzRDdML2xSYUVMekd5d2ZscHlzQnVQdFV3MTErRnN0aW1ITjF2bUdvSmgwZUlMcGNXWm1tZGwra3RnaGhrTERPeS9YUWQvV2d3bmFpYWxXdi9mdHhhcUh1K1l3eVRCYkJIZEhIbkEreHU3WDRnVzlaZm82MnpSOVN0WDNSRlc2amFCaWlZaXFQQXpnL0s1d2R4NnVudEhxclFJPSIsIm1hYyI6IjY3YjE0NGQxZjM4NDg4MWFmMjM3NTFjMWI0NjcxNTUyZjJmMmQ4YmVjODY4ZDY2ZGYzYzE3Y2Y4ZmFlOTg3ZjAiLCJ0YWciOiIifQ==";

        if ($token) {
            $user = $this->decrypt($token);
            $user['teacher_id'] = '1';
            $user['teacher_name_en'] = 'test';
            $user['teacher_name_cn'] = '测试';

            if (!empty($user)) {
                return $user;
            }
        }

        return false;
    }

    public function isLoggedIn()
    {
        return $this->getUser();
    }

    public function getTeacher()
    {
        $user = $this->getUser();
        
        if ($user && $user['teacher_id']) {
            $teacher = [
                'id' => $user['teacher_id'],
                'name_cn' => $user['teacher_name_cn'],
                'name_en' => $user['teacher_name_en'],
            ];

            return $teacher;
        }

        return false;
    }

    // public function getDisplayName()
    // {
    //     $user = $this->getUser();

    //     if ($user) {
    //         return $user['name'];
    //     }

    //     return 'Guest';
    // }

    // public function __get($key) {
    //     return $this->registry->get($key);
    // }

    // public function __set($key, $value) {
    //     $this->registry->set($key, $value);
    // }
}
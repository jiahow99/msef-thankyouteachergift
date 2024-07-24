<?php

class ModelExtensionModuleTYT extends Model {

    public function install() {
        if (!$this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "customer' AND COLUMN_NAME = 'tyt_user_id'")->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "customer` ADD `tyt_user_id` INT(11) DEFAULT NULL AFTER `customer_group_id`");
        }

        if (!$this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "order' AND COLUMN_NAME = 'teacher_id'")->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD `teacher_id` VARCHAR(255) DEFAULT NULL AFTER `custom_field`");
        }

        if (!$this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "order' AND COLUMN_NAME = 'teacher_name_en'")->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD `teacher_name_en` VARCHAR(255) DEFAULT NULL AFTER `teacher_id`");
        }

        if (!$this->db->query("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . "order' AND COLUMN_NAME = 'teacher_name_cn'")->num_rows) {
            $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD `teacher_name_cn` VARCHAR(255) DEFAULT NULL AFTER `teacher_name_en`");
        }
    }

    public function uninstall() {
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "customer` DROP COLUMN `tyt_user_id`");

        $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` DROP COLUMN `teacher_id`");

        $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` DROP COLUMN `teacher_name_en`");

        $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` DROP COLUMN `teacher_name_cn`");
    }
}
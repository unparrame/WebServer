<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat relation pada database
 */
class Migration_expandcitizen extends CI_Migration {

    public function up() {
        $this->db->query("ALTER TABLE `citizens` ADD `statuskawin` VARCHAR(64) NOT NULL AFTER `nik`;");
        $this->db->query("UPDATE `ktprame`.`citizens` SET `statuskawin` = 'KAWIN' WHERE `citizens`.`nik` = '3461607886316458';");
    }

}

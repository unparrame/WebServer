<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat struktur data awal.UPDATE `citizens` SET `nama`=UCASE(`nama`);
 */
class Migration_uppercase extends CI_Migration {

    public function up() {
        $this->db->query("UPDATE `citizens` SET `nama`=UCASE(`nama`);");
        $this->db->query("UPDATE `citizens` SET `agama`='KATHOLIK' WHERE `agama`='KHATOLIK';");
    }

    public function down() {
        // void
    }

}

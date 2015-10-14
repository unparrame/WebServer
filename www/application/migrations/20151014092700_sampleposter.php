<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat struktur data awal.
 */
class Migration_Sampleposter extends CI_Migration {

    public function up() {
        $this->db->query("INSERT INTO `ktprame`.`posters` (`postersEmail`, `password`, `postcode`, `fullname`) VALUES ('indrawan.wilianto@gmail.com', 'admin123', '40141', 'Wilianto Indrawan');");
    }

    public function down() {
        // void
    }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat struktur data awal.
 */
class Migration_insertoneposts extends CI_Migration {

    public function up() {
        $this->db->query("INSERT INTO `ktprame`.`posts` (`postId`, `posterEmail`, `state`) VALUES ('990821', 'indrawan.wilianto@gmail.com', 'submitted');");
    }

    public function down() {
        // void
    }

}

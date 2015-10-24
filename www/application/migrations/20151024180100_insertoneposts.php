<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat struktur data awal.
 */
class Migration_insertoneposts extends CI_Migration {

    public function up() {
        $this->db->query("INSERT INTO `ktprame`.`posts` (`postId`, `posterEmail`, `postTime`, `state`) VALUES ('990821', 'indrawan.wilianto@gmail.com',  date('Y-m-d H:i:s'), 'submitted');");
    }

    public function down() {
        // void
    }

}

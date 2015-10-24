<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat struktur data awal.
 */
class Migration_sampledigitizers extends CI_Migration {

    public function up() {
        $this->db->query("INSERT INTO `ktprame`.`digitalizers` (`digitalizerEmail`, `password`, `fullname`) VALUES ('pascalalfadian@live.com', 'pascal', 'Pascal Alfadian Nugroho')");
    }

    public function down() {
        // void
    }

}

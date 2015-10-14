<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat struktur data awal.
 */
class Migration_Initial extends CI_Migration {

    public function up() {
        $this->db->query("CREATE TABLE IF NOT EXISTS `citizens` (`nik` varchar(20) NOT NULL, `data` text NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `digitalizations` (`digitalizationId` int(11) NOT NULL, `digitalizerEmail` varchar(50) NOT NULL, `postId` int(11) NOT NULL, `data` text NOT NULL, `nik` varchar(20) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `digitalizers` (`digitalizerEmail` varchar(50) NOT NULL, `password` varchar(32) NOT NULL, `fullname` varchar(30) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `posters` (`postersEmail` varchar(50) NOT NULL, `password` varchar(32) NOT NULL, `postcode` varchar(5) NOT NULL, `fullname` varchar(30) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `posts` (`postId` int(11) NOT NULL, `posterEmail` varchar(50) NOT NULL, `postTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, `state` enum('submitted','accepted','rejected','') NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        $this->db->query("ALTER TABLE `citizens` ADD PRIMARY KEY (`nik`);");
        $this->db->query("ALTER TABLE `digitalizations` ADD PRIMARY KEY (`digitalizationId`);");
        $this->db->query("ALTER TABLE `digitalizers` ADD PRIMARY KEY (`digitalizerEmail`);");
        $this->db->query("ALTER TABLE `posters` ADD PRIMARY KEY (`postersEmail`);");
        $this->db->query("ALTER TABLE `posts` ADD PRIMARY KEY (`postId`);");
        $this->db->query("ALTER TABLE `digitalizations` MODIFY `digitalizationId` int(11) NOT NULL AUTO_INCREMENT;");
        $this->db->query("ALTER TABLE `posts` MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT;");
    }

    public function down() {
        // void
    }

}

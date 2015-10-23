<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
	* Membuat relation pada database
	*/

class Migration_relation extends CI_Migration{
	public function up(){
		$this->db->query("ALTER TABLE `posts` ADD CONSTRAINT `fk_posts_posters` FOREIGN KEY (`posterEmail`) REFERENCES `posters` (`postersEmail`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
		$this->db->query("ALTER TABLE `digitalizations` ADD CONSTRAINT `fk_digitalizations_digitalizers` FOREIGN KEY (`digitalizerEmail`) REFERENCES `digitalizers` (`digitalizerEmail`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
		$this->db->query("ALTER TABLE `digitalizations` ADD CONSTRAINT `fk_digitalizations_posts` FOREIGN KEY (`postId`) REFERENCES `posts` (`postId`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
		// $this->db->query("ALTER TABLE `digitalizations` ADD CONSTRAINT `fk_digitalizations_citizens` FOREIGN KEY (`data`) REFERENCES `citizens` (`data`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
		// $this->db->query("ALTER TABLE `digitalizations` ADD CONSTRAINT `fk_digitalizations_citizens` FOREIGN KEY (`nik`) REFERENCES `citizens` (`nik`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
	}
}

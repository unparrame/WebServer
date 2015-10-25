<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat struktur data awal.UPDATE `citizens` SET `nama`=UCASE(`nama`);
 */
class Migration_zukita extends CI_Migration {

    public function up() {
        $this->db->query("UPDATE `citizens` SET `nik` = '2794719725572252', `kotakabupaten` = 'KABUPATEN TULUNGAGUNG', `tanggallahir` = '2015-01-18', `goldarah` = 'A+', `alamat` = 'DUSUN BAMBU' WHERE `citizens`.`nik` = '9992252304206413';");
        $this->db->query("INSERT INTO `posts` (`postId`, `posterEmail`, `postTime`, `state`) VALUES ('100000', 'indrawan.wilianto@gmail.com', CURRENT_TIMESTAMP, 'accepted'), ('100001', 'indrawan.wilianto@gmail.com', CURRENT_TIMESTAMP, 'accepted');");
        $this->db->query("INSERT INTO `digitalizations` VALUES(1, 'pascalalfadian@live.com', 100000, '{\"provinsi\":\"\",\"kotakabupaten\":\"\",\"nik\":\"0448095237991588\",\"nama\":\"TEKASHIHITO\",\"tempatlahir\":\"\",\"tanggallahir\":\"2015-10-25\",\"jeniskelamin\":\"\",\"goldarah\":\"\",\"alamat\":\"\",\"rt\":\"\",\"rw\":\"\",\"desakel\":\"\",\"kecamatan\":\"\",\"agama\":\"\",\"statuskawin\":\"\",\"pekerjaan\":\"\",\"kewarganegaraan\":\"\"}', '0448095237991588');");
        $this->db->query("INSERT INTO `digitalizations` VALUES(2, 'pascalalfadian@live.com', 100001, '{\"provinsi\":\"\",\"kotakabupaten\":\"\",\"nik\":\"0448095237991588\",\"nama\":\"TEKASHIHITO\",\"tempatlahir\":\"\",\"tanggallahir\":\"2015-10-25\",\"jeniskelamin\":\"\",\"goldarah\":\"\",\"alamat\":\"\",\"rt\":\"\",\"rw\":\"\",\"desakel\":\"\",\"kecamatan\":\"\",\"agama\":\"\",\"statuskawin\":\"\",\"pekerjaan\":\"\",\"kewarganegaraan\":\"\"}', '0448095237991588');");
    }

    public function down() {
        // void
    }

}

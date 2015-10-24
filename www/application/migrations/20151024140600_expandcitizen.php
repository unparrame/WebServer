<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat relation pada database
 */
class Migration_expandcitizen extends CI_Migration {

    public function up() {
        $this->db->query("ALTER TABLE `citizens` DROP `data`;");
        $this->db->query("ALTER TABLE `citizens` ADD `provinsi` VARCHAR(256) NOT NULL , ADD `kotakabupaten` VARCHAR(256) NOT NULL , ADD `nama` VARCHAR(256) NOT NULL , ADD `tempatlahir` VARCHAR(128) NOT NULL , ADD `tanggallahir` DATE NULL , ADD `jeniskelamin` VARCHAR(64) NOT NULL , ADD `goldarah` VARCHAR(32) NOT NULL , ADD `alamat` VARCHAR(256) NOT NULL , ADD `rt` VARCHAR(16) NOT NULL , ADD `rw` VARCHAR(16) NOT NULL , ADD `desakel` VARCHAR(64) NOT NULL , ADD `kecamatan` VARCHAR(64) NOT NULL , ADD `agama` VARCHAR(64) NOT NULL , ADD `pekerjaan` VARCHAR(64) NOT NULL , ADD `kewarganegaraan` VARCHAR(64) NOT NULL ;");
        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`) VALUES ('3461607886316458', 'JAWA BARAT', 'KOTA BANDUNG', 'KURUKUTAFUTO', 'JAKARTA', '1984-12-01', 'PEREMPUAN', 'A+', '3558 VIKING DRIVE', '008', '004', 'PUNGKUR', 'REGOL', 'KATHOLIK', 'PELUKIS', 'WNI');");
    }

}

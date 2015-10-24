<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat relation pada database
 */
class Migration_insertcitizen extends CI_Migration {

    public function up() {
        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('7892298946490783', 'JAWA BARAT', 'KABUPATEN BANDUNG', 'Takitatakikato', 'BANDUNG', '1994-03-23', 'LAKI-LAKI', '-', '4789 Ford Street San Jose, CA 95113', '006', '018', 'MARGAHAYU SELATAN', 'MARGAHAYU', 'KRISTEN', 'PELAJAR/MAHASISWA', 'WNI', 'BELUM KAWIN');");

        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('8679182319178446', 'JAWA BARAT', 'KABUPATEN PURWAKARTA', 'Jikakita', 'JAKARTA', '1994-04-08', 'PEREMPUAN', '-', '1725 Park   Boulevard Marshalltown, IA 50158', '045', '008', 'NAGRITENGAH', 'PURWAKARTA', 'ISLAM', 'PELAJAR/MAHASISWA', 'WNI', 'BELUM KAWIN');");

        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('3564035796031999', 'JAWA BARAT', 'KABUPATEN INDRAMAYU', 'Zumoarikunori', 'INDRAMAYU', '1994-10-17', 'LAKI-LAKI', 'O', '4117 Chardonnay Drive Ocala, FL 34471', '002', '001', 'LEMAH MEKAR', 'INDRAMAYU', 'KATHOLIK', 'PELAJAR/MAHASISWA', 'WNI', 'BELUM KAWIN');");

        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('9824821784236926', 'JAWA BARAT', 'KOTA CIMAHI', 'Arikatoteshika', 'BANDUNG', '1994-04-16', 'LAKI-LAKI', '-', '722 Oakmound Drive Chicago, IL 60637', '002', '005', 'UTAMA', 'CIMAHI SELATAN', 'KATHOLIK', 'PELAJAR/MAHASISWA', 'WNI', 'BELUM KAWIN');");

        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('7922267245457789', 'JAWA BARAT', 'KOTA BANDUNG', 'Rinkashifu', 'BANDUNG', '1995-09-28', 'LAKI-LAKI', '-', '3295 Ridenour Street Miami, FL 33131', '002', '001', 'MERDEKA', 'SUMUR BANDUNG', 'ISLAM', 'PELAJAR/MAHASISWA', 'WNI', 'BELUM KAWIN');");

        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('9992252304206413', 'JAWA BARAT', 'KABUPATEN BANDUNG', 'Zukitatakiku', 'BANDUNG', '1995-05-18', 'LAKI-LAKI', 'A', '4193 Rowes Lane Smiths Grove, KY 42171', '006', '018', 'MARGAHAYU SELATAN', 'MARGAHAYU', 'KRISTEN', 'PELAJAR/MAHASISWA', 'WNI', 'BELUM KAWIN');");
    }

}

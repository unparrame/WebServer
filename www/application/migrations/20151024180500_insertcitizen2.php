<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Membuat relation pada database
 */
class Migration_insertcitizen2 extends CI_Migration {

    public function up() {
        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('8494429104613384', 'JAWA BARAT', 'KABUPATEN BANDUNG', 'Rinkashifu', 'BANDUNG', '1994-04-04', 'LAKI-LAKI', 'B', '338 Columbia Road Philadelphia, DE 19108', '010', '015', 'MARGAHAYU SELATAN', 'MARGAHAYU', 'KHATOLIK', 'PELAJAR/MAHASISWA', 'WNI', 'BELUM KAWIN');");

        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('2781378079942214', 'JAWA BARAT', 'KABUPATEN BANDUNG', 'Aridoarikato', 'BANDUNG', '1997-09-01', 'LAKI-LAKI', 'AB', '2040 Stoneybrook Road Orlando, FL 32810', '010', '015', 'MARGAHAYU SELATAN', 'MARGAHAYU', 'KHATOLIK', 'PELAJAR/MAHASISWA', 'WNI', 'BELUM KAWIN');");

        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('0448095237991588', 'JAWA BARAT', 'KABUPATEN BANDUNG', 'Tekashikito', 'BANDUNG', '1962-05-01', 'LAKI-LAKI', 'B', '3153 Fowler Avenue Norcross, GA 30071', '010', '015', 'MARGAHAYU SELATAN', 'MARGAHAYU', 'KHATOLIK', 'KARYAWAN SWASTA', 'WNI', 'KAWIN');");

        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('3418943247221886', 'JAWA BARAT', 'KABUPATEN BANDUNG', 'Katekarin', 'BANDUNG', '1965-10-06', 'PEREMPUAN', 'A', '4309 Poling Farm Road Bellevue, NE 68005', '010', '015', 'MARGAHAYU SELATAN', 'MARGAHAYU', 'KHATOLIK', 'MENGURUS RUMAH TANGGA', 'WNI', 'KAWIN');");

        $this->db->query("INSERT INTO `ktprame`.`citizens` (`nik`, `provinsi`, `kotakabupaten`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `goldarah`, `alamat`, `rt`, `rw`, `desakel`, `kecamatan`, `agama`, `pekerjaan`, `kewarganegaraan`, `statuskawin`) VALUES ('6173049895240963', 'JAWA BARAT', 'KABUPATEN BANDUNG', 'Mikatotekimiku', 'BANDUNG', '1994-06-10', 'LAKI-LAKI', 'O', '4284 Hillcrest Circle Crystal, MN 55429', '003', '018', 'MARGAHAYU SELATAN', 'MARGAHAYU', 'KRISTEN', 'PELAJAR/MAHASISWA', 'WNI', 'BELUM KAWIN');");

    }

}

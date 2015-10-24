<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Citizensmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getDetailPeople($nik) {
        $sql = "SELECT * FROM `citizens` WHERE `nik` = ?";
        $query = $this->db->query($sql, array($nik));
        return $query->result();
    }

    public function getHistoryPeople($nik) {
        $sql = "SELECT DISTINCT posts.postId, posterEmail, postTime FROM posts LEFT JOIN digitalizations ON posts.postId = digitalizations.postId AND nik='?'";
        $query = $this->db->query($sql, array($nik));
        $posts = array();
        foreach ($query->result() as $row) {
            $posts[] = $row;
        }
        return $posts;
    }

    public function chartjsAgama() {
        $query = $this->db->query("SELECT `agama` AS `label`, COUNT(`agama`) AS `value` FROM `citizens` GROUP BY `agama`;");
        $agamas = array();
        foreach ($query->result() as $row) {
            $row->color = $this->generateColor($row->label);
            $agamas[] = $row;
        }
        return $agamas;
    }

    public function chartjsJenisKelamin() {
        $query = $this->db->query("SELECT `jeniskelamin` AS `label`, COUNT(`jeniskelamin`) AS `value` FROM `citizens` GROUP BY `jeniskelamin`; ");
        $jeniskelamins = array();
        foreach ($query->result() as $row) {
            $row->color = $this->generateColor($row->label);
            $jeniskelamins[] = $row;
        }
        return $jeniskelamins;
    }

    public function chartjsGolDarah() {
        $query = $this->db->query("SELECT `goldarah` AS `label`, COUNT(`goldarah`) AS `value` FROM `citizens` GROUP BY `goldarah`; ");
        $goldarahs = array();
        foreach ($query->result() as $row) {
            $row->color = $this->generateColor($row->label);
            $goldarahs[] = $row;
        }
        return $goldarahs;
    }

    private function generateColor($label) {
        return '#' . substr(md5($label), 0, 6);
    }

}

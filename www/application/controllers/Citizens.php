<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Citizens extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('citizensmodel');
    }

    public function index() {
        // $this->load->model('citizensmodel');
        $this->db->select('nik, nama, jeniskelamin, agama, goldarah');
        $query = $this->db->get('citizens');
        $citizens = array();
        foreach ($query->result() as $row) {
            $citizens[] = $row;
        }
        $data = array(
            'citizens' => $citizens,
            'chartjsAgama' => $this->citizensmodel->chartjsAgama(),
            'chartjsJenisKelamin' => $this->citizensmodel->chartjsJenisKelamin(),
            'chartjsGolDarah' => $this->citizensmodel->chartjsGolDarah()
        );
        $this->load->view('citizens_list', $data);
    }

    public function detail() {
        $nik = $this->input->get('nik');        
        $data = array(
            'row' => $this->citizensmodel->getDetailPeople($nik),
            'posts' => $this->citizensmodel->getHistoryPeople($nik)
        );
        $this->load->view('citizens_view', $data);
    }

}

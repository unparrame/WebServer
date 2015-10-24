<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Citizens extends CI_Controller {

    public function index() {
        $this->load->model('Citizensmodel');
        $this->db->select('nik, nama');
        $query = $this->db->get('citizens');
        $citizens = array();
        foreach($query->result() as $row) {
            $citizens[] = $row;
        }
        $data = array(
            'citizens' => $citizens,
            'chartjsAgama' => $this->Citizensmodel->chartJsAgama(),
            'chartjsJenisKelamin' => $this->Citizensmodel->chartJsJenisKelamin()
        );
        $this->load->view('citizens_list', $data);
    }

}

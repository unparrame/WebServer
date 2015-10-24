<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Digitalizers extends CI_Controller {

    public function index() {
        $this->load->view('digitalizers_login');
    }

    public function digitize() {
        $this->db->where('state', 'submitted');
        $query = $this->db->get('posts');
        if ($query->num_rows() === 0) {
            $this->load->view('digitalizers_nowork');
        } else {
            $row_number = rand(0, $query->num_rows());
            $row = $query->row($row_number);
            $data = array('row' => $row);
            $this->load->view('digitalizers_work', $data);
        }
    }

    public function submit() {
        $digitalizerEmail = 'pascalalfadian@live.com'; // TODO sample only!
        $nik = $this->input->post('nik');
        $postId = $this->input->post('postId');
        $data = $this->input->post();
        unset($data['postId']);
        foreach ($data as $key => $value) {
            $data[$key] = strtoupper($value);
        }
        $jsonData = json_encode($data);
        $this->db->insert('digitalizations', array(
            'digitalizerEmail' => $digitalizerEmail,
            'postId' => $postId,
            'data' => $jsonData,
            'nik' => $nik
        ));
        $this->db->where('postId', $postId);
        $this->db->where('data', $jsonData);
        $query = $this->db->get('digitalizations');
        if ($query->num_rows() >= 2) {
            $this->db->replace('citizens', $data);
            $this->load->view('digitalizers_thankyou', array(
                'message' => 'Terima kasih! Data sudah terverifikasi dan masuk ke basis data utama'
            ));
        } else {
            $this->load->view('digitalizers_thankyou', array(
                'message' => 'Terima kasih! Data akan masuk setelah terverifikasi sekali lagi'
            ));
        }
    }
}

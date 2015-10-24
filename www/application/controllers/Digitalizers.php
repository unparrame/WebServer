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
        $nik = $this->input->post('nik');
        $postId = $this->input->post('postId');
        unset($_POST['postId']);
        $data = json_encode($this->input->post());
        $digitalizerEmail = 'pascalalfadian@live.com'; // TODO sample only!
        $this->db->insert('digitalizations', array(
            'digitalizerEmail' => $digitalizerEmail,
            'postId' => $postId,
            'data' => $data,
            'nik' => $nik
        ));
        echo 'OK';
    }
}

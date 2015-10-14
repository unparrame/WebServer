<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Posters extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('postersmodel');
	}

	public function index()
	{
		$this->upload();
	}

	public function upload()
	{
		if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header("Access-Control-Allow-Origin: *");
    header('Access-Control-Allow-Credentials: true');
    header("Access-Control-Allow-Methods: GET, POST");
		}
		if(isset($_POST['posterEmail'])){
			$data = array (
				"posterEmail" => $_POST['posterEmail'],
				"image" => $_POST['image'],
			);
			$data["state"] = 'submitted';
			
			$insert = $this->postersmodel->insert($data);
			if($insert == true)
			{
				$info = array(
					"code" => 200,
					"status" => 'ok',
					"message" => 'Proses upload gambar telah berhasil',
				);
				echo json_encode($info);
			}
			else
			{
				$info = array(
					"code" => 300,
					"status" => 'gagal',
					"message" => 'Proses upload gambar telah gagal',
				);
				echo json_encode($info);
			}

		}
	}
}

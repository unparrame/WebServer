<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Posters extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('postsmodel');
	}

	public function index()
	{
		$this->upload();
	}

  public function base64toimg($base64string, $insert){
    define('UPLOAD_DIR', 'images/');
    $input = str_replace('data:image/jpeg;base64,', '', $base64string);
    $input = str_replace(' ', '+', $base64string);

    $data = base64_decode($input);
    $file = UPLOAD_DIR . $insert . '.png';

    return file_put_contents($file, $data);
  }

	public function upload()
	{
		if(isset($_POST['posterEmail'])){
      $image = $_POST['image'];

			$data = array (
				"posterEmail" => $_POST['posterEmail'],
				// "image" => $_POST['image'],
			);
			$data["state"] = 'submitted';

			$insert = $this->postsmodel->insert($data);
			if($insert > 0)
			{
        $this->base64toimg($image, $insert);
				$info = array(
					"code" => 200,
					"status" => 'ok',
					"message" => 'Proses upload gambar telah berhasil, ID : '. $insert ,
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

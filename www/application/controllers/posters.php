<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Posters extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->upload();
	}

	public function upload()
	{
		echo 'here';
	}
}

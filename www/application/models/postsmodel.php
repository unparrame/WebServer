<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Postsmodel extends CI_Model {
	public $posterEmail;
	public $state;
	public $postTime;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data)
	{
		$this->posterEmail = $data['posterEmail'];
		$this->postTime = date('Y-m-d H:i:s');
		$this->state = $data['state'];

    $this->db->insert('posts', $this);

    return $this->db->insert_id();
	}

}

?>

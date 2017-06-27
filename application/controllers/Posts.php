<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}


    public function view($slug) {

        echo urldecode($slug);

    }

}

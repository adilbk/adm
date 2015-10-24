<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller
{

	function __construct()

	{
	parent::__construct();

	$this->load->model('users_model');
	$this->load->model('news_model');

	}

//
	public function index()
	{
	$this->load->view('header');
	$this->load->view('back/nav_admin');
	$this->load->view('back/header_admin');

	$data['news_list'] = $this->news_model->get_all_news();
	$this->load->view('back/afficher_news_admin', $data);


	
	}

	public function afficher_utilisateurs(){
	$this->load->view('header');
	$this->load->view('back/nav_admin');
	$this->load->view('back/header_admin');

	$data['users_list'] = $this->users_model->get_all_users();
	$this->load->view('back/show_users', $data);


	}

	public function add_new(){
		$this->load->view('header');
		$this->load->view('back/nav_admin');
		$this->load->view('back/header_admin');

		$this->load->view('back/insert_new');
		$this->load->view('footer');

	}
	public function add_user(){
	$this->load->view('header');
	$this->load->view('back/nav_admin');
	$this->load->view('back/header_admin');
	$this->load->view('back/insert_user');
	$this->load->view('footer');

	}


			public function insert_new_db()
			{	 

			$udata['title'] = $this->input->post('title');

			$udata['text'] = $this->input->post('text');	 

			$res = $this->news_model->insert_new_to_db($udata);		 

			if($res){

			header('location:'.base_url()."Blog/".$this->index());

					}


			}


			public function insert_user()
			{	 

			$udata['name'] = $this->input->post('name');

			$udata['email'] = $this->input->post('email');	 

			$udata['address'] = $this->input->post('address');		 

			$udata['mobile'] = $this->input->post('mobile');		 

			$res = $this->users_model->insert_users_to_db($udata);		 

			if($res){

			header('location:'.base_url()."panel/".$this->index());

					}


			}


}





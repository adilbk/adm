<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

function __construct()

{

parent::__construct();


$this->load->model('news_model');

}

public function index()

{
$this->load->view('header');
$this->load->view('nav');

$data['news_list'] = $this->news_model->get_all_news();

$this->load->view('Show_blog', $data);

$this->load->view('footer');

}




}

<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

function __construct()

{

parent::__construct();




}

public function index()

{

$this->load->view('header');
$this->load->view('nav');
$this->load->view('Slider');
$this->load->view('show_home');
$this->load->view('footer');

}

}

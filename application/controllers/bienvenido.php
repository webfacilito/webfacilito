<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bienvenido extends CI_Controller {
	function __construct(){
		parent:: __construct();
	}
	function index(){
		$this->load->view('header');
		$this->load->view('contenido');
	}
	function welcome(){
		$this->load->view('welcome_message');
	}
}
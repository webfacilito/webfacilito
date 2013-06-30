<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bienvenido extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
	}

	function index(){
		$this->load->library('menu',array('Inicio','Contacto','Cursos','Acerca de'));
		$data['mi_menu']=$this->menu->construirmenu();
		$this->load->view('alquiler/header');
		$this->load->view('alquiler/principal',$data);
	}

	function holamundo(){
		$this->load->view('alquiler/header');
		$this->load->view('alquiler/holamundo');
	}
}
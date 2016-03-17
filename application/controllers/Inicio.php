<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inicio extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
	public function index(){
		$this->load->view('hoja1');
	}
	public function Inicio(){

	}
	public function carganombre(){
		$ida=$this->input->post('idabuscar');
		$resp = $this->db->query('select * from p where a='.$ida)->result();
			$data['idnombre']=$resp[0]->a;
			$data['nombre']=$resp[0]->b;
			$this->load->view('hoja2',$data);
	}
}

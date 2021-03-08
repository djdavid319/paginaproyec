<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_cuerpopag');
        $this->load->view('menu/view_footer');
		
	}

	public function encuentra()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_consejos_gym');
		$this->load->view('menu/view_footer');
	}

	public function siguientepag1()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_consejos_siguiente');
		$this->load->view('menu/view_footer');
	}

	public function encuentro()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_clases');
		$this->load->view('menu/view_footer');
	}

	public function encuentri()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_tienda');
		$this->load->view('menu/view_footer');
	}

	public function siguiente()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_tienda_siguiente');
		$this->load->view('menu/view_footer');
	}

	
	public function Entra()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_consejos_gym_sumplementos');
		$this->load->view('menu/view_footer');
	}


	public function Entra2()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_consejos_gym_top');
		$this->load->view('menu/view_footer');
	}

	public function Entra3()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_consejos_gym_ejercicios');
		$this->load->view('menu/view_footer');
	}

	public function Entra4()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_consejos_gym_grasa');
		$this->load->view('menu/view_footer');
	}

	public function Entra5()
	{
		$this->load->view('menu/view_header');
        $this->load->view('cuerpo/view_consejos_gym_adelgazar');
		$this->load->view('menu/view_footer');
	}
}




<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {



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

}




<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ingreso extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	
	public function index()
	{
			$this->load->view('ingreso_kinder');

	}

	public function kinder()
	{
			$this->load->view('ingreso_kinder');

	}

	public function primaria()
	{
			$this->load->view('ingreso_primaria');

	}

}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */
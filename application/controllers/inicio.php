<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	
	public function index()
	{
		
		$data['title']='Inicio';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topmenu', $data);
		$this->load->view('inicio', $data);
		$this->load->view('templates/footer', $data);
	}
}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */
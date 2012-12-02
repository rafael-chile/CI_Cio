<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	
	public function index()
	{
		
		$data['title']='Contacto';

		//$this->load->view('templates/header', $data);
		//$this->load->view('templates/topmenu', $data);
		//$this->load->view('contacto', $data);
		//$this->load->view('templates/footer', $data);

		$this->load->view('contacto');
	}
}

/* End of file contacto.php */
/* Location: ./application/controllers/contacto.php */
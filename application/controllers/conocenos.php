<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conocenos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	
	public function index()
	{
		
		$data['title']='Conocenos';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topmenu', $data);
		$this->load->view('conocenos', $data);
		$this->load->view('templates/footer', $data);
	}
}

/* End of file conocenos.php */
/* Location: ./application/controllers/conocenos.php */
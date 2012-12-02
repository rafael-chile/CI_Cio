<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Primaria extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	
	public function index()
	{
		
		$data['title']='Primaria';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topmenu', $data);
		$this->load->view('primaria', $data);
		$this->load->view('templates/footer', $data);
		
	}
}

/* End of file primaria.php */
/* Location: ./application/controllers/primaria.php */
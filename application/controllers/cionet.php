<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cionet extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	
	public function index()
	{
		
		$data['title']='Cionet';
		$data['message']='';
		/*$data['identity']='';
		$data['password']='';*/
		


		$this->load->view('templates/header', $data);
		$this->load->view('templates/topmenu', $data);
		$this->load->view('cionet', $data);
		$this->load->view('templates/footer', $data);
	}
}

/* End of file cionet.php */
/* Location: ./application/controllers/cionet.php */
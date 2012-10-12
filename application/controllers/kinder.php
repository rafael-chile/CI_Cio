<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kinder extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	
	public function index()
	{
		
		$data['title']='Kinder';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topmenu', $data);
		$this->load->view('kinder', $data);
		$this->load->view('templates/footer', $data);
	}
}

/* End of file kinder.php */
/* Location: ./application/controllers/kinder.php */
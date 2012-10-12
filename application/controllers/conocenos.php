<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conocenos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$this->load->view('conocenos');
	}
}

/* End of file conocenos.php */
/* Location: ./application/controllers/conocenos.php */
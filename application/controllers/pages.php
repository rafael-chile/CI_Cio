<?php

class Pages extends CI_Controller {

	public function view($page)
	{
		if ( ! file_exists('application/views/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
			
			$data['title'] = ucfirst($page); // Capitalize the first letter
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/topmenu', $data);
			$this->load->view($page, $data);
			$this->load->view('templates/footer', $data);
	}
}

?>
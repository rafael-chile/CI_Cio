<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inter extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	
	public function index()
	{
		
		if (!$this->ion_auth->logged_in())
		{
			
			//echo "NO esta logueado";
			redirect('cionet');
			

		}else{

			$group = array('members');
			
			if ($this->ion_auth->is_admin()){

						//$this->session->set_flashdata('message', 'You must be an admin to view this page');
						//redirect('welcome/index');
				echo "SI ES ADMIN";	

			}
			else{

				if($this->ion_auth->in_group($group)){

					//echo "SI GRUPO";
					redirect('inter/alumno');

				}else{

					echo "NO GRUPO";					

				}					
			
			}		

		}
		
			
	}


	public function alumno()
	{
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect('auth/login');
			echo "NO esta logueado";

		}else{

			echo "Logueado como alumno";

		}
		
			
	}

	public function padre()
	{
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect('auth/login');
			echo "NO esta logueado";

		}else{

			echo "Logueado como padre";

		}
		
			
	}
}

/* End of file cionet.php */
/* Location: ./application/controllers/cionet.php */
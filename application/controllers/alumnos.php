<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');
		
		$this->load->database();

		$this->load->model('inter_model');

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
	}

	//redirect if needed, otherwise display the user list
	
	public function index()
	{
		
		$groupSinPrivilegios = array('padres');
		$groupConPrivilegios = array('empleados','profesores','directores');

		if (!$this->ion_auth->logged_in())
		{
			//redirect them to the login page
			redirect('cionet', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin())
		{
			
			if($this->ion_auth->in_group($groupSinPrivilegios)){

					redirect('inter/padre');

			}
			elseif($this->ion_auth->in_group($groupConPrivilegios)){

					redirect('inter/empleado');

			}

		}
		elseif($this->ion_auth->is_admin())
		{
			redirect('inter/admin');
		}	
			
	}

	//#####################################
	//#####################################
	//AGREGAR NUEVO ALUMNO
	//#####################################
	//#####################################

	//create a new user
	function crear_alumno()
	{
		$this->data['title'] = "Create User";

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('inter', 'refresh');
		}

		//validate form input
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
		$this->form_validation->set_rules('apellido_pat', 'Apellido Paterno', 'xss_clean');
		$this->form_validation->set_rules('apellido_mat', 'Apellido Materno', 'xss_clean');
		$this->form_validation->set_rules('curp', 'CURP', 'xss_clean');
		$this->form_validation->set_rules('fecha_nac', 'Fecha de Nacimiento', 'required|xss_clean');
		$this->form_validation->set_rules('fecha_ingreso', 'Fecha de Ingreso', 'xss_clean');
		$this->form_validation->set_rules('direccion', 'Direccion', 'required|xss_clean');
		$this->form_validation->set_rules('telefono', 'Teléfono', 'xss_clean');
		$this->form_validation->set_rules('grado', 'Grado', 'required|xss_clean');
		$this->form_validation->set_rules('grupo', 'Grupo', 'required|xss_clean');

		if ($this->form_validation->run() == true)
		{
			$info_alumno = array(
				'nombre' 		=> $this->input->post('nombre'),
				'apellido_pat'  => $this->input->post('apellido_pat'),
				'apellido_mat'  => $this->input->post('apellido_mat'),
				'curp'  		=> $this->input->post('curp'),
				'fecha_nac'  	=> $this->input->post('fecha_nac'),
				'fecha_ingreso' => $this->input->post('fecha_ingreso'),
				'direccion'  	=> $this->input->post('direccion'),
				'telefono'  	=> $this->input->post('telefono'),
				'grado'    		=> $this->input->post('grado'),
				'grupo'      	=> $this->input->post('grupo'),
			);
		}
		if ($this->form_validation->run() == true && $this->inter_model->add_alumno($info_alumno))
		{ 
			$this->session->set_flashdata('message', $this->ion_auth->messages());

			$data['action']='nuevo_alumno';
			$this->load->view('templates/messages',$data);
		}
		else
		{ 
			
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			//display the create user form
			$this->data['nombre'] = array(
				'name'  => 'nombre',
				'id'    => 'nombre',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('nombre'),
			);
			$this->data['apellido_pat'] = array(
				'name'  => 'apellido_pat',
				'id'    => 'apellido_pat',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('apellido_pat'),
			);
			$this->data['apellido_mat'] = array(
				'name'  => 'apellido_mat',
				'id'    => 'apellido_mat',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('apellido_mat'),
			);
			$this->data['curp'] = array(
				'name'  => 'curp',
				'id'    => 'curp',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('curp'),
			);

			$this->data['fecha_nac'] = array(
				'name'  => 'fecha_nac',
				'id'    => 'fecha_nac',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('fecha_nac'),
			);

			$this->data['fecha_ingreso'] = array(
				'name'  => 'fecha_ingreso',
				'id'    => 'fecha_ingreso',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('fecha_ingreso'),
			);
			$this->data['direccion'] = array(
				'name'  => 'direccion',
				'id'    => 'direccion',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('direccion'),
			);
			$this->data['telefono'] = array(
				'name'  => 'telefono',
				'id'    => 'telefono',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('telefono'),
			);
			$this->data['grado'] = array(
				'name'  => 'grado',
				'id'    => 'grado',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('grado'),
			);
			$this->data['grupo'] = array(
				'name'  => 'grupo',
				'id'    => 'grupo',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('grupo'),
			);

			//Mantiene el INTER en la URL porque está en la carpeta INTER de las vistas.
			$this->load->view('inter/crear_alumno', $this->data);
		}
	}

}

/* End of file alumnos.php */
/* Location: ./application/controllers/alumnos.php */
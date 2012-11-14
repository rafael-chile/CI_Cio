<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inter extends CI_Controller {

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
		
		// Load MongoDB library instead of native db driver if required
		$this->config->item('use_mongodb', 'ion_auth') ?
		$this->load->library('mongo_db') :

		$this->load->database();

		//New model
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
			/*
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}


			$this->load->view('inter/admin', $this->data);
			*/
			redirect('inter/admin');
		}	
			
	}

	//log the user in
	function login()
		{
			$this->data['title'] = "Login";

			//validate form input
			$this->form_validation->set_rules('identity', 'Identity', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == true)
			{ 
				//check to see if the user is logging in
				//check for "remember me"
				$remember = (bool) $this->input->post('remember');

				if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
				{ 
					//if the login is successful
					//redirect them back to the home page
					$this->session->set_flashdata('message', $this->ion_auth->messages());
					
					//redirect('/', 'refresh'); //AF: Initial value. This is used when all the application depends on the Login System.
					
					redirect('inter', 'refresh');
				}
				else
				{ 
					//if the login was un-successful
					//redirect them back to the login page
					$this->session->set_flashdata('message', $this->ion_auth->errors());
					redirect('cionet', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
					
				}
			}
			else
			{  
				//the user is not logging in so display the login page
				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

				$this->data['identity'] = array('name' => 'identity',
					'id' => 'identity',
					'type' => 'text',
					'value' => $this->form_validation->set_value('identity'),
				);
				$this->data['password'] = array('name' => 'password',
					'id' => 'password',
					'type' => 'password',
				);


				$this->data['title']='Cionet';
				
				$this->load->view('inter/login', $this->data);
				//$this->load->view('cionet', $this->data);
				
								
				//$this->load->view('cionet', $this->data);
				/*$this->load->view('templates/header', $this->data);
				$this->load->view('templates/topmenu', $this->data);
				$this->load->view('cionet', $this->data);
				$this->load->view('templates/footer', $this->data);*/
				//redirect('cionet');
				//$this->load->view('cionet', $this->data);
			}
		}

	//log the user out
	function logout()
	{
		$this->data['title'] = "Logout";

		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('cionet', 'refresh');
	}

	//*****************************************
	//***   EMPIEZA: Mostrar tipos de cuentas
	//*****************************************

	public function padre()
	{
		
		$groupSinPrivilegios = array('padres');
		//$groupConPrivilegios = array('empleados','profesores','directores');
		
		if (!$this->ion_auth->logged_in())
		{
				//redirect('auth/login');
				echo "NO esta logueado";


		}

		if($this->ion_auth->in_group($groupSinPrivilegios))
		{

				//redirect('inter/alumno');
				//Agregar atributos de solo lectura a $data
				//echo "Puedo Ver";
				$data['nombrePadre']='Padre 1';
				//Mostrar página del alumno.
				//print_r($this->ion_auth->user()->row());
				//$this->load->view('alumno',$data);
				$this->load->view('inter/padre',$data);
		}
		else
		{
			echo "No tiene acceso a la secci&oacute;n de Padre";
		}
			
	}

	public function admin()
	{
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect('auth/login');
			echo "NO esta logueado";
			echo "<br/><a href='../cionet'>Login</a>";

		}elseif ($this->ion_auth->is_admin()){


			$this->data['nombre'] = 'Administrador';

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}


			//Enlistar todos los alumnos
			$this->data['alumnos'] = $this->inter_model->get_all();
			
			$this->load->view('inter/admin', $this->data);



		}
		else{
			echo "No tiene acceso a la secci&oacute;n de Admin";
		}
		
			
	}

	//*****************************************
	//***   TERMINA: Mostrar tipos de cuentas
	//*****************************************


	//change password
	function change_password()
	{
		$this->form_validation->set_rules('old', 'Old password', 'required');
		$this->form_validation->set_rules('new', 'New Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', 'Confirm New Password', 'required');

		if (!$this->ion_auth->logged_in())
		{
			redirect('inter/login', 'refresh');
		}

		$user = $this->ion_auth->user()->row();

		if ($this->form_validation->run() == false)
		{ 
			//display the form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
			$this->data['old_password'] = array(
				'name' => 'old',
				'id'   => 'old',
				'type' => 'password',
			);
			$this->data['new_password'] = array(
				'name' => 'new',
				'id'   => 'new',
				'type' => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['new_password_confirm'] = array(
				'name' => 'new_confirm',
				'id'   => 'new_confirm',
				'type' => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
			);
			$this->data['user_id'] = array(
				'name'  => 'user_id',
				'id'    => 'user_id',
				'type'  => 'hidden',
				'value' => $user->id,
			);

			//render
			$this->load->view('inter/change_password', $this->data);
		}
		else
		{
			$identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

			if ($change)
			{ 
				//if the password was successfully changed
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->logout();
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('inter/change_password', 'refresh');
			}
		}
	}

	//forgot password
	function forgot_password()
	{
		$this->form_validation->set_rules('email', 'Correo Electrónico', 'required');
		if ($this->form_validation->run() == false)
		{
			//setup the input
			$this->data['email'] = array('name' => 'email',
				'id' => 'email',
			);

			//set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->load->view('inter/forgot_password', $this->data);
		}
		else
		{
			//run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($this->input->post('email'));

			if ($forgotten)
			{ 
				//if there were no errors
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect("inter/login", 'refresh'); //we should display a confirmation page here instead of the login page
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("inter/forgot_password", 'refresh');
			}
		}
	}

	//reset password - final step for forgotten password
	public function reset_password($code = NULL)
	{
		if (!$code)
		{
			show_404();
		}

		$user = $this->ion_auth->forgotten_password_check($code);

		if ($user)
		{  
			//if the code is valid then display the password reset form

			$this->form_validation->set_rules('new', 'New Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
			$this->form_validation->set_rules('new_confirm', 'Confirm New Password', 'required');

			if ($this->form_validation->run() == false)
			{
				//display the form

				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

				$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
				$this->data['new_password'] = array(
					'name' => 'new',
					'id'   => 'new',
				'type' => 'password',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['new_password_confirm'] = array(
					'name' => 'new_confirm',
					'id'   => 'new_confirm',
					'type' => 'password',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['user_id'] = array(
					'name'  => 'user_id',
					'id'    => 'user_id',
					'type'  => 'hidden',
					'value' => $user->id,
				);
				$this->data['csrf'] = $this->_get_csrf_nonce();
				$this->data['code'] = $code;

				//render
				$this->load->view('inter/reset_password', $this->data);
			}
			else
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id')) 
				{

					//something fishy might be up
					$this->ion_auth->clear_forgotten_password_code($code);

					show_error('This form post did not pass our security checks.');

				} 
				else 
				{
					// finally change the password
					$identity = $user->{$this->config->item('identity', 'ion_auth')};

					$change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

					if ($change)
					{ 
						//if the password was successfully changed
						$this->session->set_flashdata('message', $this->ion_auth->messages());
						$this->logout();
					}
					else
					{
						$this->session->set_flashdata('message', $this->ion_auth->errors());
						redirect('inter/reset_password/' . $code, 'refresh');
					}
				}
			}
		}
		else
		{ 
			//if the code is invalid then send them back to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("auth/forgot_password", 'refresh');
		}
	}


	//activate the user
	function activate($id, $code=false)
	{
		if ($code !== false)
		{
			$activation = $this->ion_auth->activate($id, $code);
		}
		else if ($this->ion_auth->is_admin())
		{
			$activation = $this->ion_auth->activate($id);
		}

		if ($activation)
		{
			//redirect them to the auth page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect("inter", 'refresh');
		}
		else
		{
			//redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("inter/forgot_password", 'refresh');
		}
	}

	//deactivate the user
	function deactivate($id = NULL)
	{
		
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('inter', 'refresh');
		}

		$id = $this->config->item('use_mongodb', 'ion_auth') ? (string) $id : (int) $id;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('confirm', 'confirmation', 'required');
		$this->form_validation->set_rules('id', 'user ID', 'required|alpha_numeric');

		if ($this->form_validation->run() == FALSE)
		{
			// insert csrf check
			$this->data['csrf'] = $this->_get_csrf_nonce();
			$this->data['user'] = $this->ion_auth->user($id)->row();

			$this->load->view('inter/deactivate_user', $this->data);
		}
		else
		{
			// do we really want to deactivate?
			if ($this->input->post('confirm') == 'yes')
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
				{				
					show_error('This form post did not pass our security checks.');
				}

				// do we have the right userlevel?
				if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin())
				{
					$this->ion_auth->deactivate($id);
				}
			}

			//redirect them back to the auth page
			redirect('inter', 'refresh');
		}
	}

	//create a new user
	function create_user()
	{
		$this->data['title'] = "Create User";

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('inter', 'refresh');
		}

		

		//validate form input
		$this->form_validation->set_rules('first_name', 'Nombre', 'required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Apellido', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Correo electrónico', 'required|valid_email');
		$this->form_validation->set_rules('grupo', 'Grupo', 'required|xss_clean');
		$this->form_validation->set_rules('phone1', 'Teléfono', 'required|xss_clean|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('company', 'Trabajo', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', 'Confirmar contraseña', 'required');

		if ($this->form_validation->run() == true)
		{
			$username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			//$grupo    = $this->input->post('grupo');
			$grupo = array($this->input->post('grupo'));

			$additional_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				'company'    => $this->input->post('company'),
				'phone'      => $this->input->post('phone1'),
			);

		}

		if ($this->form_validation->run() == true && $id_user=($this->ion_auth->register($username, $password, $email, $additional_data, $grupo)))
		{ 
			//Read POST
			//print_r($this->input->post('hijo_hidden'));
			$hijos_info = $this->input->post('hijo_hidden');

			if($this->inter_model->add_alumno_to_padre($id_user,$hijos_info)){
				echo "Se agregaron los ids";
			}

			//check to see if we are creating the user
			//redirect them back to the admin page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			//redirect("inter", 'refresh');			
			$data['action']='nuevo_usuario';
			$this->load->view('templates/messages',$data);
		}
		else
		{ 
			
			


			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['first_name'] = array(
				'name'  => 'first_name',
				'id'    => 'first_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			);
			$this->data['last_name'] = array(
				'name'  => 'last_name',
				'id'    => 'last_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('last_name'),
			);
			$this->data['email'] = array(
				'name'  => 'email',
				'id'    => 'email',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('email'),
			);

			$this->data['grupo'] = array(
				'name'  => 'grupo',
				'id'    => 'grupo',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('grupo'),
			);

			$this->data['company'] = array(
				'name'  => 'company',
				'id'    => 'company',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('company'),
			);
			$this->data['phone1'] = array(
				'name'  => 'phone1',
				'id'    => 'phone1',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('phone1'),
			);
			/*$this->data['phone2'] = array(
				'name'  => 'phone2',
				'id'    => 'phone2',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('phone2'),
			);
			$this->data['phone3'] = array(
				'name'  => 'phone3',
				'id'    => 'phone3',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('phone3'),
			);*/
			$this->data['password'] = array(
				'name'  => 'password',
				'id'    => 'password',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password'),
			);
			$this->data['password_confirm'] = array(
				'name'  => 'password_confirm',
				'id'    => 'password_confirm',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password_confirm'),
			);

			$this->data['estudiante_bd'] = $this->inter_model->get_user_for_ajax();

			$this->load->view('inter/create_user', $this->data);
		}
	}

	
	//edit a user
	function edit_user($id)
	{
		$this->data['title'] = "Edit User";

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('inter', 'refresh');
		}

		$user = $this->ion_auth->user($id)->row();

		//process the phone number
		/*if (isset($user->phone) && !empty($user->phone))
		{
			$user->phone = explode('-', $user->phone);
		}*/

		//validate form input
		$this->form_validation->set_rules('first_name', 'Nombre', 'required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Apellido', 'required|xss_clean');
		$this->form_validation->set_rules('phone', 'Teléfono', 'required|xss_clean|min_length[5]|max_length[12]');
		//$this->form_validation->set_rules('phone2', 'Second Part of Phone', 'required|xss_clean|min_length[3]|max_length[3]');
		//$this->form_validation->set_rules('phone3', 'Third Part of Phone', 'required|xss_clean|min_length[4]|max_length[4]');
		$this->form_validation->set_rules('company', 'Trabajo', 'required|xss_clean');

		if (isset($_POST) && !empty($_POST))
		{
			// do we have a valid request?
			if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
			{
				show_error('This form post did not pass our security checks.');
			}

			$data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				'company'    => $this->input->post('company'),
				//'phone'      => $this->input->post('phone1') . '-' . $this->input->post('phone2') . '-' . $this->input->post('phone3'),
				'phone'      => $this->input->post('phone'),
			);

			//update the password if it was posted
			if ($this->input->post('password'))
			{
				$this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
				$this->form_validation->set_rules('password_confirm', 'Confirmar Contraseña', 'required');

				$data['password'] = $this->input->post('password');
			}

			if ($this->form_validation->run() === TRUE)
			{ 
				$this->ion_auth->update($user->id, $data);

				//check to see if we are creating the user
				//redirect them back to the admin page
				//$this->session->set_flashdata('message', "User Saved");
				//redirect("inter", 'refresh');


				$data['action']='usuario_editado';
				$this->load->view('templates/messages',$data);	

			}
		}
		
		//display the edit user form
		$this->data['csrf'] = $this->_get_csrf_nonce();

		//set the flash data error message if there is one
		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

		//pass the user to the view
		$this->data['user'] = $user;

		$this->data['first_name'] = array(
			'name'  => 'first_name',
			'id'    => 'first_name',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('first_name', $user->first_name),
		);
		$this->data['last_name'] = array(
			'name'  => 'last_name',
			'id'    => 'last_name',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('last_name', $user->last_name),
		);
		$this->data['company'] = array(
			'name'  => 'company',
			'id'    => 'company',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('company', $user->company),
		);
		$this->data['phone'] = array(
			'name'  => 'phone',
			'id'    => 'phone',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('phone', $user->phone),
		);
		/*$this->data['phone2'] = array(
			'name'  => 'phone2',
			'id'    => 'phone2',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('phone2', $user->phone[1]),
		);
		$this->data['phone3'] = array(
			'name'  => 'phone3',
			'id'    => 'phone3',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('phone3', $user->phone[2]),
		);*/
		$this->data['password'] = array(
			'name' => 'password',
			'id'   => 'password',
			'type' => 'password'
		);
		$this->data['password_confirm'] = array(
			'name' => 'password_confirm',
			'id'   => 'password_confirm',
			'type' => 'password'
		);

		//$this->load->view('inter/edit_user', $this->data);



		if ($this->form_validation->run() !== TRUE)
		{ 
			$this->load->view('inter/edit_user', $this->data);

		}


	}

	function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key   = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}

	function _valid_csrf_nonce()
	{
		if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
			$this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	//**********************************************
	//**********************************************
	//**********************************************
	//**********************************************
	


	public function alumno()
	{
		
		$groupSinPrivilegios = array('members','alumnos','padres');
		$groupConPrivilegios = array('empleados','profesores','directores');
		
		if (!$this->ion_auth->logged_in())
		{
				//redirect('auth/login');
				echo "NO esta logueado";


		}

		if($this->ion_auth->in_group($groupSinPrivilegios))
		{

				//redirect('inter/alumno');
				//Agregar atributos de solo lectura a $data
				echo "Puedo Ver";
				//Mostrar página del alumno.
				print_r($this->ion_auth->user()->row());
				//$this->load->view('alumno',$data);
		}
		/*elseif($this->ion_auth->in_group($groupConPrivilegios) || $this->ion_auth->is_admin())
		{

				//Agregar atributos de escritura a $data
				//redirect('inter/empleado');
				echo "Puedo editar";
				//Mostrar página del alumno.
				print_r($this->ion_auth->user());
				//$this->load->view('alumno',$data);

		}*/

			//Mostrar página del alumno.
			//print_r($this->ion_auth->user());
			//$this->load->view('alumno',$data);
			
	}

	

	public function empleado()
	{
		
		if (!$this->ion_auth->logged_in())
		{
			//redirect('auth/login');
			echo "NO esta logueado";

		}

		if($this->ion_auth->in_group($groupConPrivilegios) || $this->ion_auth->is_admin())
		{

				//Agregar atributos de escritura.
				//redirect('inter/empleado');
				echo "Puedo ver y editar";

		}
		
			
	}

	

}

/* End of file inter.php */
/* Location: ./application/controllers/inter.php */
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inter_model extends CI_Model
{
	public $activation_code;
	public $forgotten_password_code;
	public $new_password;
	public $identity;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('cookie');
		$this->load->helper('date');
		$this->load->library('session');

	}

	//#####################################
	//#####################################
	//			ALUMNOS
	//#####################################
	//#####################################

	/*GET ONLY ONE*/
	public function get_user($id = NULL)
	{
		//$this->trigger_events('user');

		//if no id was passed use the current users id
		$id || $id = $this->session->userdata('user_id');

		
		$this->db->select('id,nombre');
		$this->db->from('alumnos');
		$this->db->where('id', $id);
		$this->db->limit(1);
		$query = $this->db->get();

		//$this->users();

		return($query->result());
		//print_r($query->result());
	}

	/*GET ONLY ONE FOR SEARCH*/
	public function get_user_for_ajax()
	{
				
		$this->db->select('id as value,CONCAT_WS(" ",nombre,apellido_pat) as label',FALSE);
		$this->db->from('alumnos');
		$query = $this->db->get();

		return json_encode($query->result());
		
	}


	public function get_all_user_fields($id)
	{
		//$this->trigger_events('user');

		//if no id was passed use the current users id
		$id || $id = $this->session->userdata('user_id');

		
		$this->db->select('*');
		$this->db->from('alumnos');
		$this->db->where('id', $id);
		$this->db->limit(1);
		$query = $this->db->get();

		//$this->users();

		return($query->result());
		//print_r($query->result());
	}


	/**
	 **/
	public function get_all()
	{
		$query = $this->db->get('alumnos');

		if ($query->num_rows() >= 1)
		{
			return $query->result();
		}
		else{
			return FALSE;
		}
	}


	/**
	 * Add
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function add_alumno($additional_data = array())
	{
		
		$datos_separados = array();
		$columnas = $this->db->list_fields('alumnos');

		if (is_array($additional_data))
		{
			foreach ($columnas as $column)
			{
				if (array_key_exists($column, $additional_data))
					$datos_separados[$column] = $additional_data[$column];
			}
		}

		if($this->db->insert('alumnos', $datos_separados)){
		
			return true;
		
		}else{
		
			return false;
		}
		
	}


	/**
	 * Delete
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function delete_alumno($id)
	{
		
		$this->db->where('id',$id);
		if($this->db->delete('alumnos')){
		
			return true;
		
		}else{
		
			return false;
		}
		
	}


	/**
	 * Update
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function update_alumno($id_user, $additional_data = array())
	{
		
		$datos_separados = array();
		$columnas = $this->db->list_fields('alumnos');

		if (is_array($additional_data))
		{
			foreach ($columnas as $column)
			{
				if (array_key_exists($column, $additional_data))
					$datos_separados[$column] = $additional_data[$column];
			}
		}

		//return $datos_separados;
		$this->db->where('id', $id_user);
		if($this->db->update('alumnos', $datos_separados)){
		
			return true;
		
		}else{
		
			return false;
		}
		
	}



	/**
	 * Add 
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function add_alumno_to_padre($id_user, $hijos_info)
	{
		//echo $id_user;
		
		//print_r($hijos_info);

		if (is_array($hijos_info))
		{
			foreach ($hijos_info as $alumno)
			{
				if($alumno!= 0){
					$this->db->set('alumno_id', $alumno);
					$this->db->set('user_id', $id_user);
					$this->db->insert('alumnos_users');	
				}
				
			}
		}

		/*if($this->db->insert('alumnos_users', $datos_separados)){
		
			return true;
		
		}else{
		
			return false;
		}*/
	}

	//#####################################
	//#####################################
	//			CIRCULARES
	//#####################################
	//#####################################

	/**
	 **/
	public function get_all_circulares()
	{
		$query = $this->db->get('circulares');

		if ($query->num_rows() >= 1)
		{
			return $query->result();
		}
		else{
			return FALSE;
		}
	}



	/**
	 * retrieve all info from a "circular"
	 **/
	public function get_all_circular_fields($id)
	{
		
		$this->db->select('*');
		$this->db->from('circulares');
		$this->db->where('id', $id);
		$this->db->limit(1);
		$query = $this->db->get();
		
		return($query->result());

	}

	

	/**
	 * add_circular
	 **/
	public function add_circular($titulo,$anio,$numero,$fecha,$asunto,$contenido)
	{
		
		$this->db->set('titulo', $titulo);
		$this->db->set('anio', $anio);
		$this->db->set('numero', $numero);
		$this->db->set('fecha', $fecha);
		$this->db->set('asunto', $asunto);
		$this->db->set('contenido', $contenido);
		
		if ($this->db->insert('circulares')) {
				return true;
			}	

		
	}


	/**
	 * update_circular
	 **/
	
	public function update_circular($id_circular, $additional_data = array())
	{
		
		$datos_separados = array();
		$columnas = $this->db->list_fields('circulares');

		if (is_array($additional_data))
		{
			foreach ($columnas as $column)
			{
				if (array_key_exists($column, $additional_data))
					$datos_separados[$column] = $additional_data[$column];
			}
		}

		//return $datos_separados;
		$this->db->where('id', $id_circular);
		if($this->db->update('circulares', $datos_separados)){
		
			return true;
		
		}else{
		
			return false;
		}
		
	}


	/**
	 * Delete Circular
	 **/
	public function delete_circular($id)
	{
		
		$this->db->where('id',$id);
		if($this->db->delete('circulares')){
		
			return true;
		
		}else{
		
			return false;
		}
		
	}


	//#####################################
	//#####################################
	//			USER - ADMIN's
	//#####################################
	//#####################################

	/**
	 * Checks username
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function username_check($username = '')
	{
		$this->trigger_events('username_check');

		if (empty($username))
		{
			return FALSE;
		}

		$this->trigger_events('extra_where');

		return $this->db->where('username', $username)
		                ->count_all_results($this->tables['users']) > 0;
	}

	/**
	 * Checks email
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function email_check($email = '')
	{
		$this->trigger_events('email_check');

		if (empty($email))
		{
			return FALSE;
		}

		$this->trigger_events('extra_where');

		return $this->db->where('email', $email)
		                ->count_all_results($this->tables['users']) > 0;
	}

	/**
	 * Identity check
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function identity_check($identity = '')
	{
		$this->trigger_events('identity_check');

		if (empty($identity))
		{
			return FALSE;
		}

		return $this->db->where($this->identity_column, $identity)
		                ->count_all_results($this->tables['users']) > 0;
	}

	/**
	 * Insert a forgotten password key.
	 *
	 * @return bool
	 * @author Mathew
	 * @updated Ryan
	 **/
	public function forgotten_password($identity)
	{
		if (empty($identity))
		{
			$this->trigger_events(array('post_forgotten_password', 'post_forgotten_password_unsuccessful'));
			return FALSE;
		}

		$key = $this->hash_code(microtime().$identity);

		$this->forgotten_password_code = $key;

		$this->trigger_events('extra_where');

		$update = array(
		    'forgotten_password_code' => $key,
		    'forgotten_password_time' => time()
		);

		$this->db->update($this->tables['users'], $update, array($this->identity_column => $identity));

		$return = $this->db->affected_rows() == 1;

		if ($return)
			$this->trigger_events(array('post_forgotten_password', 'post_forgotten_password_successful'));
		else
			$this->trigger_events(array('post_forgotten_password', 'post_forgotten_password_unsuccessful'));

		return $return;
	}

	/**
	 * Forgotten Password Complete
	 *
	 * @return string
	 * @author Mathew
	 **/
	public function forgotten_password_complete($code, $salt=FALSE)
	{
		$this->trigger_events('pre_forgotten_password_complete');

		if (empty($code))
		{
			$this->trigger_events(array('post_forgotten_password_complete', 'post_forgotten_password_complete_unsuccessful'));
			return FALSE;
		}

		$profile = $this->where('forgotten_password_code', $code)->users()->row(); //pass the code to profile

		if ($profile) {

			if ($this->config->item('forgot_password_expiration', 'ion_auth') > 0) {
				//Make sure it isn't expired
				$expiration = $this->config->item('forgot_password_expiration', 'ion_auth');
				if (time() - $profile->forgotten_password_time > $expiration) {
					//it has expired
					$this->set_error('forgot_password_expired');
					$this->trigger_events(array('post_forgotten_password_complete', 'post_forgotten_password_complete_unsuccessful'));
					return FALSE;
				}
			}

			$password = $this->salt();

			$data = array(
			    'password'                => $this->hash_password($password, $salt),
			    'forgotten_password_code' => NULL,
			    'active'                  => 1,
			 );

			$this->db->update($this->tables['users'], $data, array('forgotten_password_code' => $code));

			$this->trigger_events(array('post_forgotten_password_complete', 'post_forgotten_password_complete_successful'));
			return $password;
		}

		$this->trigger_events(array('post_forgotten_password_complete', 'post_forgotten_password_complete_unsuccessful'));
		return FALSE;
	}

	/**
	 * register
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function register($username, $password, $email, $additional_data = array(), $groups = array())
	{
		$this->trigger_events('pre_register');

		$manual_activation = $this->config->item('manual_activation', 'ion_auth');

		if ($this->identity_column == 'email' && $this->email_check($email))
		{
			$this->set_error('account_creation_duplicate_email');
			return FALSE;
		}
		elseif ($this->identity_column == 'username' && $this->username_check($username))
		{
			$this->set_error('account_creation_duplicate_username');
			return FALSE;
		}

		// If username is taken, use username1 or username2, etc.
		if ($this->identity_column != 'username')
		{
			$original_username = $username;
			for($i = 0; $this->username_check($username); $i++)
			{
				if($i > 0)
				{
					$username = $original_username . $i;
				}
			}
		}

		// IP Address
		$ip_address = $this->_prepare_ip($this->input->ip_address());
		$salt       = $this->store_salt ? $this->salt() : FALSE;
		$password   = $this->hash_password($password, $salt);

		// Users table.
		$data = array(
		    'username'   => $username,
		    'password'   => $password,
		    'email'      => $email,
		    'ip_address' => $ip_address,
		    'created_on' => time(),
		    'last_login' => time(),
		    'active'     => ($manual_activation === false ? 1 : 0)
		);

		if ($this->store_salt)
		{
			$data['salt'] = $salt;
		}

		//filter out any data passed that doesnt have a matching column in the users table
		//and merge the set user data and the additional data
		$user_data = array_merge($this->_filter_data($this->tables['users'], $additional_data), $data);

		$this->trigger_events('extra_set');

		$this->db->insert($this->tables['users'], $user_data);

		$id = $this->db->insert_id();

		if (!empty($groups))
		{
			//add to groups
			foreach ($groups as $group)
			{
				$this->add_to_group($group, $id);
			}
		}

		//add to default group if not already set
		$default_group = $this->where('name', $this->config->item('default_group', 'ion_auth'))->group()->row();
		if ((isset($default_group->id) && !isset($groups)) || (empty($groups) && !in_array($default_group->id, $groups)))
		{
			$this->add_to_group($default_group->id, $id);
		}

		$this->trigger_events('post_register');

		return (isset($id)) ? $id : FALSE;
	}

	/**
	 * login
	 *
	 * @return bool
	 * @author Mathew
	 **/
	public function login($identity, $password, $remember=FALSE)
	{
		$this->trigger_events('pre_login');

		if (empty($identity) || empty($password))
		{
			$this->set_error('login_unsuccessful');
			return FALSE;
		}

		$this->trigger_events('extra_where');

		$query = $this->db->select($this->identity_column . ', username, email, id, password, active, last_login')
		                  ->where($this->identity_column, $this->db->escape_str($identity))
		                  ->limit(1)
		                  ->get($this->tables['users']);
						  
		if($this->is_time_locked_out($identity))
		{
			//Hash something anyway, just to take up time
			$this->hash_password($password);
			
			$this->trigger_events('post_login_unsuccessful');
			$this->set_error('login_timeout');

			return FALSE;
		}

		if ($query->num_rows() === 1)
		{
			$user = $query->row();

			$password = $this->hash_password_db($user->id, $password);

			if ($password === TRUE)
			{
				if ($user->active == 0)
				{
					$this->trigger_events('post_login_unsuccessful');
					$this->set_error('login_unsuccessful_not_active');

					return FALSE;
				}

				$session_data = array(
				    'identity'             => $user->{$this->identity_column},
				    'username'             => $user->username,
				    'email'                => $user->email,
				    'user_id'              => $user->id, //everyone likes to overwrite id so we'll use user_id
				    'old_last_login'       => $user->last_login
				);

				$this->update_last_login($user->id);

				$this->clear_login_attempts($identity);

				$this->session->set_userdata($session_data);

				if ($remember && $this->config->item('remember_users', 'ion_auth'))
				{
					$this->remember_user($user->id);
				}

				$this->trigger_events(array('post_login', 'post_login_successful'));
				$this->set_message('login_successful');

				return TRUE;
			}
		}

		//Hash something anyway, just to take up time
		$this->hash_password($password);

		$this->increase_login_attempts($identity);

		$this->trigger_events('post_login_unsuccessful');
		$this->set_error('login_unsuccessful');

		return FALSE;
	}

	/**
	 * Get the time of the last time a login attempt occured from given IP-address or identity
	 *
	 * @param	string $identity
	 * @return	int
	 */
	public function get_last_attempt_time($identity) {
		if ($this->config->item('track_login_attempts', 'ion_auth')) {
			$ip_address = $this->_prepare_ip($this->input->ip_address());
			
			$this->db->select_max('time');
			$this->db->where('ip_address', $ip_address);
			if (strlen($identity) > 0) $this->db->or_where('login', $identity);
			$qres = $this->db->get($this->tables['login_attempts'], 1);
			
			if($qres->num_rows() > 0) {
				return $qres->row()->time;
			}
		}
		
		return 0;
	}

	

	/**
	 * groups
	 *
	 * @return object
	 * @author Ben Edmunds
	 **/
	/**
	 * update
	 *
	 * @return bool
	 * @author Phil Sturgeon
	 **/
	public function update($id, array $data)
	{
		$this->trigger_events('pre_update_user');

		$user = $this->user($id)->row();

		$this->db->trans_begin();

		if (array_key_exists($this->identity_column, $data) && $this->identity_check($data[$this->identity_column]) && $user->{$this->identity_column} !== $data[$this->identity_column])
		{
			$this->db->trans_rollback();
			$this->set_error('account_creation_duplicate_'.$this->identity_column);

			$this->trigger_events(array('post_update_user', 'post_update_user_unsuccessful'));
			$this->set_error('update_unsuccessful');

			return FALSE;
		}

		// Filter the data passed
		$data = $this->_filter_data($this->tables['users'], $data);

		if (array_key_exists('username', $data) || array_key_exists('password', $data) || array_key_exists('email', $data))
		{
			if (array_key_exists('password', $data))
			{
				if( ! empty($data['password']))
				{
					$data['password'] = $this->hash_password($data['password'], $user->salt);
				}
				else
				{
					// unset password so it doesn't effect database entry if no password passed
					unset($data['password']);
				}
			}
		}

		$this->trigger_events('extra_where');
		$this->db->update($this->tables['users'], $data, array('id' => $user->id));

		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();

			$this->trigger_events(array('post_update_user', 'post_update_user_unsuccessful'));
			$this->set_error('update_unsuccessful');
			return FALSE;
		}

		$this->db->trans_commit();

		$this->trigger_events(array('post_update_user', 'post_update_user_successful'));
		$this->set_message('update_successful');
		return TRUE;
	}

	/**
	* delete_user
	*
	* @return bool
	* @author Phil Sturgeon
	**/
	public function delete_user($id)
	{
		$this->trigger_events('pre_delete_user');

		$this->db->trans_begin();

		// remove user from groups
		$this->remove_from_group(NULL, $id);

		// delete user from users table
		$this->db->delete($this->tables['users'], array('id' => $id));

		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			$this->trigger_events(array('post_delete_user', 'post_delete_user_unsuccessful'));
			$this->set_error('delete_unsuccessful');
			return FALSE;
		}

		$this->db->trans_commit();

		$this->trigger_events(array('post_delete_user', 'post_delete_user_successful'));
		$this->set_message('delete_successful');
		return TRUE;
	}

	/**
	 * update_last_login
	 *
	 * @return bool
	 * @author Ben Edmunds
	 **/
	public function update_last_login($id)
	{
		$this->trigger_events('update_last_login');

		$this->load->helper('date');

		$this->trigger_events('extra_where');

		$this->db->update($this->tables['users'], array('last_login' => time()), array('id' => $id));

		return $this->db->affected_rows() == 1;
	}

	/**
	 * set_lang
	 *
	 * @return bool
	 * @author Ben Edmunds
	 **/
	public function set_lang($lang = 'en')
	{
		$this->trigger_events('set_lang');

		// if the user_expire is set to zero we'll set the expiration two years from now.
		if($this->config->item('user_expire', 'ion_auth') === 0)
		{
			$expire = (60*60*24*365*2);
		}
		// otherwise use what is set
		else
		{
			$expire = $this->config->item('user_expire', 'ion_auth');
		}

		set_cookie(array(
			'name'   => 'lang_code',
			'value'  => $lang,
			'expire' => $expire
		));

		return TRUE;
	}

}

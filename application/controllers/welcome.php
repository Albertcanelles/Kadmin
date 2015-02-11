<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
      
      parent::__construct();
      $this->load->database();   // Carreguem la base de dades
      $this->load->library('form_validation');  // La llibreria per fer els camps requerits
      $this->load->model('model_concerts');		// Carreguem el model que farem servir
    } 
	/*
	 */

	// Totes les vistes carregan les dades des de el model i pasan-lo en variable data
	public function index()   {
		if($this->session->userdata('logged_in'))  {
     			$session_data = $this->session->userdata('logged_in');
     			$data['username'] = $session_data['username'];
			$this->load->view('welcome_message');
   		}
   		else  {
     			//If no session, redirect to login page
    			 redirect('login', 'refresh');
   		}
	}

	public function concert()  {
	
		if($this->session->userdata('logged_in'))  {
     			$session_data = $this->session->userdata('logged_in');
     			$data['username'] = $session_data['username'];
			$data = $this->model_concerts->getconcert();
			$this->load->view('Concerts', $data);
   		}
   		else  {
     			//If no session, redirect to login page
    			 redirect('login', 'refresh');
   		}
		
	}
	
	 public function assajs()  {
	if($this->session->userdata('logged_in'))  {
     			$session_data = $this->session->userdata('logged_in');
     			$data['username'] = $session_data['username'];
			$data = $this->model_concerts->getassajs();
			$this->load->view('Assajos', $data);
   		}
   		else  {
    			//If no session, redirect to login page
    			 redirect('login', 'refresh');
   		}
		
	}
	
	 public function video()	{
			if($this->session->userdata('logged_in'))  {
     			$session_data = $this->session->userdata('logged_in');
     			$data['username'] = $session_data['username'];
			$data = $this->model_concerts->getvideos();
			$this->load->view('Videos', $data);
   		}
   		else  {
     			//If no session, redirect to login page
    			 redirect('login', 'refresh');
   		}
	}
	
	public function membre() {
		
 		if($this->session->userdata('logged_in'))  {
     			$session_data = $this->session->userdata('logged_in');
     			$data['username'] = $session_data['username'];
			$data = $this->model_concerts->getUser();
			$this->load->view('Membres', $data);
   		}
   		else  {
     			//If no session, redirect to login page
    			 redirect('login', 'refresh');
   		}
		
	}
	
		public function partitura()   {
	if($this->session->userdata('logged_in'))   {
     		$session_data = $this->session->userdata('logged_in');
     		$data['username'] = $session_data['username'];
		$data = $this->model_concerts->getpartitures();
		$this->load->view('Partitures', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}
	
		public function perfil()	{
				if($this->session->userdata('logged_in'))  {
	     			$session_data = $this->session->userdata('logged_in');
	     			$data['username'] = $session_data['username'];
				$data = $this->model_concerts->getUser();
				$this->load->view('perfil', $data);
	   		}
	   		else  {
	     			//If no session, redirect to login page
	    			 redirect('login', 'refresh');
	   		}
		}

	public function welcomemembers()  {
		 if($this->session->userdata('logged_in')) {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('welcome_members');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}


	public function vistaassaj()  {
		 if($this->session->userdata('logged_in'))   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->model('model_concerts');
	 $data = $this->model_concerts->getassajs();
	 $this->load->view('vassaj', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}
	
	public function vistaconcert()  {
		 if($this->session->userdata('logged_in'))  {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
    $this->load->model('model_concerts');
		$data = $this->model_concerts->getconcert();
		$this->load->view('vconcert',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}

	public function vistapartitures()  {

		  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
		$this->load->model('model_concerts');
		$data = $this->model_concerts->getpartitures();
		$this->load->view('vpartitures', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function vistavideos()  {

		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
		$this->load->model('model_concerts');
		$data = $this->model_concerts->getvideos();
		$this->load->view('vvideos', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
   
}
   
   public function insertarconcert() {
		$this->form_validation->set_rules('Concert', 'Concert', 'required|xss_clean');
		$this->form_validation->set_rules('Lloc', 'Lloc', 'required|xss_clean');
		$this->form_validation->set_rules('Roba', 'Roba', 'required|xss_clean');
		$this->form_validation->set_rules('Diahora', 'Diahora', 'required|xss_clean');
		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            <strong>Error!</strong> El camp %s es obligat</div>');
	
		if($this->form_validation->run() == FALSE)
			{
				$data = $this->model_concerts->getconcert();
				$this->load->view('Concerts', $data);
			}else{
		$concerts = $this->input->post('Concert');
		$lloc = $this->input->post('Lloc');
		$roba = $this->input->post('Roba');
		$data = $this->input->post('Diahora');
		$passacalles = $this->input->post('optionsRadios');
		//$lparti = $this->select->post('ListPartitures');
		$this->model_concerts->insertConcert($concerts, $lloc, $roba, $data,$passacalles);
		// Push The notification with parameters
		$this->load->library('PushBots');
		$pb = new PushBots();
		// Application ID
		$appID = '538380281d0ab1d1048b45a7';
		// Application Secret
		$appSecret = '347f3b8fffefeea0096dcfa17d4345b7';
		$pb->App($appID, $appSecret);
		// Notification msg
		$msg="Un nou concert :D";
		$pb->Alert($msg);

		$platforms= array(0,1);
		$pb->Platform($platforms);
		// Push it !
		$pb->Push();
		redirect('welcome/concert');
	}
	}
		public function insertarassajs() {
		$this->form_validation->set_rules('Assajs', 'Assajs', 'required|xss_clean');
		$this->form_validation->set_rules('Lloc', 'Lloc', 'required|xss_clean');
		$this->form_validation->set_rules('proxact', 'proxact', 'required|xss_clean');
		$this->form_validation->set_rules('Diahora', 'Diahora', 'required|xss_clean');
		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            <strong>Error!</strong> El camp %s es obligat</div>');
		if($this->form_validation->run() == FALSE)
			{
				$data = $this->model_concerts->getassajs();
				$this->load->view('Assajos', $data);
			}else{
		$asaj = $this->input->post('Assajs');
		$lloc = $this->input->post('Lloc');
		$proxact = $this->input->post('proxact');
		$data = $this->input->post('Diahora');		
		$this->model_concerts->insertAssajs($asaj, $lloc, $proxact, $data);
		// Push The notification with parameters
		$this->load->library('PushBots');
		$pb = new PushBots();
		// Application ID
		$appID = '538380281d0ab1d1048b45a7';
		// Application Secret
		$appSecret = '347f3b8fffefeea0096dcfa17d4345b7';
		$pb->App($appID, $appSecret);
		// Notification msg
		$msg="Un nou Assajs :D";
		$pb->Alert($msg);
		$platforms= array(0,1);
		$pb->Platform($platforms);
		// Push it !
		$pb->Push();
		redirect('welcome/assajs');	
	}
	}
	
	// Falta remodelar la taula d'usuaris
	public function insertusuaris() {
		$this->form_validation->set_rules('Usuari', 'Usuari', 'required|xss_clean');
		$this->form_validation->set_rules('Contrasenya', 'Contrasenya', 'required');
		$this->form_validation->set_rules('confirmala', 'Contrasenya', 'required|matches[Contrasenya]');
		$this->form_validation->set_rules('Nom', 'Nom', 'required|xss_clean');
		$this->form_validation->set_rules('Cognom', 'Cognom', 'required|xss_clean');
		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            <strong>Error!<span class="glyphicons glyphicons-skull"></span></strong> El camp %s es obligat</div>');
		if($this->form_validation->run() == FALSE)
			{
				$data = $this->model_concerts->getUser();
				$this->load->view('Membres', $data);
			}else{
				$usuari = $this->input->post('Usuari');
				$contrasenya = $this->input->post('Contrasenya');
				$nom = $this->input->post('Nom');
				$cognom = $this->input->post('Cognom');
				$rol = $this->input->post('optionUsers');
				$this->model_concerts->insertUsuari($usuari, $contrasenya,$nom,$cognom,$rol);
				redirect('welcome/membre');	
	}
	}
	
	public function insertvideos() {
		$this->form_validation->set_rules('Nom', 'Nom', 'required|xss_clean');
		$this->form_validation->set_rules('Link', 'Link', 'required|xss_clean');
		$this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            <strong>Error!<span class="glyphicons glyphicons-skull"></span></strong> El camp %s es obligat</div>');
		if($this->form_validation->run() == FALSE)
			{
				$data = $this->model_concerts->getvideos();
				$this->load->view('Videos', $data);
			}else {
		$nom = $this->input->post('Nom');
		$descripcio = $this->input->post('descripcio');
		$link = $this->input->post('Link');
		$this->model_concerts->insertVideo($nom,$descripcio ,$link);
		// Push The notification with parameters
		$this->load->library('PushBots');
		$pb = new PushBots();
		// Application ID
		$appID = '538380281d0ab1d1048b45a7';
		// Application Secret
		$appSecret = '347f3b8fffefeea0096dcfa17d4345b7';
		$pb->App($appID, $appSecret);
		// Notification msg
		$msg="Un nou video :D";
		$pb->Alert($msg);
		$platforms= array(0,1);
		$pb->Platform($platforms);
		// Push it !
		$pb->Push();
		redirect('welcome/video');	
		}
	}
	
	public function upload() {
		$data['content'] = 'Partitures';
		$this->load->vars($data);
		$this->load->view('Partitures');
	}

	public function DoUpload() {

		$config_file = array (
		'upload_path' => './partitures/',
		'allowed_types' => 'pdf|doc|docx',
		'overwrite' => false,
		'max_size' => 0,
		'max_width' => 0,
		'max_height' => 0,
		'encrypt_name' => false,
		'remove_spaces' => true,
		);
		$this->upload->initialize($config_file);
		if (!$this->upload->do_upload('cipote')) {
			redirect('welcome/partitura');
			$error = $this->upload->display_errors();
			echo $error;
		}
		else {
			$this->session->set_flashdata('success_upload','Pujat Correcament');
			$nom = $this->upload->file_name;
			$file_name = base_url()."partitures/".$this->upload->file_name;
			$this->model_concerts->insertPartitures($nom, $file_name);
			// Push The notification with parameters
			$this->load->library('PushBots');
			$pb = new PushBots();
			// Application ID
			$appID = '538380281d0ab1d1048b45a7';
			// Application Secret
			$appSecret = '347f3b8fffefeea0096dcfa17d4345b7';
			$pb->App($appID, $appSecret);
			// Notification msg
			$msg="Una nova partitura :D";
			$pb->Alert($msg);
			$platforms= array(0,1);
			$pb->Platform($platforms);
			// Push it !
			$pb->Push();
			redirect('welcome/partitura');
			}
	}
	
	public function eliminarConcerts($id)
	{

		$this->load->model('model_concerts');
		$this->model_concerts->eliminarConcert($id);
		redirect('welcome/concert');
	}

	public function eliminarAssajos($id)
	{
		$this->load->model('model_concerts');
		$this->model_concerts->eliminarAssajs($id);
		redirect('welcome/assajs');
	}

	public function eliminarVideos($id)
	{
		$this->load->model('model_concerts');
		$this->model_concerts->eliminarVideo($id);
		redirect('welcome/video');
	}

	public function eliminarPartitures($id)
	{
		$this->load->model('model_concerts');
		$this->model_concerts->eliminarPartitura($id);
		redirect('welcome/partitura');
	}

	public function eliminarMembres($id)
	{
		$this->load->model('model_concerts');
		$this->model_concerts->eliminarMembre($id);
		redirect('welcome/membre');
	}
	
	/*
	

	public function welcomemembers()
	{
		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('welcome_members');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}


	public function vistaassaj()
	{
		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->model('model_concerts');
	 $data = $this->model_concerts->getassajs();
	 $this->load->view('vassaj', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}
	
	public function vistaconcert()
	{
		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
    $this->load->model('model_concerts');
		$data = $this->model_concerts->getconcert();
		$this->load->view('vconcert',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}

	public function vistapartitures()
	{

		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
		$this->load->model('model_concerts');
		$data = $this->model_concerts->getpartitures();
		$this->load->view('vpartitures', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function vistavideos()
	{

		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
		$this->load->model('model_concerts');
		$data = $this->model_concerts->getvideos();
		$this->load->view('vvideos', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}

	

	

	*/

	public function vistaassajadmin()
	{
		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->model('model_concerts');
	 $data = $this->model_concerts->getassajs();
	 $this->load->view('adminvassaj', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}
	
	public function vistaconcertadmin()
	{
		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
    $this->load->model('model_concerts');
		$data = $this->model_concerts->getconcert();
		$this->load->view('adminvconcert',$data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}

	public function vistapartituresadmin()
	{

		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
		$this->load->model('model_concerts');
		$data = $this->model_concerts->getpartitures();
		$this->load->view('adminvpartitures', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}

	public function vistavideosadmin()
	{

		 if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
		$this->load->model('model_concerts');
		$data = $this->model_concerts->getvideos();
		$this->load->view('adminvvideos', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
		
	}
	
	public function updateMembre($id)
	{

		$this->form_validation->set_rules('Contrasenya', 'Contraseña', 'required|matches[comfirmala]');
		$this->form_validation->set_rules('comfirmala', 'Comfirmar Contraseña', 'required');
		$this->form_validation->set_message('required', 'El camps %s han de coincidir');
		$contra = $this->input->post('Contrasenya');
		$contra1 = $this->input->post('confirmala');
		if($this->form_validation->run() == FALSE)
			{
				$this->load->view('modificarMembre'); 
			}else{
                $this->model_concerts->modificarMembres($id, $contra);
                redirect('welcome/membre');
            }
}

	public function updateConcerts($id)
	{

		$this->form_validation->set_rules('Concert', 'Concert', 'required|xss_clean');
		$this->form_validation->set_rules('Lloc', 'Lloc', 'required|xss_clean');
		$this->form_validation->set_rules('Roba', 'Roba', 'required|xss_clean');
		$this->form_validation->set_rules('Diahora', 'Diahora', 'required|xss_clean');
		$this->form_validation->set_message('required', 'El camp %s es obligat');

		if($this->form_validation->run() == FALSE)
			{
				$data = $this->model_concerts->getconcert();
				$this->load->view('modificarConcert', $data);
			}else{
		$concerts = $this->input->post('Concert');
		$lloc = $this->input->post('Lloc');
		$roba = $this->input->post('Roba');
		$fecha = $this->input->post('Diahora');
		$passacalles = $this->input->post('optionsRadios');
		$this->model_concerts->modificarConcert($id, $concerts, $lloc, $roba, $fecha,$passacalles);
		redirect('welcome/concert');
            }
}
	public function updateAssaigs($id)
	{

		$this->form_validation->set_rules('Assajs', 'Assajs', 'required|xss_clean');
		$this->form_validation->set_rules('Lloc', 'Lloc', 'required|xss_clean');
		$this->form_validation->set_rules('proxact', 'proxact', 'required|xss_clean');
		$this->form_validation->set_rules('Diahora', 'Diahora', 'required|xss_clean');
		$this->form_validation->set_message('required', 'El camp %s es obligat');
		if($this->form_validation->run() == FALSE)
			{
				$data = $this->model_concerts->getassajs();
				$this->load->view('modificarAssaigs', $data);
			}else{
		$asaj = $this->input->post('Assajs');
		$lloc = $this->input->post('Lloc');
		$proxact = $this->input->post('proxact');
		$fecha = $this->input->post('Diahora');		
		$this->model_concerts->modificarAssaigs($id, $asaj, $lloc, $proxact, $fecha);
		redirect('welcome/assajs');
            }
}

	public function updateVideos($id)
	{

		$this->form_validation->set_rules('Nom', 'Nom', 'required|xss_clean');
		$this->form_validation->set_rules('Link', 'Link', 'required|xss_clean');
		$this->form_validation->set_message('required', 'El camp %s es obligat');
		if($this->form_validation->run() == FALSE)
			{
				$data = $this->model_concerts->getvideos();
				$this->load->view('modificarVideos', $data);
			}else{
		$nom = $this->input->post('Nom');
		$link = $this->input->post('Link');
		$this->model_concerts->insertVideo($id, $nom, $link);
		redirect('welcome/video');	
            }
}

	public function json_concerts() {
		$data['json'] = $this->model_concerts->getconcert();
		if (!$data['json']) show_404();
		$this->load->view('json_concert',$data);
	}

	public function json_assajos() {
		$data['json'] = $this->model_concerts->getassajs();
		if (!$data['json']) show_404();
		$this->load->view('json_assajs',$data);
	}

	public function json_youtube() {
		$data['json'] = $this->model_concerts->getvideos();
		if (!$data['json']) show_404();
		$this->load->view('json_videos',$data);
	}

	public function json_partitures() {
		$data['json'] = $this->model_concerts->getpartitures();
		if (!$data['json']) show_404();
		$this->load->view('json_partitures',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

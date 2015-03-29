<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Usuari', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Contrasenya', 'trim|required|xss_clean|callback_check_database');
   $this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            <strong>Error!</strong> El camp %s es obligat</div>');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login_view');
   }
   else
   {
     //Go to private area
 
     switch ($this->session->userdata('rol')) {
      
            case 'Administrador':
                redirect(base_url().'index.php/welcome/index');
                break;
            case 'Membre':
                redirect(base_url().'index.php/welcome/welcomemembers');
                break;    
            default:        
               redirect('login_view');
                break;      
      
        }
    // redirect(base_url().'index.php/welcome/welcomemembers');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   $comprobar_username = $this->user->verifica_username($username);
    if ($comprobar_username != $username) {
            $this->form_validation->set_message('check_database', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            <strong>Error!</strong> Usuari incorrecte</div>');
            return FALSE;
        }
   else if ($username==NULL){
    $this->form_validation->set_message('check_database', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            <strong>Error!</strong> Contrasenya Incorrecta</div>');
   }
   else {
   //query the database
   $role = $this->user->getRole($username);
   $result = $this->user->login($username, $password, $role);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(

         'id' => $row->id_membre,
         'username' => $row->usuari,
         'nom'=>$row->nom,
         'cognom'=>$row->cognom,
         'noua'=>$row->noua,
         'rol' => $row->rol
       );
       $this->session->set_userdata('logged_in', $sess_array); 
     }
     
        switch ($role) {    
            case 'Administrador':
                redirect(base_url().'index.php/welcome/index');
                break;
            case 'Membre':
                redirect(base_url().'index.php/welcome/welcomemembers');
                break;    
            default:        
              redirect(base_url().'index.php/login');
                break;      
        }
   }
   else
   {
     $this->form_validation->set_message('check_database', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                                            <strong>Error!</strong> Has introduït malament el teu Usuari ho Contrasenya</div>');
     return false;
   }
 }
}
}
?>

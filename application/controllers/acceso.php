<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Acceso extends CI_Controller 
{ 

  public function __construct() 
  {   
    parent::__construct(); 
    // session_start(); 
    $this->load->model('Model_acceso');  
  } 

  public function index()
  {   
    if ( isset($_SESSION['my_usuario']) )redirect( 'usuarios', 'refresh' ); 
    $data['page']="view_acceso";
    // $data['page']="view_usuarios"; 
    $this->load->view('plantilla', $data); 
  } 

  function loguear()
  {   
    $data=array(); 
    $this->form_validation->set_rules('usuario', 'usuario', 'trim|required'); 
    $this->form_validation->set_rules('clave', 'clave', 'trim|required'); 
    if( $this->form_validation->run() === FALSE )
    { 
      $data['type'] = false; 
      $data['message'] = validation_errors();   
    }
    else
    {    
      $usuario=$this->Model_acceso->comprobar( $_POST ); 
      if( $usuario==false )
      { 
        $data['type']   =false; 
        $data['message']='Acceso denegado.';    
      }
      else
      {    
        $data['type']   =true; 
        $data['message']='Acceso concedido.'; 
        $_SESSION['my_usuario']=$usuario;
      } 
    } 
    $this->output->set_content_type('application/json')->set_output( json_encode( $data ) ); 
  } 

  function salir()
  { 
    unset($_SESSION['my_usuario']); 
    redirect( 'acceso', 'refresh' ); 
  } 

} 
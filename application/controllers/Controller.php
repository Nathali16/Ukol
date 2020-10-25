<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');


class Controller extends CI_Controller
{
   public function __construct() {
      parent::__construct();
      $this->load->model('Model');
      $data['polozky'] = $this->Model->menu();
      $this->load->view('pages/menu', $data);
      $this->load->view('pages/header');
   }

   
   public function index()
   {
        $data['seznam'] = $this->Model->seznam();
        $this->load->view("pages/seznam", $data);
      
   }

	  public function anotace($id)
	    {
            $data['anotace'] = $this->Model->anotace($id);
            $this->load->view('pages/anotace', $data);

      }
      

      public function knihy()
      {
        
        $data['knihy'] = $this->Model->knihy();
        $this->load->view("pages/knihy", $data);
      
      }

      public function autori()
      {
        
        $data['autori'] = $this->Model->autori();
        $this->load->view("pages/autori", $data);
      
      }
 
}


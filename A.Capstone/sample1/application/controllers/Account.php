<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account extends CI_Controller {
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->library('pagination');
      $this->load->model('Account_model', 'account');
   }
  public function index()
  {
    $data['accounts'] = $this->account->get_all();
    $data['title'] = "CodeIgniter Account Manager";
    $this->load->view('layout/header');       
    $this->load->view('account/index',$data);
    $this->load->view('layout/footer');
  }
    //loadrecord

    public function loadRecord2($rowno=0){
 
      $rowperpage = 5;

      if($rowno != 0){
        $rowno = ($rowno-1) * $rowperpage;
      }

      $allcount = $this->db->count_all('tbl_account');

      $this->db->limit($rowperpage, $rowno);
      $users_record = $this->db->get('tbl_account')->result_array();

      $config['base_url'] = base_url().'account/loadRecord2';
      $config['use_page_numbers'] = TRUE;
      $config['total_rows'] = $allcount;
      $config['per_page'] = $rowperpage;
      
      $config['num_links'] = 10;

      $config['full_tag_open']    = '<div class="pagging text-center"><ul class="pagination">';
      $config['full_tag_close']   = '</ul></div>';
      
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tag_close']  = '</span></li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tag_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tag_close']  = '</span></li>';
      
      

      $this->pagination->initialize($config);

      $data['pagination'] = $this->pagination->create_links();
      $data['result'] = $users_record;
      $data['row'] = $rowno;

      echo json_encode($data);
}
    //loadrecord

  public function show($id)
  {
    $data['account'] = $this->account->get($id);
    $data['title'] = "Show Account";
    $this->load->view('layout/header');
    $this->load->view('account/show', $data);
    $this->load->view('layout/footer'); 
  }
  
   public function edit($id)
  {
	$data['account'] = $this->account->get($id);  
    $data['title'] = "Edit Account";
    $this->load->view('layout/header');
    $this->load->view('account/edit',$data);
    $this->load->view('layout/footer');     
  }
  
  public function delete($id)
  {
    $item = $this->account->delete($id);
    $this->session->set_flashdata('success', "Deleted Successfully!");
    redirect(base_url('account'));
  }
  
   public function create()
  {
    $data['title'] = "Create Account";
    $this->load->view('layout/header');
    $this->load->view('account/create',$data);
    $this->load->view('layout/footer');     
  }
  public function store()
  {
	 
    $this->form_validation->set_rules('uname', 'Uname', 'required');
    $this->form_validation->set_rules('pass', 'Pass', 'required');
	$this->form_validation->set_rules('fname', 'Fname', 'required');
	$this->form_validation->set_rules('mname', 'Mname', 'required');
	$this->form_validation->set_rules('lname', 'Lname', 'required');

    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        redirect(base_url('account/create'));
    }
    else
    {
       $this->account->store();
       $this->session->set_flashdata('success', "Saved Successfully!");
       redirect(base_url('account'));
    }
  }
  
  public function update($id)
  {
	 
    $this->form_validation->set_rules('uname', 'Uname', 'required');
    $this->form_validation->set_rules('pass', 'Pass', 'required');
	$this->form_validation->set_rules('fname', 'Fname', 'required');
	$this->form_validation->set_rules('mname', 'Mname', 'required');
	$this->form_validation->set_rules('lname', 'Lname', 'required');

    if (!$this->form_validation->run())
    {
        $this->session->set_flashdata('errors', validation_errors());
        //redirect(base_url('account/create'));
		redirect(base_url('account/edit' . $id));
    }
    else
    {
       //$this->account->store();
	   $this->account->update($id);
       $this->session->set_flashdata('success', "Saved Successfully!");
       redirect(base_url('account'));
    }
  }
  
 
  
}
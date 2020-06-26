<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Example extends CI_Controller{

    public function index()
	{    $data = array();
		$id = $this->uri->segment(3);
		if(!empty($id)){
      $data['data'] = $this->Sample_Model->record('sample',$id,null,'single');
    
		$this->load->view('header');
		$this->load->view('demo', $data);
		$this->load->view('footer');
		}
		else{
		$this->load->view('header');
		$this->load->view('demo', $data);
		$this->load->view('footer');
		}
	    
	}
	public function create(){
		$id = $this->input->post('id');
		if(empty($id)){

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_rules('dept', 'Department', 'required');
        
        if ($this->form_validation->run() == FALSE){
	           
	           $this->load->view('header');
			   $this->load->view('demo');
			   $this->load->view('footer');
        }
      else{
      
      	$data['name'] = $this->input->post('name');
		$data['phone'] = $this->input->post('phone');
		$data['gender'] = $this->input->post('gender');
		$data['email'] = $this->input->post('email');
		$data['password'] =$this->input->post('pwd');
		$data['dept'] =$this->input->post('dept');
		$data['created_on']=date('Y-m-d');
		$this->Sample_Model->record('sample',null,$data,'add');
		return redirect('Example/data');
      }

		}
		else{

        $data['name'] = $this->input->post('name');
		$data['phone'] = $this->input->post('phone');
		$data['gender'] = $this->input->post('gender');
		$data['email'] = $this->input->post('email');
		$data['password'] =$this->input->post('pwd');
		$data['dept'] =$this->input->post('dept');
		$data['created_on']=date('Y-m-d');
		$this->Sample_Model->record('sample',$id,$data,'update');
		return redirect('Example/index/'.$id);
		}
		

		
		
	}
	public function data()
	{  
		   $data = array();
		   $data['all'] = $this->Sample_Model->record('sample',null,null,'all');
           $this->load->view('header');
		   $this->load->view('data',$data);
		   $this->load->view('footer');

	}

	public function delete()
	{
     $id = $this->uri->segment(3);
     $data['data'] = $this->Sample_Model->record('sample',$id,null,'delete');
     return redirect('Example/data');
     //print_r($data); exit;
	}

}


?>
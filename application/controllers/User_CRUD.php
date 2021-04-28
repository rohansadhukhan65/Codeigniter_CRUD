<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_CRUD extends CI_Controller{
    
    function index()
    {   
        // loading user model
        $this->load->model('User_model');

        // fetch all user data
        $users = $this->User_model->all();

        // create user context and pass it
        $context = array();
        $context['user'] = $users;


        $this->load->view('list',$context);
    }


    function create()
    {    
        // loading model
        $this->load->model('User_model');

        // Form Validate
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        
        // Validation Chek
        if($this->form_validation->run() == false)
        {
            $this->load->view('create');

            // creatijng success session messege 
            $this->session->set_flashdata('success', 0);
        } 
        else 
        {
            // Get User data from form
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['create_at'] = date('Y-m-d');

            // call user model for create 
            $this->User_model->createData($formArray);

            // creatijng success session messege 
            $this->session->set_flashdata('success','User Added !');

            // redirecting
            redirect(base_url().'index.php/user_crud/create');
        }
    }

    function edit()
    {
        $this->load->view('edit');
    }


    function delete()
    {

    }
    
}

?>
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

        // clearning success session messege 
        $this->session->set_flashdata('success_edit', "");
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

    function edit($userId)
    {   
        // loading model
        $this->load->model('User_model');

        // getting perticular
        $user_edit = $this->User_model->getaUser($userId);

        //passing that data to context for view
        $context_edit = array();
        $context_edit['user_edit'] = $user_edit; 


        // Form Validate
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run() == false)
        {
            $this->load->view('edit',$context_edit);
        }
        else
        {
            //Update User
            $formarray = array();
            $formarray['name'] = $this->input->post('name');
            $formarray['email'] = $this->input->post('email');
            $formarray['create_at'] = date('Y-m-d');
            $this->User_model->UpdateUser($formarray,$userId);


            // creatijng success session messege 
            $this->session->set_flashdata('success_edit', "Update Complete !");


            // redirecting
            redirect(base_url().'/');
        }


    }


    function delete($userids)
    {
        // loading model
        $this->load->model('User_model');

        // Delete the perticular user
        $this->User_model->DeleteUser($userids);

        // creatijng success session messege 
        $this->session->set_flashdata('success_edit', "User Deleted !");

        // redirecting
        redirect(base_url().'/');

    }
    
}

?>
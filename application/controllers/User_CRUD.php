<?php 

class User_CRUD extends CI_Controller{
    
    function index()
    {
        $this->load->view('list');
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
    
}

?>
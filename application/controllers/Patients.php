<?php

    class Patients extends CI_controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('Patients_model');
            
        }

        function add(){
            
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('age', 'Age', 'required');
            $this->form_validation->set_rules('contact', 'Contact', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('date_added', 'Date Added', 'required');
            $this->form_validation->set_rules('reason', 'reason', 'required');
            

            if($this->form_validation->run() == false){
                $this->load->view('add-patients');
            } else{
                $formArray= array();
                $formArray['name'] = $this->input->post('name');
                $formArray['gender'] = $this->input->post('gender');
                $formArray['age'] = $this->input->post('age');
                $formArray['contact'] = $this->input->post('contact');
                $formArray['city'] = $this->input->post('city');
                $formArray['address'] = $this->input->post('address');
                $formArray['date_added'] = $this->input->post('date_added');
                $formArray['reason'] = $this->input->post('reason');
        
                
                $formArray['created_at'] = date('Y-m-d');
                $this->Patients_model->add($formArray);
                $this->session->set_flashdata('success', 'Record added Successfully!');
                redirect(base_url().'/view-patients');
            }
            
            
        }

       
    }
?>
<?php
class Libkoto_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
        //eto tesintg lang
        //testing ng branch kung pano ba to gumagana
    }

    public function acquisition() { 
        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'yop' => $this->input->post('yop'),
            'number_of_copies' => $this->input->post('number_of_copies'),
            'vendor' => $this->input->post('vendor'),
            'program' => $this->input->post('program'),
            'price' => $this->input->post('price'),
            'date_purchased' => $this->input->post('date_purchased')
        );
    
        // Insert the data into the database
        $inserted = $this->Libkoto_model->insert_acquisition($data);
    
        if ($inserted) {
            $this->session->set_flashdata('success', 'Acquisition data saved successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to save acquisition data.');
        }
    
        // Redirect to the acquisition form
        redirect('acquisition'); // Adjusted to match the correct controller
    }

    public function insert_acquisition($data) {
        // Insert the data into the 'acquisition' table
        return $this->db->insert('acquisition', $data);
    }
}

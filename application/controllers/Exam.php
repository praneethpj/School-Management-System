<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Model_Subject');
    }

    public function add() {

        $name = $_POST['name'];
        $description = $_POST['description'];

        $this->Model_Subject->setName($name);
        $this->Model_Subject->setDescription($description);
        $this->Model_Subject->save();
    }

    public function update() {

        $name = $_POST['name'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        $status = $_POST['status'];

        $this->Model_Subject->setId($id);
        $this->Model_Subject->setName($name);
        $this->Model_Subject->setDescription($description);
        $this->Model_Subject->setStatus($status);


        $this->Model_Subject->update();
    }

    public function load() {
        
            $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('language');
        if ($this->session->userdata('site_lang') != null) {
            $this->lang->load('information_lang', $this->session->userdata('site_lang'));
        } else {
            $this->lang->load('information_lang', "english");
        }

        
        $query['data'] = $this->Model_Subject->load();
     
        $this->load->view('parts/examtbl', $query);
    }

}

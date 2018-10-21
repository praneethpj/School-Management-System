<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Model_Student');
    }

    public function add() {


        $Fname = $_POST['txtFirstName'];
        $Lname = $_POST['txtLastName'];
        $Grade = $_POST['grade'];
        $Birthday = $_POST['txtBirthday'];
        $School = $_POST['school'];

        $this->Model_Student->setBirthDay($Birthday);
        $this->Model_Student->setFName($Fname);
        $this->Model_Student->setLName($Lname);
        $this->Model_Student->setGrade($Grade);
        $this->Model_Student->setSchool($School);

        $this->Model_Student->save();
    }

    public function update() {

        $name = $_POST['name'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        $status = $_POST['status'];

        $this->Model_Student->setId($id);
        $this->Model_Student->setName($name);
        $this->Model_Student->setDescription($description);
        $this->Model_Student->setStatus($status);


        $this->Model_Student->update();
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

        $this->load->model('Model_Grade');
        $this->load->model('Model_Schools');

        $query['data'] = $this->Model_Student->load();
        $query['subjects'] = $this->Model_Student->load();
        $query['grades'] = $this->Model_Grade->load();

        $this->load->view('parts/studenttbl', $query);
    }

}

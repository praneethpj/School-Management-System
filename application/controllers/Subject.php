<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Model_Subject');
    }

    public function add() {

        $teacherid = $_POST['teacherId'];
        $date = $_POST['Days'];
        $time = $_POST['Time'];
        $subjectname = $_POST['Subject'];
        $fees = $_POST['Fees'];
        $txtType = $_POST['Type'];

        $this->Model_Subject->setName($subjectname);
        $this->Model_Subject->setType($txtType);
        $this->Model_Subject->setDate($date);
        $this->Model_Subject->setTime($time);
        $this->Model_Subject->setFees($fees);
        $this->Model_Subject->setTeacherId($teacherid);

        $this->Model_Subject->save();
    }

    public function update() {


        $teacherid = $_POST['teacherId'];
        $subjectid = $_POST['Subject'];
        $date = $_POST['Days'];
        $time = $_POST['Time'];
        $subjectname = $_POST['SubjectName'];
        $fees = $_POST['Fees'];
        $txtType = $_POST['Type'];


        $this->Model_Subject->setName($subjectname);
        $this->Model_Subject->setType($txtType);
        $this->Model_Subject->setDate($date);
        $this->Model_Subject->setTime($time);
        $this->Model_Subject->setFees($fees);
        $this->Model_Subject->setTeacherId($teacherid);
        $this->Model_Subject->setSubjectId($subjectid);
        $this->Model_Subject->setId($subjectid);

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

        $this->load->model('Model_Teacher');
        $query['teacher'] = $this->Model_Teacher->loadJsonObject();
        $this->load->model('Model_Schools');
        $query['teacher'] = $this->Model_Teacher->loadJsonObject();

        $this->load->view('parts/subjecttbl', $query);
    }

}

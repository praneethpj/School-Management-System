<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('language');
        if ($this->session->userdata('site_lang') != null) {
            $this->lang->load('information_lang', $this->session->userdata('site_lang'));
        } else {
            $this->lang->load('information_lang', "english");
        }
    }

    public function index() {

        $this->load->view('common/header');
        $this->load->view('welcome_message');
        $this->load->view('common/footer');
    }

    public function search() {
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('search');
        $this->load->view('common/footer');
    }

    public function subject() {

        $this->load->model('Model_Teacher');
        $data['teacher'] = $this->Model_Teacher->loadJsonObject();
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('subject', $data);
        $this->load->view('common/footer');
    }

    public function dashboard_parent() {
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('dashboard_parent');
        $this->load->view('common/footer');
    }

    public function dashboard_School() {
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('Schools');
        $this->load->view('common/footer');
    }

    public function StudyMaterial() {
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('StudyMaterial');
        $this->load->view('common/footer');
    }

    public function Grade() {
        $this->load->model('Model_Subject');
        $this->load->model('Model_Schools');
        $this->load->model('Model_Grade');
        $data['subject'] = $this->Model_Subject->loadJsonObject();
        $data['institute'] = $this->Model_Schools->loadJsonObject();
        // $data['data'] = $this->Model_Schools->loadJsonObject();
        $data['data'] = $this->Model_Grade->load();

        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('Grade', $data);
        $this->load->view('common/footer');
    }

    public function LoadMap() {
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('user-map');
        $this->load->view('common/footer');
    }

    public function Student() {


        $this->load->model('Model_Grade');
        //  $this->load->model('Model_Schools');
//        $data['school'] = $this->Model_Schools->loadJsonObject();
//        $data['grade'] = $this->Model_Grade->loadJsonObject();


        $this->load->helper('url');
        $this->load->view('common/header');

        $this->load->view('Student');
        $this->load->view('common/footer');
    }

    public function Teacher() {


        $this->load->model('Model_Grade');
        $this->load->model('Model_Schools');
//        $data['school'] = $this->Model_Schools->loadJsonObject();
//        $data['grade'] = $this->Model_Grade->loadJsonObject();


        $this->load->helper('url');
        $this->load->view('common/header');

        $this->load->view('Teacher');
        $this->load->view('common/footer');
    }

    public function RateTeachers() {


        $this->load->model('Model_Grade');
        $this->load->model('Model_Schools');
//        $data['school'] = $this->Model_Schools->loadJsonObject();
//        $data['grade'] = $this->Model_Grade->loadJsonObject();


        $this->load->helper('url');
        $this->load->view('common/header');

        $this->load->view('RatingTeachers');
        $this->load->view('common/footer');
    }

    public function dashboard_class() {
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('dashboard_class');
        $this->load->view('common/footer');
    }

    public function Exam() {
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('Exam');
        $this->load->view('common/footer');
    }

    public function newComp() {
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('newPage');
        $this->load->view('common/footer');
    }

    public function About() {
        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('About');
        $this->load->view('common/footer');
    }

}

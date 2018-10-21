<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Model_Schools');
    }

    public function add() {

        $lat = $_POST['lat'];
        $long = $_POST['lon'];
        $name = $_POST['name'];


        $this->Model_Schools->setName($name);
        $this->Model_Schools->setLatitude($lat);
        $this->Model_Schools->setLongtitude($long);
        $this->Model_Schools->save();
    }

    public function update() {


        $id = $_POST['name'];
        $lat = $_POST['lat'];
        $long = $_POST['lon'];
        $name = $_POST['name'];


        $this->Model_Schools->setId($id);
        $this->Model_Schools->setName($name);
        $this->Model_Schools->setLatitude($lat);
        $this->Model_Schools->setLongtitude($long);


        $this->Model_Schools->update();
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

        $query['institute'] = $this->Model_Schools->loadJsonObject();
        $this->load->view('parts/schoolstbl', $query);
    }

}

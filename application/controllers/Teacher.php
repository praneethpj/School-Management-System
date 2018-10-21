<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Model_Teacher');
    }

    public function add() {

        $txtFName = $_POST['txtFName'];

        $txtLName = $_POST['txtLName'];
        $txtMobile1 = $_POST['txtMobile1'];
        $txtMobile2 = $_POST['txtMobile2'];
        $txtcity = $_POST['txtcity'];
        $straddress = $_POST['txtAddress'];
        $txthigh = $_POST['txthigh'];

        $this->Model_Teacher->setFName($txtFName);
        $this->Model_Teacher->setLName($txtLName);
        $this->Model_Teacher->setMobile1($txtMobile1);
        $this->Model_Teacher->setMobile2($txtMobile2);
        $this->Model_Teacher->setCity($txtcity);
        $this->Model_Teacher->setStraddress($straddress);
        $this->Model_Teacher->setHigh($txthigh);

        $this->Model_Teacher->save();
    }

    public function update() {
 
        $id = $_POST['id'];
   
        
         $txtFName = $_POST['txtFName'];

        $txtLName = $_POST['txtLName'];
        $txtMobile1 = $_POST['txtMobile1'];
        $txtMobile2 = $_POST['txtMobile2'];
        $txtcity = $_POST['txtCity'];
        $straddress = $_POST['txtAddress'];
        $txthigh = $_POST['txtHigh'];

        $this->Model_Teacher->setFName($txtFName);
        $this->Model_Teacher->setLName($txtLName);
        $this->Model_Teacher->setMobile1($txtMobile1);
        $this->Model_Teacher->setMobile2($txtMobile2);
        $this->Model_Teacher->setCity($txtcity);
        $this->Model_Teacher->setStraddress($straddress);
        $this->Model_Teacher->setHigh($txthigh);

        $this->Model_Teacher->setId($id);
     

        $this->Model_Teacher->update();
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


        $query['data'] = $this->Model_Teacher->load();

        $this->load->view('parts/teachertbl', $query);
    }

}

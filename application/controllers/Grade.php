<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Grade extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Model_Grade');
    }

    public function add() {

        $Capacity = $_POST['Capacity'];
        $HallName = $_POST['HallName'];
        $Institute = $_POST['Institute'];
        $Subject = $_POST['Subject'];

        $this->Model_Grade->setHallName($HallName);
        $this->Model_Grade->setInstitute($Institute);
        $this->Model_Grade->setSubject($Subject);
        $this->Model_Grade->setCapacity($Capacity);
     
        
        $this->Model_Grade->save();
    }

    public function update() {

     
        $id = $_POST['hallid'];
        
        
        $Capacity = $_POST['Capacity'];
        $HallName = $_POST['HallName'];
        $Institute = $_POST['Institute'];
        $Subject = $_POST['Subject'];

        $this->Model_Grade->setHallName($HallName);
        $this->Model_Grade->setInstitute($Institute);
        $this->Model_Grade->setSubject($Subject);
        $this->Model_Grade->setCapacity($Capacity);
        $this->Model_Grade->setId($id);
   

        $this->Model_Grade->update();
    }

    public function load() {
        $query['data'] = $this->Model_Grade->load();

        $this->load->view('parts/gradetbl', $query);
    }

}

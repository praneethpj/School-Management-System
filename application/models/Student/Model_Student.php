<?php

class student extends CI_Model {

    private $parentId = '';
    private $name;
    private $address;
    private $mobile;
    private $StFname;
    private $StLname;
    private $StBirthDay;
    private $StSchool;
    private $StGrade;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    private function get($id) {
        $row = $this->get($id);
        if ($row !== null) {
            $this->dbResultToObject($row, $this);
        }
    }

    public function setName($param) {
        $this->name = $param;
    }

    public function setAddress($param) {
        $this->address = $param;
    }

    public function setMobile($param) {
        $this->mobile = $param;
    }

    private function getName() {
        return $this->name;
    }

    private function getAddress() {
        return $this->address;
    }

    private function getMobile() {
        return $this->mobile;
    }

    public function setStFName($param) {
        $this->StFname = $param;
    }

    public function setStLName($param) {
        $this->StLname = $param;
    }

    public function getStFName() {
        return $this->StFname;
    }

    public function setStBirthDay($param) {
        $this->StBirthDay = $param;
    }

    public function setStSchool($param) {
        $this->StSchool = $param;
    }

    private function getStLName() {
        return $this->StLname;
    }

    private function getStBirthDay() {
        return $this->StBirthDay;
    }

    public function setStGrade($param) {
        $this->StGrade = $param;
    }

    private function getStGrade() {
        return $this->StGrade;
    }

    protected function save() {
        $this->db->query(
                'INSERT INTO Student (fname,lname,status) VALUES (?, ?,?)', array($this->getStFName(), $this->getStLName(), "true")
        );

        $parentId = $this->db->insert_id();
        $this->db->query(
                'INSERT INTO stock (item,count) VALUES (?, ?)', array($itemid, '0')
        );
 
    }
    
    

}

?>
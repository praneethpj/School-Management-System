<?php

class Model_Teacher extends CI_Model {

    private $table = "teacher";
    private $table2 = "teacher_mobile";
    private $id = '';
    private $Fname;
    private $Lname;
    private $txtMobile1;
    private $txtMobile2;
    private $txtcity;
    private $straddress;
    private $txthigh;

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    private function get($id) {
        $row = $this->get($id);
        if ($row !== null) {
            $this->dbResultToObject($row, $this);
        }
    }

    public function setId($param) {
        $this->id = $param;
    }

    public function setMobile1($param) {
        $this->txtMobile1 = $param;
    }

    public function getMobile1() {
        return $this->txtMobile1;
    }

    public function getId() {
        return $this->id;
    }

    public function setMobile2($param) {
        $this->txtMobile2 = $param;
    }

    public function setFName($param) {
        $this->Fname = $param;
    }

    private function getFName() {
        return $this->Fname;
    }

    public function setLName($param) {
        $this->Lname = $param;
    }

    private function getLName() {
        return $this->Lname;
    }

    public function setCity($param) {
        $this->txtcity = $param;
    }

    private function getCity() {
        return $this->txtcity;
    }

    private function getMobile2() {
        return $this->txtMobile2;
    }

    public function setStraddress($param) {
        $this->straddress = $param;
    }

    public function getStraddress() {
        return $this->straddress;
    }

    private function getHigh() {
        return $this->txthigh;
    }

    public function setHigh($param) {
        $this->txthigh = $param;
    }

    public function save() {
        $this->db->query(
                'INSERT INTO ' . $this->table . ' (firstname,lastname,straddress,city,highestQualification) VALUES (?, ?,?,?,?)', array($this->getFName(), $this->getLName(), $this->getStraddress(), $this->getCity(), $this->getHigh())
        );

        $this->setId($this->db->insert_id());

        $this->db->query(
                'INSERT INTO ' . $this->table2 . ' (teacher_id,mobile1,mobile2) VALUES (?,?,?)', array($this->getId(), $this->getMobile1(), $this->getMobile2())
        );
    }

    public function update() {

        $this->db->where('teacher_id', $this->getId());
        $this->db->set("firstname", $this->getFName());
        $this->db->set("lastname", $this->getLName());
        $this->db->set("straddress", $this->getStraddress());
        $this->db->set("city", $this->getCity());
        $this->db->set("highestQualification", $this->getHigh());
        $this->db->update($this->table);


        $this->db->where('teacher_id', $this->getId());
        $this->db->set("mobile1", $this->getMobile1());
        $this->db->set("mobile2", $this->getMobile2());
        $this->db->update($this->table2);
    }

    public function load() {

        $this->db->select("*");
        $this->db->from('teacher');


        $this->db->join('teacher_mobile', 'teacher.teacher_id= teacher_mobile.teacher_id');
        return $this->db->get();
    }

    public function loadJsonObject() {

        $this->db->select('teacher_id  as value,firstname as text');
        $this->db->from($this->table);
         
        $query = $this->db->get();

        return '[{ list:' . json_encode($query->result(), true) . '}]';
    }

}

?>
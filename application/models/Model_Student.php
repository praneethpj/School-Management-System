<?php

class Model_Student extends CI_Model {

    private $table = "Student";
    private $table2 = "student_details";
    private $id = '';
    private $Fname;
    private $Lname;
    private $Grade;
    private $Birthday;
    private $School;
    private $status = "true";

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

    public function setStatus($param = "true") {
        $this->status = $param;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getId() {
        return $this->id;
    }

    public function setBirthDay($param) {
        $this->Birthday = $param;
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

    public function setSchool($param) {
        $this->School = $param;
    }

    private function getSchool() {
        return $this->School;
    }

    private function getBirthday() {
        return $this->Birthday;
    }

    public function setGrade($param) {
        $this->Grade = $param;
    }

    private function getGrade() {
        return $this->Grade;
    }

    public function save() {
        $this->db->query(
                'INSERT INTO ' . $this->table . ' (Fname,Lname,status) VALUES (?, ?,?)', array($this->getFName(), $this->getLName(), $this->getStatus())
        );

        $this->setId($this->db->insert_id());

        $this->db->query(
                'INSERT INTO ' . $this->table2 . ' (ID,GRADE,BIRTHDAY,SCHOOL) VALUES (?,?,?,?)', array($this->getId(), $this->getGrade(), $this->getBirthday(), $this->getSchool())
        );
    }

    public function update() {

        $this->db->where('id', $this->getId());
        $this->db->set("Fname", $this->getFName());
        $this->db->set("Lname", $this->getLName());
        $this->db->set("status", $this->getStatus());
        $this->db->update($this->table);


        $this->db->where('ID', $this->getId());
        $this->db->set("GRADE", $this->getGrade());
        $this->db->set("BIRTHDAY", $this->getBirthday());
        $this->db->set("SCHOOL", $this->getSchool());
        $this->db->update($this->table2);
    }

    public function load() {

        $this->db->select("*");
        $this->db->from('student');


        $this->db->join('student_details', 'student.id = student_details.id');
        return $this->db->get();
    }

    public function loadJsonObject() {

        $this->db->select('id  as value,name as text');
        $this->db->from($this->table);
        $this->db->where('status', 'true');
        $query = $this->db->get();

        return '[{ list:' . json_encode($query->result(), true) . '}]';
    }

}

?>
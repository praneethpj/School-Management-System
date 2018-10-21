<?php

class Model_Subject extends CI_Model {

    private $table = "subject";
    private $id = '';
    private $name;
    private $teacherid;
    private $date;
    private $time;
    private $fees;
    private $txtType;
    private $subjectId;

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    private function getSubjectId($id) {
        return $this->subjectId;
    }

    public function setSubjectId($param) {
        $this->subjectId = $param;
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

    public function setTeacherId($param) {
        $this->teacherid = $param;
    }

    public function getTeacherId() {
        return $this->teacherid;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($param) {
        $this->name = $param;
    }

    public function setDate($param) {
        $this->date = $param;
    }

    private function getName() {
        return $this->name;
    }

    private function getDate() {
        return $this->date;
    }

    public function setTime($param) {
        $this->time = $param;
    }

    private function getTime() {
        return $this->time;
    }

    public function setFees($param) {
        $this->fees = $param;
    }

    private function getFees() {
        return $this->fees;
    }

    public function setType($param) {
        $this->txtType = $param;
    }

    private function getType() {
        return $this->txtType;
    }

    public function save() {
        $this->db->query(
                'INSERT INTO ' . $this->table . ' (name,subject_type,teacher_ID,fees,dates,times) VALUES (?, ?,?,?,?,?)', array($this->getName(), $this->getType(), $this->getTeacherId(), $this->getFees(), $this->getDate(), $this->getTime())
        );

        $this->setId($this->db->insert_id());
    }

    public function update() {




        $this->db->where('subject_ID', $this->getId());
        $this->db->set("name", $this->getName());
        $this->db->set("subject_type", $this->getType());
        $this->db->set("teacher_ID", $this->getTeacherId());
        $this->db->set("fees", $this->getFees());
        $this->db->set("dates", $this->getDate());
        $this->db->set("times", $this->getTime());
        $this->db->update($this->table);
    }

    public function load() {

//        $this->db->query('select * from subject inner join teacher on teacher.teacher_ID=subject.teacher_ID' );
//       // $this->db->from($this->table);
//        
//        
//        
        $this->db->select('*');
        $this->db->from('subject');
        $this->db->join('teacher', 'teacher.teacher_ID = subject.teacher_ID');
        return $this->db->get();
    }

    public function loadJsonObject() {

        $this->db->select('subject_ID  as value,name as text');
        $this->db->from($this->table);

        $query = $this->db->get();

        return '[{ list:' . json_encode($query->result(), true) . '}]';
    }

}

?>
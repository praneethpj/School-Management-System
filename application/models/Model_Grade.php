<?php

class Model_Grade extends CI_Model {

    function getCapacity() {
        return $this->capacity;
    }

    function getDesc() {
        return $this->desc;
    }

    function getHallName() {
        return $this->hallName;
    }

    function getInstitute() {
        return $this->institute;
    }

    function getSubject() {
        return $this->subject;
    }

    function setCapacity($capacity) {
        $this->capacity = $capacity;
    }

    function setDesc($desc) {
        $this->desc = $desc;
    }

    function setHallName($hallName) {
        $this->hallName = $hallName;
    }

    function setInstitute($institute) {
        $this->institute = $institute;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

    private $table = "hall";
    private $id = '';
    private $name;
    private $description;
    private $status = "true";
    private $capacity = "";
    private $desc = "";
    private $hallName = "";
    private $institute = "";
    private $subject = "";

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

    public function setName($param) {
        $this->name = $param;
    }

    public function setDescription($param) {
        $this->description = $param;
    }

    private function getName() {
        return $this->name;
    }

    private function getDescription() {
        return $this->description;
    }

    public function save() {
        $this->db->query(
                'INSERT INTO ' . $this->table . ' (hallname,capacity,subject_id,institute_id) VALUES (?,?,?,?)', array($this->getHallName(), $this->getCapacity(), $this->getSubject(), $this->getInstitute())
        );

        $this->setId($this->db->insert_id());
    }

    public function update() {




        $this->db->where('hallid', $this->getId());
        $this->db->set("hallname", $this->getHallName());
        $this->db->set("capacity", $this->getCapacity());
        $this->db->set("subject_id", $this->getSubject());
        $this->db->set("institute_id", $this->getInstitute());
        $this->db->update($this->table);
    }

    public function load() {

        $this->db->select("*");
        $this->db->from('hall');


        $this->db->join('subject', 'hall.subject_id = subject.subject_ID');
        return $this->db->get();
    }

    public function loadJsonObject() {

        $this->db->select('student_id  as value,name as text');
        $this->db->from($this->table);
        $this->db->where('status', 'true');
        $query = $this->db->get();

        return '[{ list:' . json_encode($query->result(), true) . '}]';
    }

}

?>
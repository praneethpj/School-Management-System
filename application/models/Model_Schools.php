<?php

class Model_Schools extends CI_Model {

    private $table = "instituition";
    private $id = '';
    private $name;
    private $latitude;
    private $longtitude;

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

    public function setLatitude($param) {
        $this->latitude = $param;
    }

    public function setLongtitude($param) {
        $this->longtitude = $param;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getLongtitude() {
        return $this->longtitude;
    }

    public function setId($param) {
        $this->id = $param;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($param) {
        $this->name = $param;
    }

    private function getName() {
        return $this->name;
    }

    public function save() {



        if ($this->role_exists($this->table, 'instituition_name', $this->name)) {
            echo "Error - The name is exits";
        } else {

//            echo $this->getLatitude();
//            echo $this->getLongtitude();
            
            $this->db->query(
                    'INSERT INTO ' . $this->table . ' (instituition_name,longitude,latitude) VALUES (?, ?,?)', array($this->getName(), $this->getLongtitude(), $this->getLatitude())
            );

            $this->setId($this->getName());
            
        }
    }

    function role_exists($table, $field, $value) {
        $this->db->where($field, $value);
        $query = $this->db->get($table);
        if (!empty($query->result_array())) {
            return 1;
        } else {
            return 0;
        }
    }

    public function update() {




        $this->db->where('instituition_name', $this->getId());
        $this->db->set("instituition_name", $this->getName());
        $this->db->set("longitude", $this->getLongtitude());
        $this->db->set("latitude", $this->getLatitude());
        $this->db->update($this->table);
    }

    public function load() {

        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get();
    }

    public function loadJsonObject() {

        $this->db->select('instituition_name  as value,instituition_name as text');
        $this->db->from($this->table);
     
        $query = $this->db->get();

        return '[{ list:' . json_encode($query->result(), true) . '}]';
    }

}

?>
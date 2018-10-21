<?php

interface StuAttr {
    
    public function setDetails($name,$parentid,$birthday,$address);
    public function getId();
    public function getDetails($id);
    public function getParent($id);
    
}

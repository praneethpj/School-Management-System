<?php if ( ! defined('BASEPATH')) exit('Direct access allowed');
 
class LanguageSwitcher extends CI_Controller
 
{
 
   public function __construct() {
 
       parent::__construct();
 
   }
 
   function switchLang() {
 
 
       $language = $_POST['lang'];
       
     //  echo $language;
 
     //  $language = ($language != "") ? $language : "english";
 
       $this->session->set_userdata('site_lang', $language);
 
      
 
   }
 
}
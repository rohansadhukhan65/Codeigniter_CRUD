<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{

    function createData($formArray)
    {
        $this->db->insert('user',$formArray); // INSERT INTO user (name,email) values (?,?);
    }

    function all(){
         $usersList = $this->db->get('user')->result_array(); //select * from user
 
         return $usersList ;
    }
}

?>
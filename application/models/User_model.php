<?php 

class User_model extends CI_Model{

    function createData($formArray)
    {
        $this->db->insert('user',$formArray); // INSERT INTO user (name,email) values (?,?);
    }
}

?>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{

    function createData($formArray)
    {
        $this->db->insert('user',$formArray); // INSERT INTO user (name,email) values (?,?);
    }

    function all(){
         $usersList = $this->db->get('user')->result_array(); //  SELECT * from user
 
         return $usersList ;
    }

    function getaUser($id)
    {
            $this->db->where('user_id',$id);
            $user = $this->db->get('user')->row_array(); //  SELECT * from users where user_id = ?

            return $user;
    }

    function UpdateUser($formarrays,$userid)
    {
        $this->db->where('user_id',$userid);
        $this->db->update('user',$formarrays);  //  UPDATE user SET name = ? , email = ? , where user_id = ?
    }


    function DeleteUser($getid)
    {

        $this->db->where('user_id',$getid);
        $this->db->delete('user'); // DELETE FROM user WHERE user_id = ?
    }
}

?>
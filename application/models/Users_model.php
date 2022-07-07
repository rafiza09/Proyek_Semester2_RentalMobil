<?php 
 class Users_model extends CI_Model{

     private $table = 'users';
     
     public function getAll(){
        
         $query = $this->db->get($this->table);
         return $query->result();
     }

     public function findById($id){
         $this->db->where('id',$id);
         $query = $this->db->get($this->table);
         return $query->row();
     }

     public function save($data){
        $sql = "INSERT INTO users(username,password,email,created_at,last_login,status,role) VALUES (?,md5(?),?,now(),now(),0,'public')";
        $this->db->query($sql, $data);
    }

     public function login($uname,$pass){
         $sql = "SELECT * FROM users WHERE username=? 
              and password=MD5(?)";
         $data = [$uname,$pass];
         $query = $this->db->query($sql, $data);
         return $query->row();
     }

}
?>
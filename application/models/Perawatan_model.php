<?php
    class Perawatan_model extends CI_Model{
        private $table = 'perawatan';

        public function getAll(){
            $query = $this->db->get($this->table);
            return $query->result();
        }

        public function findById($id){
            $this->db->where('id', $id);
            $query=$this->db->get($this->table);
            return $query->row();
        }

        public function save($data){
            $sql = "INSERT INTO perawatan(id,tanggal,biaya,km_mobil,deskripsi,mobil_id,jenis_perawatan_id) VALUES (?,?,?,?,?,?,?)";
            $this->db->query($sql, $data);
        }

        public function update($data){
            $sql = "UPDATE perawatan SET id=?,tanggal=?, biaya=?,km_mobil=?,deskripsi=?,mobil_id=?,jenis_perawatan_id=? WHERE id=?";
            $this->db->query($sql,$data);

        }

        public function delete($id){
            $sql = "DELETE FROM perawatan WHERE id=?";
            $this->db->query($sql,array($id));
        }
    }
?>
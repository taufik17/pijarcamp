<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Barang extends CI_Model {

	public function getDataProduk(){
        $this->db->select('*');
        $this->db->from('produk');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertData($data) {
        $this->db->insert('produk', $data);
    }

    public function editData($data, $id) {
        $this->db->where('id_produk', $id);
        $this->db->update('produk', $data);
    }

    public function getDataEdit($id){
        $this->db->where('id_produk', $id);
        $query = $this->db->get('produk');
        return $query->row();
    }

    public function deleteData($id){
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }
}

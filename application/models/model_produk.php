<?php

class Model_produk extends CI_Model{
    public function tampil_data(){
        return $this->db->get('produk');
    }

    public function find($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)
                       ->limit(1)
                       ->get('produk');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_produk($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)->get('produk');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function hapus_pemesanan($items)
    {
        $result = $this->db->where('id', $items);
    }

    public function cari_produk($key)
    {
        $this->db->like('produk', $key);
        return $this->db->get('produk');
    }

}
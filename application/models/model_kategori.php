<?php

class Model_kategori extends CI_Model{

    public function data_promo(){
        return $this->db->get_where("produk",array('kategori' => 'promo'));
    }

    public function data_topi(){
        return $this->db->get_where("produk",array('kategori' => 'topi'));
    }

    public function data_tas(){
        return $this->db->get_where("produk",array('kategori' => 'tas'));
    }

    public function data_baju_pria(){
        return $this->db->get_where("produk",array('kategori' => 'baju pria'));
    }

    public function data_jaket_pria(){
        return $this->db->get_where("produk",array('kategori' => 'jaket pria'));
    }

    public function data_sepatu_pria(){
        return $this->db->get_where("produk",array('kategori' => 'sepatu pria'));
    }

    public function data_baju_wanita(){
        return $this->db->get_where("produk",array('kategori' => 'baju wanita'));
    }

    public function data_jaket_wanita(){
        return $this->db->get_where("produk",array('kategori' => 'jaket wanita'));
    }

    public function data_sepatu_wanita(){
        return $this->db->get_where("produk",array('kategori' => 'sepatu wanita'));
    }
}
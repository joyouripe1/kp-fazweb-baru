<?php

class Kategori extends CI_Controller{

    public function promo()
    {
        $data['promo'] = $this->model_kategori->data_promo()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('promo',$data);
        $this->load->view('template/footer');
    }

    public function topi()
    {
        $data['topi'] = $this->model_kategori->data_topi()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('topi',$data);
        $this->load->view('template/footer');
    }

    public function tas()
    {
        $data['tas'] = $this->model_kategori->data_tas()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('tas',$data);
        $this->load->view('template/footer');
    }

    public function baju_pria()
    {
        $data['baju_pria'] = $this->model_kategori->data_baju_pria()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('baju_pria',$data);
        $this->load->view('template/footer');
    }

    public function jaket_pria()
    {
        $data['jaket_pria'] = $this->model_kategori->data_jaket_pria()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('jaket_pria',$data);
        $this->load->view('template/footer');
    }

    public function sepatu_pria()
    {
        $data['sepatu_pria'] = $this->model_kategori->data_sepatu_pria()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('sepatu_pria',$data);
        $this->load->view('template/footer');
    }

    public function baju_wanita()
    {
        $data['baju_wanita'] = $this->model_kategori->data_baju_wanita()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('baju_wanita',$data);
        $this->load->view('template/footer');
    }

    public function jaket_wanita()
    {
        $data['jaket_wanita'] = $this->model_kategori->data_jaket_wanita()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('jaket_wanita',$data);
        $this->load->view('template/footer');
    }

    public function sepatu_wanita()
    {
        $data['sepatu_wanita'] = $this->model_kategori->data_sepatu_wanita()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('sepatu_wanita',$data);
        $this->load->view('template/footer');
    }

}
<?php
	class Product extends CI_Controller{
		public function index(){
			$data['product']=$this->product_m->get_all();
			$this->load->view('product',$data);
		}

		// public function search(){
		// 	$keyword = $this->input->post('keyword');
		// 	$data['products']=$this->product_m->get_product_keyword($keyword);
		// 	$this->load->view('search',$data);
		// }

		public function search()
    {
        $this->load->model('model_produk');
        $data['judul'] = "Hasil Pencarian ".$_GET['key'];

        $cari = $_GET['key'];
        $data['produk'] = $this->model_produk->cari_produk($cari)->result();

        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('pencarian', $data);
        $this->load->view('template/footer');     

    }
	}
<?php
class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->keyrajaongkir = 'dda3bbe00266f2bbf1899814ebf5b4d7';
        $this->kabupatenrajaongkir = 'https://api.rajaongkir.com/starter/city?key=' . $this->keyrajaongkir;
    }

    public function index()
    {
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('produk', $data);
        $this->load->view('template/footer');     
    }

    public function tambah_ke_keranjang($id_produk)
    {
        $produk = $this->model_produk->find($id_produk);

        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga,
            'name'    => $produk->produk,
            'berat'   => $produk->berat,
            'gambar'  => $produk->gambar,
        );
    
    $this->cart->insert($data);
    redirect('home');

    }

    public function detail_keranjang()
    {
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('keranjang', $data);
        $this->load->view('template/footer'); 
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('home/index');
    }

    public function hapus()
    {
        $data = array(
            'rowid' => $this->uri->segment(3),
            'qty'   => 0);
            $this->cart->update($data);
        header('location:'.base_url().'');
        redirect('home/detail_keranjang');
    }

    public function pembayaran()
    {
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('pembayaran');
        $this->load->view('template/footer'); 
    }

    public function proses_pesanan()
    {
        $is_prosessed = $this->model_invoice->index();
        if($is_prosessed){
            $this->cart->destroy();
            $this->load->view('template/header');
            $this->load->view('home');
            $this->load->view('proses_pesanan');
            $this->load->view('template/footer');
        }else{
            echo "Maaf, Pesanan Anda Gagal diproses...";
        }
         
    }

    public function detail($id_produk)
    {
        $dataa['produk'] = $this->model_produk->tampil_data()->result();
        $data['produk'] = $this->model_produk->detail_produk($id_produk);
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('detail_produk', $data);
        $this->load->view('produk', $data);
        $this->load->view('template/footer'); 
    }

    
}
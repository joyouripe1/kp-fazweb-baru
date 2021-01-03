<?php 

class Model_invoice extends CI_Model{
    public function index() 
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama       = $this->input->post('nama');
        $alamat     = $this->input->post('alamat');
        $no_telp    = $this->input->post('no_telp');
        $jasa       = $this->input->post('jasa');
        $bank       = $this->input->post('bank');

        $invoice = array (
            'nama'          => $nama,
            'alamat'        => $alamat,
            'no_telp'       => $no_telp,
            'tgl_pesan'     => date('Y-m-d H:i:s'),
            'batas_bayar'   => date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'), date('m'), date('d') + 2,date('Y'))),
        );
        $this->db->insert('invoice', $invoice);
        $id_invoice =  $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array(
                'id_invoice'    => $id_invoice,
                'id_produk'     => $item['id'],
                'produk'        => $item['name'],
                'jumlah'        => $item['qty'],
                'harga'         => $item['price'],
                'jasa'          => $jasa,
                'bank'          => $bank,
            );
            $this->db->insert('pesanan', $data);
        }

        return TRUE;
    }
}
<div class="container-fluid">
    
    <div class="card">
        <h5 class="card-header" align="center">Detail Produk</h5>
        <div class="card-body">

            <?php foreach($produk as $pdk): ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/'.$pdk->gambar ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $pdk->produk ?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $pdk->keterangan ?></strong></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $pdk->kategori ?></strong></td>
                        </tr>

                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $pdk->stok ?> Buah</strong></td>
                        </tr>

                        <tr>
                            <td>Berat</td>
                            <td><strong><?php echo $pdk->berat ?> G</strong></td>
                        </tr>

                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($pdk->harga,0,',','.') ?></div></strong></td>
                        </tr>
                    </table>

                    <?php echo anchor('home/tambah_ke_keranjang/'.$pdk->id_produk,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                
                </div>
            
            </div>
            <?php endforeach; ?>
        </div>
    </div><br>
    <hr style="color: black">
    <div class="card">
        <h5 class="card-header" align="center"><b>Produk Lainnya</b></h5>
    </div>
</div>
            <div class="container-fluid">
                <div class="row text-center">
                    <?php foreach ($sepatu_wanita as $pdk) : ?>

                        <div class="card ml-1 mt-2" style="width: 195px;">
                            <img src="<?php echo base_url().'/uploads/'.$pdk->gambar ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title"><b><?php echo $pdk->produk ?></b></p>
                                <span class="badge badge-pill badge-success mb-2">Rp. <?php echo number_format($pdk->harga, 0,',','.') ?></span><br>                 
                                <?php echo anchor('home/tambah_ke_keranjang/'.$pdk->id_produk,'
                                    <div class="btn btn-sm btn-primary cart-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16px" height="16px">
                                            <path fill="#ffffff" d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z"></path>
                                        </svg>
                                    </div>') 
                                ?>
                                <?php echo anchor('home/detail/'.$pdk->id_produk,'<div class="btn btn-sm btn-success">Detail</div>') ?>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
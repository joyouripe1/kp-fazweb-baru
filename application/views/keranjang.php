<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Berat</th>
            <th>Harga</th>
            <th>Sub-Total</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach ($this->cart->contents() as $items) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><img src="<?php echo base_url().'/uploads/'.$items['gambar'] ?>"></td>
                <td><?php echo $items['name'] ?></td>
                <td align="center"><?php echo $items['qty'] ?></td>
                <td align="center"><?php echo $jumlah = $items['berat']*$items['qty'] ?> G</td>
                <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                <td align="center"><?php echo anchor('home/hapus/' .$items['rowid'], '<div class="btn btn-sm btn-danger">Hapus</div>') ?></td>
            </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="4"></td>
            <td align="right"><?php echo $jumlah; ?> G</td>
            <td colspan="1"></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
        </tr>

    </table>

    <div align="right">
        <a href="<?php echo base_url('home/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
        <a href="<?php echo base_url('home/index') ?>"><div class="btn btn-sm btn-primary">Lanjut Belanja</div></a>
        <a href="<?php echo base_url('home/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
    </div>
</div>
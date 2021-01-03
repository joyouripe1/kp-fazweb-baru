<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
                 ?>
            </div><br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?>home/proses_pesanan">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomer Telefon" class="form-control">
                </div>

                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select class="form-control" name="bank">
                        <option>-- PILIH OBSI PEMBAYARAN --</option>
                        <option>BRI         - 0012345678</option>
                        <option>BCA         - 0087654321</option>
                        <option>BNI         - 0043215678</option>
                        <option>MANDIRI     - 0056784321</option>
                        <option>ALFAMART    - 0013572468</option>
                        <option>INDOMART    - 0024681357</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control" name="jasa">
                        <option>-- PILIH OBSI PENGIRIMAN --</option>
                        <option>JNE                     </option>
                        <option>JNT                     </option>
                        <option>Sicepat                 </option>
                        <option>Ninja Expres            </option>
                        <option>TIKI                    </option>
                        <option>POS Indonesia           </option>
                        <option>GRAB                    </option>
                        <option>GOJEK                   </option>
                        <option>COD                     </option>
                    </select>
                </div>

								<div>
									<?php
									//Get Data Kabupaten
									
									//Get Data Kabupaten
									//-----------------------------------------------------------------------------//

									//Get Data Provinsi
									$curl = curl_init();

									curl_setopt_array($curl, array(
										CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
										CURLOPT_RETURNTRANSFER => true,
										CURLOPT_ENCODING => "",
										CURLOPT_MAXREDIRS => 10,
										CURLOPT_TIMEOUT => 30,
										CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
										CURLOPT_CUSTOMREQUEST => "GET",
										CURLOPT_HTTPHEADER => array(
										"key:dda3bbe00266f2bbf1899814ebf5b4d7"
										),
										));

										$response = curl_exec($curl);
										$err = curl_error($curl);

										echo "
										<div class= \"form-group\">
											<label for=\"provinsi\">Provinsi Tujuan </label>
											<select class=\"form-control\" name='provinsi' id='provinsi' required>";
												echo "<option >Pilih Provinsi Tujuan</option>";
												$data = json_decode($response, true);
												for ($i=0; $i < count($data['rajaongkir']['results']); $i++) {
                                       echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
                                      
												}
												echo "</select>
											</div>";
											//Get Data Provinsi
											?>

											<div class="form-group">
												<label for="kabupaten">Kota/Kabupaten Tujuan</label><br>
												<select class="form-control" id="kabupaten" name="kabupaten" required></select>
											</div>
											<div class="form-group">
												<label for="kurir">Kurir</label><br>
												<select class="form-control" id="kurir" name="kurir">
													<option value="jne">JNE</option>
													<option value="tiki">TIKI</option>
													<option value="pos">POS INDONESIA</option>
												</select>
											</div>
                                 <div class="form-group">
												<label for="kabupaten">layanan</label><br>
												<select class="form-control" id="layanan" name="layanan"></select>
											</div>
											<div class="form-group">
												<label for="berat">Berat (gram)</label><br>
												<input class="form-control" id="berat" type="text" name="berat" value="<?php echo 1000;//$jumber1*$jumber2?>" disabled />
											</div>
                                 <div class="form-group"><label for="memo">memo</label><input id="postal_code" name="memo" type=""  class="form-control"></div>
										</div>

                <div align="center"><button id="submit-checkout-button" type="submit" class="btn btn-md btn-primary mb-3" name="submit">Pesan</button></div>

                <div class="col-md-12" align="center">
							<div class="panel panel-success">
								<div class="panel-heading">
									<h3 class="panel-title">Ongkos Kirim</h3>
								</div>
								<div class="panel-body">
									<ol>
										<div id="ongkir"></div>
										
									</ol>
								</div>
						</div>
            
            </form>

            <?php
            }else
            {
                echo "<h4>Keranjang Belanjaan Anda Masih Kosong</h4>";
            }
            ?>

        </div>

    </div>
</div>

<script type="text/javascript">

$(document).ready(function(){
  $('#provinsi').change(function(){

    //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
    var prov = $('#provinsi').val();

        $.ajax({
            type : 'GET',
             url : 'http://localhost/kp-fazzweb-baru/kabupaten',
            data :  'prov_id=' + prov,
        success: function (data) {

        //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
        $("#kabupaten").html(data);
      }
          });
  });

  $("#kabupaten").change(function(){
    //Mengambil value dari option select provinsi asal, kabupaten, kurir, berat kemudian parameternya dikirim menggunakan ajax
    var asal = $('#asal').val();
    var kab = $('#kabupaten').val();
    var kurir = $('#kurir').val();
    var berat = $('#berat').val();

        $.ajax({
            type : 'POST',
             url : 'http://localhost/kp-fazzweb-baru/ongkir',
            data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
        success: function (data) {

        //jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
        $("#ongkir").html(data);
      }
          });
  });
      $("#kurir").change(function(){
    //Mengambil value dari option select provinsi asal, kabupaten, kurir, berat kemudian parameternya dikirim menggunakan ajax
    var asal = $('#asal').val();
    var kab = $('#kabupaten').val();
    var kurir = $('#kurir').val();
    var berat = $('#berat').val();

        $.ajax({
            type : 'POST',
             url : 'http://localhost/kp-fazzweb-baru/ongkir',
            data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
        success: function (data) {

        //jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
        $("#ongkir").html(data);
      }
          });
  });

       $('#kurir').change(function(){

          //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
          var asal = $('#asal').val();
          var kab = $('#kabupaten').val();
          var kurir = $('#kurir').val();
          var berat = $('#berat').val();

        $.ajax({
            type : 'POST',
             url : 'http://localhost/kp-fazzweb-baru/layanan',
            data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
        success: function (data) {

        //jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
        $("#layanan").html(data);
       }
       });
    });

    $('#kabupaten').change(function(){

       //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
       var asal = $('#asal').val();
       var kab = $('#kabupaten').val();
       var kurir = $('#kurir').val();
       var berat = $('#berat').val();

       $.ajax({
          type : 'POST',
          url : 'http://localhost/kp-fazzweb-baru/layanan',
          data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
          success: function (data) {

          //jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
          $("#layanan").html(data);
       }
       });
       });
});
</script>
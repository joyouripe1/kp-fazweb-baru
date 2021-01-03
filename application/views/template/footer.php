            <footer>
                <div class="site-info">
                    <div class="address">Politeknik Harapan Bersama Tegal</div>
                    <div class="copyright">Copyright @ 2020 Magang Fazzweb</div>
                </div>
            </footer>
        </div>
            
        <div class="bottom-bar">
            <div class="container">
                <div class="bottom-bar-inner">
                    <div class="column">
                        <div class="column-icon" id="goToHome">
                        <?php echo anchor('home/index', '<svg class="_8-yf5 " fill="#262626" height="20" viewBox="0 0 48 48" width="20">
                                <path d="M45.5 48H30.1c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2.1-4.6-4.6-4.6s-4.6 2.1-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.6-.6 2.1 0l21.5 21.5c.3.3.4.7.4 1.1v23.5c.1.8-.6 1.5-1.4 1.5z"></path>
                            </svg>'  ) ?>
                        </div>
                    </div>
                    <div class="column">
                        <div class="column-icon" id="goToInstagram">
                            <a href="https://www.instagram.com/azam_putra22/" target="_blank"><svg enable-background="new 0 0 24 24" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#262626" d="m4.75 24h14.5c2.619 0 4.75-2.131 4.75-4.75v-14.5c0-2.619-2.131-4.75-4.75-4.75h-14.5c-2.619 0-4.75 2.131-4.75 4.75v14.5c0 2.619 2.131 4.75 4.75 4.75zm-3.25-19.25c0-1.792 1.458-3.25 3.25-3.25h14.5c1.792 0 3.25 1.458 3.25 3.25v14.5c0 1.792-1.458 3.25-3.25 3.25h-14.5c-1.792 0-3.25-1.458-3.25-3.25z" />
                                <path fill="#262626" d="m12 18.13c3.38 0 6.13-2.75 6.13-6.13s-2.75-6.13-6.13-6.13-6.13 2.75-6.13 6.13 2.75 6.13 6.13 6.13zm0-10.76c2.553 0 4.63 2.077 4.63 4.63s-2.077 4.63-4.63 4.63-4.63-2.077-4.63-4.63 2.077-4.63 4.63-4.63z" />
                                <path fill="#262626" d="m18.358 7.362c.986 0 1.729-.74 1.729-1.721 0-1.023-.782-1.721-1.728-1.721-.986 0-1.729.74-1.729 1.721 0 1.021.778 1.721 1.728 1.721zm.177-1.886c.316.279-.405.618-.405.166 0-.27.367-.2.405-.166z" />
                            </svg></a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="column-icon" id="openSearchBox">
                            <form action="<?= base_url('product/search') ?>" method="get">
                                <input type="search" name="key" placeholder="search">
                                <input type="submit" value="Cari">
                            </form>
 
	                    <table>
 
			                <?php foreach($products as $product) { ?>
				                <tr>
					        <td><?php echo $product->nama ?></td>
				                </tr>
			            <?php } ?>
 
 
	                    </table>
                            <svg class="_8-yf5 " fill="#262626" height="20" viewBox="0 0 48 48" width="20">
                                <path d="M20 40C9 40 0 31 0 20S9 0 20 0s20 9 20 20-9 20-20 20zm0-37C10.6 3 3 10.6 3 20s7.6 17 17 17 17-7.6 17-17S29.4 3 20 3z"></path>
                                <path d="M46.6 48.1c-.4 0-.8-.1-1.1-.4L32 34.2c-.6-.6-.6-1.5 0-2.1s1.5-.6 2.1 0l13.5 13.5c.6.6.6 1.5 0 2.1-.2.3-.6.4-1 .4z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="column">
                        <div class="column-icon" id="openCartBox">
                        <?php echo anchor('home/detail_keranjang', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                                <path fill="#444" d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z"></path>
                            </svg>'  ) ?>
                            <div class="cart-item-counter cart-counter"><?php $keranjang = $this->cart->total_items() ?>
                                <b><?php echo $keranjang ?></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

    </body>
</html>
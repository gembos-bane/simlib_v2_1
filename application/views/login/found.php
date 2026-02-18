<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center" >

            <div class="col-xl-7 col-lg-12 col-md-9 " >

                <div class="card o-hidden border-0 shadow-lg my-5 bg-secondary bg-gradient  " >
                    <div class="card-body p-0" >
                        <!-- Nested Row within Card Body -->
                        <div class="row" >
                            <div class="card col-lg-6"  style="background-image: url(<?php echo base_url()?>/asset/images/sample-image1.jpg)">
                                <div class="p-4">
                                </div>
                            </div>
                            <?php foreach ($email as $key) { ?>
                                
                            <div class="col-lg-6 ">
                                <div class="p-5 ">
                                    <div class="text-center">
                                        <h1 class="h4 text-white mb-4">This Yours Account <?php echo $key->NAMA_PEGAWAI; ?></h1>
                                        <h4 class="small text-white mb-4">Mohon untuk menyimpan data Login anda</h4>
                                    </div>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                          <label for="disabledTextInput" class="form-label">Username</label>
                                          <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $key->LOGIN_USER; ?>">
                                        </div>
                                        <div class="mb-3">
                                          <label for="disabledSelect" class="form-label">Password</label>
                                          <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $key->LOGIN_PASS; ?>">
                                        </div>

                                      </fieldset>
                                    <hr>
                                    <div class="text-center">
                                        <a href="<?php echo site_url('Backbone/index')?>" class="small" href="#" style="color: white;">BackTo Login</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
</body>

</html>
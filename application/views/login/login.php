<body class="bg-gradient-primary" style="background-image: url('<?php echo base_url() ?>asset/images/IMG01.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
    <div class="container min-vh-100 d-flex justify-content-center">
        <!-- Outer Row -->
        <div class="row mt-5 justify-content-center">
            <div class="col mt-5">
                <div class="card o-hidden border-0 shadow-lg" style="background-color: rgba(0, 0, 0, 0.2); max-width: 28rem; border-radius:15px;">
                    <div class="card-body p-0" >
                        <!-- Nested Row within Card Body -->
                        <div class="row" >
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-light mb-4">Welcome Back!!</h1>
                                    </div>
                                    <form action="<?php echo site_url('Backbone/LogAcc') ?>" method="post" name="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter username ......" name="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label text-light" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <a href="<?php echo site_url('Passing/lupapassword')?>" class="btn btn-google btn-user btn-block">
                                            <i class="fa fa-key fa-fw text-light"></i> <span class="text-light"> forgot Password & Username </span>
                                        </a>
                                    </form>
                                    <hr>
                                   <div class="text-center">
                                        <a class="small" href="<?php echo site_url('MHS/newmhs')?>" style="color: white;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Create New Account for Mahasiswa!</button>
                                        </a>
                                        
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-danger" id="exampleModalLabel">WARNING !!!</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Pastikan Anda belum memiliki account dalam aplikasi SIMLIB, data anda hanya sekali terdaftar dan Pihak AKADEMIK Fakultas hanya mengeksekusi 1 user login.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php echo site_url('MHS/newmhs')?>"><button type="button" class="btn btn-info" data-bs-dismiss="modal">Create</button></a>
                                                        <a href="<?php echo site_url('MHS/newmhs')?>"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Lupa Login</button></a>
                                                        <a href="<?php echo site_url('Passing/lupapassword')?>"><button type="button" class="btn btn-primary">Lupa Login</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</html>

<!-- New login -->

<!-- last login -->
    <!-- <div class="container">

        
        <div class="row justify-content-center" >

            <div class="col-xl-7 col-lg-12 col-md-9 " >

                <div class="card o-hidden border-0 shadow-lg my-5 bg-secondary bg-gradient  " >
                    <div class="card-body p-0" >
                        Nested Row within Card Body
                        <div class="row" >
                            <div class="card col-lg-6"  style="background-image: url(<?php echo base_url()?>/asset/images/sample-image1.jpg)">
                                <div class="p-4">
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="p-5 ">
                                    <div class="text-center">
                                        <h1 class="h4 text-white mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="<?php echo site_url('Backbone/LogAcc') ?>" method="post" name="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter username ......" name="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                            
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                        <hr>
                                        <a href="<?php echo site_url('MHS/newmhs')?>"><button type="button" class="btn btn-google btn-user btn-block" data-bs-dismiss="modal">Lupa Password & Username </button></a>
                                        <a href="<?php echo site_url('Passing/lupapassword')?>" class="btn btn-google btn-user btn-block">
                                            <i class="fa fa-key fa-fw"></i> Lupa Password & Username
                                        </a>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo site_url('Pasing/forgotpass')?>">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo site_url('MHS/newmhs')?>" style="color: white;"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Create New Account for Mahasiswa!</button>
                                            </a>
                                    Modal
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="exampleModalLabel">WARNING !!!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                Pastikan Anda belum memiliki account dalam aplikasi SIMLIB, data anda hanya sekali terdaftar dan Pihak AKADEMIK Fakultas hanya mengeksekusi 1 user login.
                                              </div>
                                              <div class="modal-footer">
                                                <a href="<?php echo site_url('MHS/newmhs')?>"><button type="button" class="btn btn-info" data-bs-dismiss="modal">Create</button></a>
                                                <a href="<?php echo site_url('MHS/newmhs')?>"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Lupa Login</button></a>
                                               <a href="<?php echo site_url('Passing/lupapassword')?>"><button type="button" class="btn btn-primary">Lupa Login</button></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>asset/vendor/bootstrap/js/bootstrap.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>asset/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>asset/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>asset/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url()?>asset/js/demo/chart-pie-demo.js"></script>
    <script src="<?php echo base_url()?>asset/js/demo/chart-bar-demo.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-3.7.0.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
    <!-- Script -->
    
</body>

</html>
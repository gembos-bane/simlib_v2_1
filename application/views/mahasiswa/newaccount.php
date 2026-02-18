<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>asset/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/stylesside.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>asset/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>asset/ckfinder/ckfinder.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- jQuery UI -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
</head>
<body>
    <div class="container-fluid col-sm-8 col-xl-9">
             <!-- The Modal1 -->
                <div class="card">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title text-center">Create New Account</h4>
                        <button type="button" class="btn-close" ></button>
                      </div>

                                              <!-- Modal body -->
                      <div class="modal-body">
                            <form action="<?php echo site_url('MHS/createaccount') ?>" method="post" >
                
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <div class="cta-inner bg-faded rounded">
                                            
                                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama" aria-describedby="basic-addon1" name="Nama" required><small>&nbsp; *</small>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" aria-label="Nip" aria-describedby="basic-addon1" name="nim"><small>&nbsp; *</small>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Alamat Rumah" aria-label="Nip" aria-describedby="basic-addon1" name="alamat" required> <small>&nbsp; *</small>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">&nbsp;Prodi</span>
                                                        <select class="form-control" name="id_nam_prod">                                                             <option value="">----- Program Studi Anda -----</option>
                                                            <?php foreach ($prodi as $row ){ ?>

                                                            <option value="<?php echo $row->ID_PRODI;?>"><?php echo $row->NAMA_PRODI; ?></option>
                                                            <?php ;}?>
                                                        </select><small>&nbsp; *</small>

                                                    </div>
                                                </li> 
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="No Telp" aria-label="Tlp" aria-describedby="basic-addon1" name="tlp" required> <small>&nbsp; *</small>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" name="email" required> <small>&nbsp; *</small>
                                                    </div>
                                                </li>
                                                
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="Username" required> <small>&nbsp; *</small>
                                                    </div>
                                                </li>
                                                
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="Password" required> <small>&nbsp; *</small>
                                                    </div>
                                                </li>
                                                <li class="list-unstyled-item list-hours-item d-flex">
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                        <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1" name="Password2" required> <small>&nbsp; *</small>
                                                    </div>
                                                </li>
                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                      <!-- Modal footer -->
                          <div class="modal-footer">
                            <a href="<?php echo site_url('Backbone/index');?>"><button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button></a>
                            <button type="submit" class="btn btn-info" data-bs-dismiss="modal">Submit</button>
                          </div>
                        </form><!-- exit form -->
                      </div>
                    </div>
                  </div>
                </div>
                            <!-- end modal1 -->
        </div>

        <!-- Modal2 -->
        
        <!-- end Modal2 --> 
       <!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?php echo base_url()?>assets/js/script.js"></script>
</body>
</html>
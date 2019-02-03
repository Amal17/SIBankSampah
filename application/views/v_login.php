<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <hr>
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4">Selamat Datang!</h1>
                  </div>
                  <hr>
                  <div class="text-center">
                    <h8 class="h8 text-gray-900 mb-4">Semoga Hari Anda Menyenangkan!</h8>
                  </div>
                  <hr>

                      <!-- <?php if($this->session->flashdata('message')){ ?> -->
                      <div class="box-body">
                      <div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert">&times;</a>
                      <strong>Success!</strong>
                      <!-- <strong>Success!</strong> <?php echo $this->session->flashdata('message'); ?> -->
                      </div>
                      </div>    
                      <!-- <?php } ?> -->

                  <form class="user" action='<?php echo base_url('Home/auth'); ?>' method='post' enctype='multipart/form-data'>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username" autofocus required">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required">
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    
                    <hr>
                    
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
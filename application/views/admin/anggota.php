

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Anggota</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
          
           <div class='col-xs-12'>
              <!-- /.box -->

              <div class='box box-primary'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Form Data User</h3>
                </div>
                <!-- /.box-header -->
                <div class='box-body'>
                <form class='form-horizontal' action='<?php echo base_url('User/tambah'); ?>' method='post' enctype='multipart/form-data'>
                  <div class='box-body'>

                    <div class='form-group'>
                      <label for='inputPassword3' class='col-sm-2 control-label'>Username</label>
                      <div class='col-md-3'>
                        <input type='text' name='username' id='username' class='form-control' required="" placeholder='Masukkan Username'>
                      </div>
                    </div>

                    <div class='form-group'>
                      <label for='inputPassword3' class='col-sm-2 control-label'>Password</label>
                      <div class='col-md-3'>
                        <input type='password' name='password' id='password' class='form-control' required="" placeholder='Masukkan Password'>
                      </div>
                    </div>

                    <div class='form-group'>
                      <label for='inputPassword3' class='col-sm-2 control-label'>Nama</label>
                      <div class='col-md-3'>
                        <input type='text' name='nama' id='nama' class='form-control' required="" placeholder='Masukkan Nama'>
                      </div>
                    </div>

                    <div class='form-group'>
                          <label for='inputPassword3' class='col-sm-2 control-label'>Level</label>

                          <div class='col-md-3'>
                            <select class='form-control' required="" name='level'>
                              <option>Pilih Level</option>";
                              <option value='admin'>Admin</option>";
                              <option value='karyawan'>Karyawan</option>";
                            </select>
                          </div>
                        </div>

                    
                  <!-- /.box-body -->
                  <div class='box-footer'>
                    <a href="#"><button type='button' class='btn btn-default'><i class="glyphicon glyphicon-remove"></i> Batal</button></a>
                    <button type='submit' class='btn btn-warning' name='tambahData'><i class="glyphicon glyphicon-save"></i> Simpan</button>
                  </div>
                  <!-- /.box-footer -->
                </div>
                </form>
              </div>
                <!-- /.box-body -->
              </div>
            </div>


        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min.js')?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min.js')?>"><\/script>')</script>
    <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

    <!-- Icons -->
    <script src="<?php echo base_url('assets/js/feather.min.js')?>"></script>
    <script>
      feather.replace()
    </script>
    
  </body>
</html>

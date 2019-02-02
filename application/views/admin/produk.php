

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Produk</h1>
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


        
                  <a 
                    href="javascript:;"
                    data-toggle="modal" data-target="#tambah-item">
                    <button class="btn btn-info">Tambah Item</button>
                  </a>
               


           
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

<!-- Modal -->
<div aria-hidden="true" aria-labelledby="Tambah Item" role="dialog" tabindex="-1" id="tambah-item" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Tambah Item</h3>
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
      </div>

      <form class="form-horizontal" action="<?php echo base_url('') ?>" method="post" role="form">
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama Item</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" required="" name="nama" placeholder="Nama Item">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Kode Item</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" required="" name="kode" placeholder="Kode Item">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Satuan</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" required="" name="satuan" placeholder="Satuan Item">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Harga Langsung</label>
            <div class="col-lg-8">
              <div class="input-group-prepend">
                <span class="input-group-text">Rp.</span>
                <input type="text" class="form-control" required="" name="lansung" placeholder="Harga Langsung" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
              </div>    
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-4 col-form-label">Harga Tabung</label>
            <div class="col-lg-8">
              <div class="input-group-prepend">
                <span class="input-group-text">Rp.</span>
                <input type="text" class="form-control" required="" name="tabung" placeholder="Harga Tabung" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
              </div>
            </div>
          </div>
        </div>
                  
        <div class="modal-footer">
          <button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-pencil"></i> Ubah&nbsp;</button>
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Batal</button>
        </div>
      
      </form>
    </div>
  </div>
</div>

<!-- END Modal Ubah -->

<script>
  function tandaPemisahTitik(b){
    var _minus = false;
    if (b<0) _minus = true;
    b = b.toString();
    b=b.replace(".","");

    c = "";
    panjang = b.length;
    j = 0;
    for (i = panjang; i > 0; i--){
       j = j + 1;
       if (((j % 3) == 1) && (j != 1)){
         c = b.substr(i-1,1) + "." + c;
       } else {
         c = b.substr(i-1,1) + c;
       }
    }
    if (_minus) c = "-" + c ;
    return c;
  }

  function numbersonly(ini, e){
    if (e.keyCode>=49){
      if(e.keyCode<=57){
      a = ini.value.toString().replace(".","");
      b = a.replace(/[^\d]/g,"");
      b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
      ini.value = tandaPemisahTitik(b);
      return false;
      }
      else if(e.keyCode<=105){
        if(e.keyCode>=96){
          //e.keycode = e.keycode - 47;
          a = ini.value.toString().replace(".","");
          b = a.replace(/[^\d]/g,"");
          b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
          ini.value = tandaPemisahTitik(b);
          //alert(e.keycode);
          return false;
          }
        else {return false;}
      }
      else {
        return false; }
    }else if (e.keyCode==48){
      a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
      b = a.replace(/[^\d]/g,"");
      if (parseFloat(b)!=0){
        ini.value = tandaPemisahTitik(b);
        return false;
      } else {
        return false;
      }
    }else if (e.keyCode==95){
      a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
      b = a.replace(/[^\d]/g,"");
      if (parseFloat(b)!=0){
        ini.value = tandaPemisahTitik(b);
        return false;
      } else {
        return false;
      }
    }else if (e.keyCode==8 || e.keycode==46){
      a = ini.value.replace(".","");
      b = a.replace(/[^\d]/g,"");
      b = b.substr(0,b.length -1);
      if (tandaPemisahTitik(b)!=""){
        ini.value = tandaPemisahTitik(b);
      } else {
        ini.value = "";
      }

    return false;
  } else if (e.keyCode==9){
    return true;
  } else if (e.keyCode==17){
    return true;
  } else {
    //alert (e.keyCode);
    return false;
  }
  }

</script>

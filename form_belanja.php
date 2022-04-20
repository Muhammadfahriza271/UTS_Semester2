<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Praktikum-2 Pemrograman Web 2</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Layout</a></li>
                  <li class="breadcrumb-item active">Fixed Layout</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Form Belanja</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-12">
                  <div class="card-body"></div>
                  <!-- /.card-body -->
                  <div class="card-body p-3" style= "float: right; margin-right: 1em;">
                        <table border="1">
                            <tr>
                            <td style="background-color: blue; color: white; padding-left: 1em; padding-top: 1em; padding-bottom: 1em;"> Daftar Harga </td>
                            </tr>
                            <tr>
                            <td style="padding-left: 1em;  padding-top: 1em; padding-bottom: 1em;" >TV : 4.200.000 </td>
                            </tr>
                            <tr>
                            <td style="padding-left: 1em;  padding-top: 1em; padding-bottom: 1em;">Kulkas : 3.100.000 </td>
                            </tr>
                            <tr>
                            <td style="padding-left: 1em;  padding-top: 1em; padding-bottom: 1em;">Mesin Cuci : 3.800.000 </td>
                            </tr>
                            <tr>
                            <td style="background-color: blue; color: white; padding-left: 1em; padding-right: 15em;  padding-top: 1em; padding-bottom: 1em;"> Harga Dapat Berubah Setiap Saat </td>
                            </tr>
                        </table>
                    </div>
                    <form method="POST" action="form_belanja.php">
                    <form>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                          <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                            <label for="produk_1" class="custom-control-label">KULKAS</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-4">
                          <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                      </div> 
                      <div class="form-group row">
                        <div class="offset-4 col-8">
                          <button name="proses" type="submit" value="simpan" class="btn btn-success">Kirim</button>
                        </div> 
                      </div>
                      </div>
                    </form>		 
                    
                    <?php
                    // Ngambil request data yang kita input
                    $proses = $_POST['proses'];
                    $nama_customer = $_POST['customer']; 
                    $pilih_produk = $_POST['produk'];
                    $jumlah_beli = $_POST['jumlah'];

                    if($pilih_produk == "TV"){
                      $harga = 4200000;
                    }elseif($pilih_produk == "Kulkas"){
                      $harga = 3100000;
                    }elseif($pilih_produk == "Mesin Cuci"){
                      $harga = 3800000;
                    }
                    $total = $jumlah_beli * $harga;

                    // Menampilkan data yang telah kita ambil
                    echo "Nama Customer : $nama_customer";
                    echo "<br/>Produk Pilihan : $pilih_produk";
                    echo "<br/>Jumlah Beli : $jumlah_beli";
                    echo '<br/>Total Belanja : Rp.'.number_format ($total).',-';
                    ?>
                  </div>
                  </div>
                <!-- /.card -->
                </div>
              </div>
            </div>
        </section>
        <!-- /.content -->
</div>
<?php
include_once 'footer.php';
?>
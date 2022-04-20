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
                <h1>Praktikum-4 Pemrograman Web 2</h1>
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
                    <h3 class="card-title">Class Lingkaran</h3>

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

                  <?php
                    // memanggil file atau class_lingkaran.php
                    require_once 'class_lingkaran.php';
                    echo "Nilai PHI adalah = " . Lingkaran::PHI;
                    $lingkar1 = new Lingkaran(10);
                    $lingkar2 = new Lingkaran(4);
                    echo "<br/>";
                    // Menghitung luas Lingkaran menggunakan fungsi getluas
                    echo "<br/> Luas Lingkaran I adalah = " .$lingkar1->getluas();
                    echo "<br/> Luas Lingkaran II adalah = " .$lingkar2->getluas();
                    echo "<br/>";

                    // Menghitung luas Lingkaran menggunakan fungsi getkeliling
                    echo "<br/> Keliling Lingkaran I adalah = " .$lingkar1->getkeliling();
                    echo "<br/> Keliling Lingkaran II adalah = " .$lingkar2->getkeliling();
                    echo "<br/><hr/>";
                    ?>
                  <!-- /.card-body -->  
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
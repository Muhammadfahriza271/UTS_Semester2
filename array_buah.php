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
                <h1>Praktikum-1 Pemrograman Web-2</h1>
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
                    <h3 class="card-title">Array Buah</h3>

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
                  <?php
                    $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
                    // cetak buah index ke 2
                    echo "Ini adalah hasil data buah dalam array";
                    echo "<br/>$ar_buah[2]";
                    // cetak jumlah buah
                    echo '<br/>Jumlah buah ' . count($ar_buah);
                    // cetak seluruh buah
                    echo "<ol>";
                    foreach ($ar_buah as $buah) {
                        echo "<li>$buah</li>";
                    }
                    echo "</ol>";
                    // tambahkan data array
                    $ar_buah[] = "Duarian";
                    // Hapus salah satu buah berdasarkan indexnya
                    unset($ar_buah[1]);
                    // Ubah buah index ke dua menjadi manggis
                    $ar_buah[2] = "Manggis";
                    // cetak seluruh buah dengan indexnya
                    echo "<ul>";
                    foreach ($ar_buah as $k => $v) {
                        echo "<li>Buah index ke - $k adalah $v </li>";
                    }
                    echo "</ul>";
                    echo "<br/><hr/>"
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
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
                <h1>Praktikum-1 Pemrograman Web 2</h1>
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
                    <h3 class="card-title">Array Fungsi</h3>

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
                    $ar_buah = ["p"=>"pepaya", "a"=>"apel", "m"=>"mangga", "j"=>"jeruk"];
                    echo "<ol>";
                    foreach ($ar_buah as $buah => $v) {
                        echo "<li> $buah - $v </li>";
                    }
                    echo "</ol>";
                    // fungsi sort berguna untuk mengurutkan array dalam urutan menaik
                    sort($ar_buah);
                    echo "</hr>";
                    echo "<ol>";
                    foreach ($ar_buah as $buah => $k) {
                        echo "<li> $buah - $k </li>";
                    }
                    echo "</ol>";
                    // fungsi arsort berguna untuk mengurutkan array dalam urutan
                    arsort($ar_buah);
                    echo "</hr>";
                    echo "<ol>";
                    foreach ($ar_buah as $buah => $k) {
                        echo "<li> $buah - $k </li>";
                    }
                    echo "</ol>";
                    echo "<hr>";
                    ?>
                    <!-- fungsi array pop berguna untuk menghapus nilai -->
                    <?php
                    $tims = ["erwin", "heru", "ali", "zaki"];
                    array_pop($tims);
                    foreach ($tims as $person) {
                        echo "$person <br/>";
                    }
                    echo "<hr>";
                    ?>
                    <!-- fungsi array push berguna untuk menambahkan nilai ke dalam data array terakhir -->
                    <?php
                    $tims = ["erwin", "heru", "ali", "zaki"];
                    array_push($tims, "wati");
                    foreach ($tims as $person) {
                        echo "$person <br/>";
                    }
                    echo "<hr>";
                    ?>
                    <!-- fungsi array shift berguna untuk menghapus nilai awal dari sebuah data array -->
                    <?php
                    $tims = ["erwin", "heru", "ali", "zaki"];
                    array_shift($tims);
                    foreach ($tims as $person) {
                        echo "<br/>$person";
                    }
                    echo "<hr>";
                    ?>
                    <!-- fungsi array unshift berguna untuk menambahkan nilai array satu atau lebih elemen ke dalam suatu array -->
                    <?php
                    $tims = ["erwin", "heru", "ali", "zaki"];
                    array_unshift($tims, "joko","wati");
                    foreach ($tims as $person) {
                        echo "<br/>$person";
                        echo "<br/><hr/>";
                    }
                    
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
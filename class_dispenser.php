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
                <h1>Praktikum-5 Pemrograman Web 2</h1>
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
                    <h3 class="card-title">Class Dispenser</h3>

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
                    // buat class dispenser
                    class Dispenser{
                        // buat property
                        protected $volume;
                        protected $hargaSegelas;
                        const VolGelas = 250;
                        public $namaMinuman;

                        // buat method 
                        public function isi(){
                            return $this->volume = 1000;
                        }
                        public function harga($harga){
                            return $this->hargaSegelas = $harga;
                        }

                        // buat method untuk menghitung 
                        function hasil(){
                            return $this->volume - self::VolGelas;
                        }
                    }
                    // buat object
                    $volGalon = new Dispenser();
                    echo $volGalon -> namaMinuman = ('Nama Minuman Aqua');
                    echo '<br/><hr/>';
                    echo '<br/>Volume galonnya adalah' .$volGalon->isi() .'ML'; 
                    echo '<br/>Harga Segelasnya adalah 3000 Rupiah';
                    echo '<br/>Andi beli air 1 gelas yang volumenya'  . Dispenser::VolGelas  .'ML';
                    echo '<br/>Hasil Volume sekarang adalah' .$volGalon->hasil()  .'ML'; 
                    echo "<br/><hr/>";
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
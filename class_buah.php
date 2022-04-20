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
                    <h3 class="card-title">Class Buah</h3>

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
                    class buah {
                        public $name;
                        protected $color;
                        private $weight;

                        // public function
                        function set_name($n){
                            return $this->name = $n;
                        }
                        // contoh protected function
                        public function set_color($c){
                            return $this->color = $c;
                        }
                        // contoh private function
                        public function set_berat($b){
                            return $this->weight = $b;
                        }
                    }
                    $mango = new buah();
                    echo $mango ->set_name('Mango');
                    echo "<br />";
                    echo $mango->set_berat('300 KG');
                    echo "<br />";
                    echo $mango->set_color('Hijau');
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
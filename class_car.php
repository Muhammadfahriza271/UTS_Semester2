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
                    <h3 class="card-title">Class Car</h3>

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
					/*
						Membuat class Car.
						Class dapat dikatakan sebagai model atau blueprint untuk membuat sebuah produk atau object.
					*/
					class Car {
						/*
							Membuat atribut atau properti yang dibutuhkan oleh Class Car.
							Properti sama seperti variabel, hannya saja di dalam class disebut properti.
						*/
						public $nama;
						public $warna;

						/*
							Method constructor, method yang otomatis berjalan ketika membuat class.
							Biasanya digunakan untuk mengisi nilai awal pada pembuatan class.
						*/
						function __construct($nama, $warna) {
							echo "Method construct otomatis dijalankan ketika membuat object dibuat <br>";
							$this->nama = $nama;
							$this->warna = $warna;
						}

						/*
							Membuat method atau perilaku yang dibutuhkan oleh Class Car
							Method sama seperti function, hanya saja di dalam class disebut method.
						*/
						function maju() {
							echo "Mobil {$this->nama} maju <br>";
						}
						function mundur() {
							echo "Mobil {$this->nama} mundur <br>";
						}
					}

					/*
						Membuat object atau produk dari class Car.
						Objet yang dibuat adalah mobil avanza.
					*/
					echo "<h2>Mobil Avanza</h2>";
					$avanza = new Car("Avanza GT 101", "Merah");
					$avanza->maju();
					$avanza->mundur();
					echo "<br>";

					/*
						Membuat object atau produk dari class Car.
						Objet yang dibuat adalah mobil toyota.
					*/
					echo "<h2>Mobil Toyota</h2>";
					$toyota = new Car("Toyota Dai Z11", "Biru");
					$toyota->maju();
					$toyota->mundur();
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
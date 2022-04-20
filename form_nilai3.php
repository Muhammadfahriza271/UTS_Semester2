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
                    <h3 class="card-title">Forn Nilai</h3>

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
                      <form method="POST" action="form_nilai3.php">
                      <div class="form-group row">
                          <label for="nim" class="col-4 col-form-label">NIM</label> 
                          <div class="col-8">
                            <input id="nim" name="nim" placeholder="Masukan NIM Anda" type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                          <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                              <option value="DDP">Dasar - Dasar Pemrograman</option>
                              <option value="WEB">Pemrograman Web</option>
                              <option value="BASDAT">Basis Data</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                          <div class="col-8">
                            <input id="nilai" name="nilai" placeholder="Masukan Nilai Anda" type="text" class="form-control">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <div class="offset-4 col-8">
                            <button name="submit" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                        </div>
                      </form>
                      <?php
                      require_once 'class_nilaimahasiswa.php';
                      if($_POST){
                          $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                          $keterangan = $ns->hitungNilai();
                          $hasil1 = $ns->kelulusan($keterangan);
                          $hasil2 = $ns->grade($keterangan);
                          echo 'NIM : ' .$ns->nim;
                          echo '<br/> Mata Kuliah : ' .$ns->matkul;
                          echo '<br/> Nilai : ' .$ns->nilai;
                          echo '<br/> Status : ' .$ns->kelulusan($keterangan);
                          echo '<br/> Grade : ' .$ns->grade($keterangan);
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
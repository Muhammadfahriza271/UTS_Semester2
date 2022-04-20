<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="container-fluid">
                    <div class="row m-auto">
                    <form method="POST" action="kalkulator_bmi.php">
<div class="container"> 
<div class="row justify-content-center">
  <div class="form-group row">
  <h2 class="mt-4" style="text-align: center">KALKULATOR BMI</h2>
    <label for="name" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Masukan nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tempat" name="tempat" placeholder="Masukan tempat lahir Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" placeholder="Masukan tanggal lahir Anda" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Alamat Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukan alamat email Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="tb" name="tb" placeholder="Masukan tinggi badan Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="bb" name="bb" placeholder="Masukan berat badan Anda" type="text" class="form-control">
    </div>
    </div> 
  <div class="form-group row">
    <label class="col-4">Jenis kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki"> 
        <label for="gender_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
  </div> 
  <div class="form-group row">
  <div class="d-grid gap-2 col-6 mx-auto">
      <button name="submit" type="submit" value="Simpan" class="btn btn-primary">Hitung</button>
  </div>
  </div>
</form>

<?php
require_once "class_pasien.php";
require_once "class_bmi.php";
require_once "class_bmipasien.php";
$pasien1 = new Pasien (1, "P001", "Ahmad", "Bandung", "2 Juni 2001","ahmad212@gmail.com", "Laki-laki");
$pasien2 = new Pasien (2, "P002", "Rina", "Cirebon", "12 Agustus 2000","rina03@gmail.com", "Perempuan");
$pasien3 = new Pasien (3, "P003", "Lutfi", "Jakarta", "5 Maret 2002","Lutfi05@gmail.com", "Laki-laki");
$nama_pasien = $_POST['name']; 
$tmp_lahir = $_POST['tempat'];
$tgl_lahir = $_POST['tanggal']; 
$email = $_POST['email'];
$tinggi_badan = $_POST['tb'];
$berat_badan = $_POST['bb'];
$gender = $_POST['gender'];
$pasien4 = new Pasien (4, "P004", $nama_pasien, $tmp_lahir, $tgl_lahir, $email, $gender);
$bmi1 = new Bmi(169, 68.8);
$bmi2= new Bmi(165, 55.3);
$bmi3 = new Bmi(171, 45.2);
$bmi4 = new Bmi($tinggi_badan, $berat_badan);
$ar_bmi = [new BMIPasien(1, $bmi1, "2022-01-10", $pasien1),
           new BMIPasien(2, $bmi2, "2022-01-10", $pasien2),
           new BMIPasien(3, $bmi3, "2022-01-11", $pasien3)];
           array_push($ar_bmi,new BMIPasien(4, $bmi4, $tgl_lahir, $pasien4));
?>
<div class="container">
    <div class="row">
      <div class="container-fluid">
        <table class="table text-center table-bordered table table-primary">
        <thead>
        <tr >
          <th scope="col">No</th>
          <th scope="col">Kode Pasien</th>
          <th scope="col">Nama Pasien</th>
          <th scope="col">Gender</th>
          <th scope="col">Berat</th>
          <th scope="col">Tinggi</th>
          <th scope="col">Nilai</th>
          <th scope="col">Status BMI</th>
        </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          foreach($ar_bmi as $obj){
          ?>
          <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->pasien->kode?></td>
            <td><?=$obj->pasien->nama?></td>
            <td><?=$obj->pasien->gender?></td>
            <td><?=$obj->bmi->berat?></td>
            <td><?=$obj->bmi->tinggi?></td>
            <td><?=$obj->bmi->nilaiBMI()?></td>
            <td><?=$obj->bmi->statusBMI()?></td>
          </tr>
          <?php
          $nomor++;
        }
        ?>
        </tbody>
        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>
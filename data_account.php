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
                    <h3 class="card-title">Class Account</h3>

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
                  <div class="content">
  <div class="container">
    <div class="row">
      <div class="container-fluid">
        <table class="table text-center table-bordered table table-primary">
        <thead>
        <tr >
          <th scope="col">No</th>
          <th scope="col">No. Account</th>
          <th scope="col">Nama Pemilik</th>
          <th scope="col">Saldo</th>
      </tr>
                    <?php
                    include_once "class_account.php";
                    $customer1 = new AccountBank('C001', 6000000, 'Ahmad');
                    $customer2 = new AccountBank('C002', 5350000, 'Budi');
                    $customer3 =  new AccountBank('C003', 2500000, 'Kurniawan');
                    $ar_account = [$customer1, $customer2, $customer3];

                    $nomor = 1;
                    foreach($ar_account as $obj){
                    ?>
                    <tr>
                      <td><?= $nomor?></td>
                      <td><?=$obj->nomor?></td>
                      <td><?=$obj->customer?></td>
                      <td><?=$obj->getSaldo()?></td>
                      </tr>
                    <?php
                      $nomor++;
                      }
                      ?>
                      </thead>
                      <tbody>
                    <?php
                    $customer1->deposit(1000000);
                    echo 'Ahmad Nabung 1.000.000 <br/>';
                    $customer1->cetak();

                    $customer2->withdraw(2500000);
                    echo '<br/><br/>Budi tarik uang 2.500.000 <br/>';
                    $customer2->cetak();
                    ?>
                      </tbody>
                    </table>
                    <br/><hr/>  
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
<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head.php') ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?php $this->load->view('admin/header.php') ?> 

  <!-- Main Sidebar Container -->
<?php $this->load->view('admin/sidebar.php') ?> 


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Keuangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Keuangan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Keuangan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Bulan</th>
                  <th>Total Masuk</th>
                  <th>Gaji Pegawai</th>
                  <th>Biaya Listrik</th>
                  <th>Biaya Air</th>
                  <th>Sewa</th>
                  <th>Untung</th>
                </tr>
                </thead>
                 <tbody>
                    <?php
                    foreach ($t_uang as $user){
                      ?>
                      <tr>
                        <td><?php echo $user->bulan; ?></td>
                        <td><?php echo $user->total_masuk; ?></td>
                        <td><?php echo $user->gaji_pegawai; ?></td>
                        <td><?php echo $user->biaya_listrik; ?></td>
                        <td><?php echo $user->biaya_air; ?></td>
                        <td><?php echo $user->sewa; ?></td>
                        <td><?php echo $user->untung; ?></td>
                      </tr>
                      <?php
                  }
                  ?>
                  </tbody>
</table>
</div>
</div>
</div>
</body>
</html>

<?php $this->load->view('admin/footer.php') ?>  
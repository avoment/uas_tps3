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
            <h1>Data Jasa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Jasa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Jasa</h3>
            </div>
            <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10px">ID</th>
                  <th >Nama</th>
                  <th >Harga</th>                  
                </tr>
                </thead>
                 <tbody>
                    <?php
                    foreach ($tbl_jenis as $user){
                      ?>
                      <tr>
                        <td><?php echo $user->id; ?></td>
                        <td><?php echo $user->nama; ?></td>
                        <td><?php echo $user->harga; ?></td>
                                                
                      </tr>
                      <?php
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
</div>
</body>
</html>

<?php $this->load->view('admin/footer.php') ?>  
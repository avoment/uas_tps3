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
            <h1>Cucian Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cucian Masuk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> 

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cucian Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">

                <form method="POST" action="<?php echo base_url(); ?>home/insert">

                    <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="Id Transaksi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Isi nama konsumen">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis</label>
                    <input type="text" class="form-control" name="jenis" placeholder="Isi paket laundry">
                  </div> 
                  
                   <div class="form-group">
                    <label for="exampleInputPassword1">Berat</label>
                    <input type="number" class="form-control" name="berat" placeholder="Masukan Berat Pakaian" required>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Ambil</label>
                    <input type="date" class="form-control" name="tgl_ambil" required>
                  </div>
                   <div class="form-group">
                    <label for="text">Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="">
                  </div>
                  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Simpan</button>
                </div>
                <!-- /.card-body -->
</form>
</div>
</div>
</div>
</div>
</section>
</div>
</body>
</html>

<?php $this->load->view('admin/footer.php') ?>  
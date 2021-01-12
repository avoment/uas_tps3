<!DOCTYPE html>
<html>
<?php $this->load->view('user/head.php') ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?php $this->load->view('user/header.php') ?> 

  <!-- Main Sidebar Container -->
<?php $this->load->view('user/sidebar.php') ?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Buku Perpus</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>5</h3>

                <p>Staff</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>1000+</h3>

                <p>Judul buku</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="container">
  
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID BUKU</th>
            <th>JUDUL</th>
            <th>TAHUN TERBIT</th>
            <th>PENERBIT</th>
            <th>JUMLAH</th>
            
          </tr>
        </thead>
        <tbody>
          <?php  

          /**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'uas_promnet';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 



          // Fetch all users data from database
        $result = mysqli_query($mysqli, "SELECT * FROM tbl_buku ORDER BY id_buku DESC");

    while($tbl_buku = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$tbl_buku['id_buku']."</td>";
        echo "<td>".$tbl_buku['judul']."</td>";
        echo "<td>".$tbl_buku['tahun_terbit']."</td>";
        echo "<td>".$tbl_buku['penerbit']."</td>";
        echo "<td>".$tbl_buku['jumlah']."</td>";
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Ahmad Rizqi Ferdiansyah / 18510010</a>.</strong>
    Sistem Informasi 2018.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/back/plugins/') ?>jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/back/plugins/') ?>jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/back/plugins/') ?>bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/back/plugins/') ?>chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/back/plugins/') ?>sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('assets/back/plugins/') ?>jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('assets/back/plugins/') ?>jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/back/plugins/') ?>jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/back/plugins/') ?>moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/back/plugins/') ?>daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/back/plugins/') ?>tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/back/plugins/') ?>summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/back/plugins/') ?>overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/back/dist/') ?>js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/back/dist/') ?>js/<?php echo base_url('assets/back/pages/') ?>dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/back/dist/') ?>js/demo.js"></script>
</body>
</html>

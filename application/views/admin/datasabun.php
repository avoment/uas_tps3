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
            <h1>Data Sabun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Sabun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sabun</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      
                      <th>Sabun</th>
                      <th>Softener</th>
                      <th>Parfum</th>
                    </tr>
                  </thead>
                 <tbody>
                    <?php
                    foreach ($t_sabun as $user){
                      ?>
                      <tr>
                        <td><?php echo $user->sabun; ?></td>
                        <td><?php echo $user->softener; ?></td>
                        <td><?php echo $user->parfum; ?></td>
                        
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


            
               <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Sabun</h3>
              </div>
              <form role="form">
                <div class="card-body">
                    
                   <form method="POST" action="<?php echo base_url(); ?>home/update_s">
                    <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control"  placeholder="harus 1" name="id">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Sabun</label>
                    <input type="text" class="form-control"  placeholder="mililiter" name="sabun">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Softener</label>
                    <input type="text" class="form-control"  placeholder="mililiter" name="softener">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Parfum</label>
                    <input type="text" class="form-control"  placeholder="mililiter" name="parfum">
                  </div>
                  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
                  </form>
                </div>
              </form>
            </div>
          </div>

            </div>
          </section>
          </div>
        </div>

</body>
</html>

<?php $this->load->view('admin/footer.php') ?>  
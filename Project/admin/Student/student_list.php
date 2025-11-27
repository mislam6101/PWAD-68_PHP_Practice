<?php include_once("../inc/db_config.php") ?>
<?php
session_start();
if(!isset($_SESSION["loggedin"])){
  header("Location:index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $admin_url; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $admin_url; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $admin_url; ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $admin_url; ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $admin_url; ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <?php include ("../inc/navber.php") ?>

  <?php include("../inc/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php 
            if(isset($_SESSION['msg'])){
              echo '<div class="alert alert-success">'. $_SESSION['msg'] .'</div>';
              unset($_SESSION['msg']);
            }
            ?>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" style="display: flex; justify-content: start; padding-top: 8px;">Student List</h4>

                <div style="display: flex; justify-content: flex-end;"><button type="button" class="btn btn-success"><a style="color: white;" href="student_entry.php">New Student</a></button></div>
                
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                    <!-- <th colspan="2">action</th> -->
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $sql = "SELECT * FROM students";
                    $rawdata = $db->query($sql);
                    
                    ?>
                  <tr>
                    <?php while($row = $rawdata->fetch_object()): ?>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->student_name; ?></td>
                    <td><?php echo $row->dob; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->contact; ?></td>
                    <td class="text-center"><a href="data_edit.php?id=<?php echo $row->id; ?>"><i class="fas fa-edit"></i></a> | <a onclick="return confirm('Are you sure?')" href="data_delete.php?id=<?php echo $row->id; ?>"><i class="fas fa-trash"></i></a></td>
                  </tr>
                  <?php endwhile; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include ("../inc/footer.php") ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $admin_url; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $admin_url; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo $admin_url; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo $admin_url; ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $admin_url; ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $admin_url; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $admin_url; ?>dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

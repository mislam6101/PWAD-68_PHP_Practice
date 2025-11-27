<?php include_once("../inc/db_config.php");

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
  <title>AdminLTE 3 | Validation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include ("../inc/navber.php") ?>

  <?php include ("../inc/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Entry</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Entry</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <?php 
                if(isset($_REQUEST["click"])){
                  extract($_REQUEST);
                  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo '<div class="alert alert-danger">Please Enter a valid Email.</div>';
                  }
                  else{
                    if(isset($_FILES['photo'])){
                      $photo_name = $_FILES['photo']['name'];
                      $tmp_name = $_FILES['photo']['tmp_name'];
                      $upload_path = "Student/upload";
                      $full_path = $upload_path.$photo_name;
                      move_uploaded_file($tmp_name, "upload/" . $photo_name);
                    }

                    $sql = "INSERT INTO students VALUES (NULL, '$name', '$full_path', '$dob', '$email', '$cont')";
                    $db->query($sql);

                    if($db->affected_rows){
                      echo '<div class = "alert alert-success">Successfully Inserted</div>';
                    }
                  }
                }
              
              
                ?>
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" style="display: flex; justify-content: start; padding-top: 8px;">Add new student</small></h3>
                <div style="display: flex; justify-content: flex-end;"><button type="button" class="btn btn-light"><a style="color: #007bff;" href="student_list.php">Student List</a></button></div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Student Name : </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">DOB : </label>
                    <input type="date" name="dob" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email : </label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="name@email.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contact : </label>
                    <input type="text" name="cont" class="form-control" id="exampleInputPassword1" placeholder="Enter your contact">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Photo : </label>
                    <input type="file" name="photo" class="form-control" id="exampleInputPassword1">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="click">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<!-- <script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script> -->
</body>
</html>

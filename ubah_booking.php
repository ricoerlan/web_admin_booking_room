<?php
session_start();
include "conf/config.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php
   include ("pages/sidebar.html")
  ?>

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Data Booking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ubah Data Booking</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	<div class="container card">
		<h2 class="card-header">Form Ubah Data Booking</h2>
		
		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id = $_GET['id'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($con, "SELECT * FROM bookings WHERE idbooking='$id'") or die(mysqli_error($con));
			
			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
		
		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$nimBooking			= $_POST['nimBooking'];
			$namaPembooking	= $_POST['namaPembooking'];
      $namaRuangBooking		= $_POST['namaRuangBooking'];
      $tanggal		= $_POST['tanggal'];
      $jamMulai		= $_POST['jamMulai'];
      $jamSelesai		= $_POST['jamSelesai'];
      $keterangan		= $_POST['keterangan'];
      $statusBooking		= $_POST['statusBooking'];
			
			$sql = mysqli_query($con, "UPDATE bookings SET nimBooking='$nimBooking',
       namaPembooking='$namaPembooking', namaRuangBooking='$namaRuangBooking', tanggal='$tanggal',
       jamMulai='$jamMulai', jamSelesai='$jamSelesai', keterangan='$keterangan', statusBooking='$statusBooking'
        WHERE idBooking='$id'") or die(mysqli_error($con));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="data_booking_room";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
		
		<form class="card-header" action="" method="post">
			<div class="form-group row ">
				<label class="col-sm-2 col-form-label card-header">NIM Booking</label>
				<div class="col-sm-10">
					<input type="text" name="nimBooking" class="form-control" size="4" value="<?php echo $data['nimBooking']; ?>" readonly required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label card-header">Nama Pembooking</label>
				<div class="col-sm-10">
					<input type="text" name="namaPembooking" class="form-control" value="<?php echo $data['namaPembooking']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label card-header">Ruang Booking</label>
				<div class="col-sm-10">
					<select name="namaRuangBooking" class="form-control" required>
						<option value="">PILIH namaRuangBooking</option>
						<option value="5.5.3" <?php if($data['namaRuangBooking'] == '5.5.3'){ echo 'selected'; } ?>>5.5.3</option>
						<option value="5.5.4" <?php if($data['namaRuangBooking'] == '5.5.4'){ echo 'selected'; } ?>>5.5.4</option>
						<option value="5.5.5" <?php if($data['namaRuangBooking'] == '5.5.5'){ echo 'selected'; } ?>>5.5.5</option>
					</select>
				</div>
			</div>
      <div class="form-group row">
				<label class="col-sm-2 col-form-label card-header">Tanggal</label>
				<div class="col-sm-10">
					<input type="text" name="tanggal" class="form-control" size="4" value="<?php echo $data['tanggal']; ?>" required>
				</div>
			</div>
      <div class="form-group row">
				<label class="col-sm-2 col-form-label card-header">Jam Mulai</label>
				<div class="col-sm-10">
					<input type="text" name="jamMulai" class="form-control" size="4" value="<?php echo $data['jamMulai']; ?>" required>
				</div>
			</div>
      <div class="form-group row">
				<label class="col-sm-2 col-form-label card-header">Jam Selesai</label>
				<div class="col-sm-10">
					<input type="text" name="jamSelesai" class="form-control" size="4" value="<?php echo $data['jamSelesai']; ?>" required>
				</div>
			</div>
      <div class="form-group row">
				<label class="col-sm-2 col-form-label card-header">Keterangan</label>
				<div class="col-sm-10">
					<input type="text" name="keterangan" class="form-control" size="4" value="<?php echo $data['keterangan']; ?>" required>
				</div>
			</div>
      <div class="form-group row">
				<label class="col-sm-2 col-form-label card-header">Status Booking</label>
				<div class="col-sm-10">
					<input type="text" name="statusBooking" class="form-control" size="4" value="<?php echo $data['statusBooking']; ?>" required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label card-header">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="data_booking_room" class="btn btn-warning">KEMBALI</a>
				</div>
			</div>
		</form>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

<!-- /.content-wrapper -->


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

</body>
</html>

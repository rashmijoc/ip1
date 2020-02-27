<?php
session_start();
error_reporting(0);
include('\ip1\ajax\manage-users-ajax.php');
if(strlen($_SESSION['alogin'])==0)

 ?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Jamavar IndianKitchen</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


  <!-- Favicons -->
  <link href="img/favicon.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>
	<style>
body {
  background-color: black;
    background-image: url("paper.gif");
}
#content-wrapper {

  background: url(bg2.jpg);
  background-repeat: no-repeat;
  background-size: auto;
}
</style>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>

	<div class="ts-main-content">
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Users</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Users</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
											<th>Full Name</th>
											<th>Email ID Name</th>

										<th>Password</th>
											<th>Role</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>

										<!-- Retrieve data from the database named barbershop -->

									<?php $sql = "SELECT * from  user join role on user.role_id=role_id  ";
										$query = $dbh -> prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $result)
										{				?>
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->Fullname);?></td>
											<td><?php echo htmlentities($result->Email);?></td>
											<td><?php echo htmlentities($result->Password);?></td>
											<td><?php echo htmlentities($result->Role);?></td>
											<td><a href="edit-hairstylist.php?id=<?php echo $result->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
<a href="manage-hairstylists.php?del=<?php echo $result->id;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>

									</tbody>
								</table>



							</div>
						</div>



					</div>
		 	</div>

			</div>



					</div>

					</div>
				<div class="ts-main-content">
 <div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Create Users</h2>

						<div class="row">

    </div>
								<div class="panel panel-default">

									<div class="panel-body">
										<form align="left" method="post" name="createsubmit" id="createsubmit" class="form-horizontal" onSubmit="retur click();">


  	        	  <?php if($error1){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error1); ?> </div><?php }
				else if($msg1){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg1); ?> </div><?php }?>
											<div class="form-group" >
												<label class="control-label col-sm-2">First Name</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="fname" id="fname" >
												    <div id="firstname_warning_message" class="alert alert-warning mt-1 d-none" style="display: none"></div>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2">Last Name</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="lname" id="lname" required>
												</div>
											</div>
										 	<div class="form-group">
												<label class="control-label col-sm-2">Date of Join</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="doj" id="doj" required>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2">Designation</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" name="designation" id="designation" required>
												</div>
											</div>


											<div class="hr-dashed"></div>

											<div class="form-group">
												<div class="col-sm-6 col-sm-offset-4">

													<button class="btn btn-primary" name="submit" type="submit">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>

						</div>



				</div>


		</div>
	</div>
</div>
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
		<script src="js/my.js"></script>
</body>
</html>

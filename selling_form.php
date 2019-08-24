<?php
 include 'functions.php';
 include 'admin/db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>kharid bikri</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"></a>kharid bikri
			</div>


		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Selling Form</div>
					<div class="panel-body">
				<form method="post" action="" enctype="multipart/form-data" >
					<div class="row">
					
					<div class="col-md-8" style="padding-right: 10px;">
							<label for="p_name">Product Name</label>
							<input type="text" id="p_name" name="p_name" class="form-control">
						
					</div>

						<div class="col-md-8">
							<label for="p_cat">Product Category</label>
							<select  id="p_cat" name="p_cat" class="form-control">
								    <?php
										
										cat_list();
 										?>
							</select>
						</div>

						<div class="col-md-8">
							<label for="p_cat">Brand</label>
							<select  id="p_brand" name="p_brand" class="form-control">
								<!-- <option >565</option -->
								  <?php
										brand_list();
 										?>							
							</select>
						</div>
					<div class="col-md-8">
							<label for="p_name">Price</label>
							<input type="text" id="p_price" name="p_price" class="form-control">
						
					</div>

						<div class="col-md-8">
							<label for="mobile"> Product Image</label>
							<input type="file" id="p_image" name="p_image" class="form-control">
							
						
					</div>

						<div class="col-md-8" >
							<label for="bought_from"> Description</label>
							<input type="textarea" id="bought_from" name="p_desc" class="form-control">
						</div>

						<div class="col-md-8"style="margin-top: 20px;">
							<input type="submit" class="btn btn-primary" value="Submit" name="Submit" id="submit">
	<input type="submit" class="btn btn-primary" value="Cancel" name="cancel" id="reset">
</div>
					</form>

				
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

<?php 
					if(isset($_POST['Submit'])){
						$p_name=$_POST['p_name'];
						$p_brand=$_POST['p_brand'];
						$p_cat=$_POST['p_cat'];
						// $p_image=$_POST['p_image'];
						$p_price=$_POST['p_price'];
						$p_desc = $_POST['p_desc'];
						$p_image = $_FILES["p_image"]["name"];
						// echo $p_image.'<br>';
						$upload_dir = "assets/prod_images/".basename($p_image);
						echo $upload_dir;
					
						// get id form title
						$p_cat_id= getcatid($p_cat);
						$p_brand_id= getbrandid($p_brand);

						  if(move_uploaded_file( $_FILES["p_image"]["tmp_name"],$upload_dir)){
						  						
						  						
						  						$sql="INSERT INTO `products` (`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`) VALUES ( '$p_cat_id', '$p_brand_id', '$p_name', '$p_price', '$p_desc', '$p_image');";
						  						if($result=mysqli_query($con,$sql)){
						  							echo "<script>alert('record added');</script>";
						  						}else{
						  							$error_msg =$mysqli_error($con);
						  							echo "<script>alert('$error_msg');</script>";
						  						}
						  						}
						  						else{
						  							$error = $_FILES["p_image"]["error"];
						  							echo "<script>alert('$error');</script>";
						  						}


						// echo "<script>alert('submit button clicked');</script>";
						

					}
						if(isset($_POST['cancel'])){
						// $sub=$_POST[''];
						echo "<script>alert('cancel button clicked');</script>";

					}

					?>
					




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>

</body>
<div class="foot"><footer>
</footer></div>
<style> .foot{text-align: center;}
</style>
</html>

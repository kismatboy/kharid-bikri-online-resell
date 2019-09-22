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
				<form method="post" action=""  enctype="multipart/form-data">
					<div class="row">
					
					<div class="col-md-8" style="padding-right: 10px;">
							<label for="p_name">Product Name</label>
							<input type="text" id="p_name" name="p_name" class="form-control">
						
					</div>

						<div class="col-md-8">
							<label for="p_cat">Product Category</label>
							<select  id="p_cat" name="p_cat" class="form-control">
								<option>Electronics</option>
								<option>Ladies Wear</option>
								<option>Men's Wear</option>
								<option>Kids Wear</option>
								<option>Home Appliances</option>
								<option>Sports</option>
							</select>
						</div>

						<div class="col-md-8">
							<label for="p_cat">Brand</label>
							<select  id="p_brand" name="p_brand" class="form-control">
								<option>HP</option>
								<option>Samsung</option>
								<option>Apple</option>
								<option>Sony</option>
								<option>Biba</option>
								<option>Flying Machine</option>
								<option>Nike</option>
								<option>Adidas</option>
								<option>Kidzee</option>
								<option>Ikea</option>
								<option>Philips</option>
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

						<div class="col-md-8">
							<label for="bought_from"> Description</label>
							<input type="textarea" id="bought_from" name="bought_from" class="form-control">
						</div>
						<br />

				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="row">
                    <div class="col-md-4">
						
					</div>
				</div>
					</form>
					
				
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>






	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<input type="button" class="btn btn-primary" value="Submit" name="Submit" id="submit">
	<input type="button" class="btn btn-primary" value="Cancel" name="reset" id="reset">
</body>
<div class="foot"><footer>
</footer></div>
<style> .foot{text-align: center;}
</style>
</html>

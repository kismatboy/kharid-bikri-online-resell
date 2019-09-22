<?php 
function cat_list(){
	require 'admin/db.php';
  	$sql="SELECT * FROM categories;";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo '<option >no categories</option >';
		}
		foreach ($result as $categories) {
			echo '<option >'.$categories['cat_title'].'</option >';
		}
	}
	else{
		echo mysqli_error($con);
	}
	// mysqli_close($con);
}



function brand_list(){
 // echo' <option> hello</option>';
require 'admin/db.php';
  	$sql="SELECT * FROM brands;";
	if ($result=mysqli_query($con,$sql))
	{
		$rowcount=mysqli_num_rows($result);
		if ($rowcount==0) {
			echo '<option >no categories</option >';
		}
		
		foreach ($result as $categories) {
			echo '<option >'.$categories['brand_title'].'</option >';
		}
	}
	else{
		echo mysqli_error($con);
	
	}
	mysqli_close($con);
}

function getcatid($cat_name){
require 'admin/db.php';
  	$sql="SELECT * FROM categories where cat_title='$cat_name';";
	if ($result=mysqli_query($con,$sql))
	{
		foreach ($result as $categoriesid) {
			return $categoriesid['cat_id'];
		}
	}
	else{
		echo mysqli_error($con);
	}
	mysqli_close($con);
	
}

function getbrandid($b_name){
require 'admin/db.php';
  	$sql="SELECT * FROM brands where brand_title='$b_name';";
	if ($result=mysqli_query($con,$sql))
	{
		foreach ($result as $categoriesid) {
			return $categoriesid['brand_id'];
		}
	}
	else{
		echo mysqli_error($con);
	}
	mysqli_close($con);
	
}

function getU_name($uid){
require 'admin/db.php';
  	$sql="SELECT * FROM user_info where user_id='$uid';";
	if ($result=mysqli_query($con,$sql))
	{
		foreach ($result as $uid) {
			return $uid['email'];
		}
	}
	else{
		echo mysqli_error($con);
	}
	mysqli_close($con);
	
}
function getp_name($pid){
require 'admin/db.php';
  	$sql="SELECT * FROM products where product_id='$pid';";
	if ($result=mysqli_query($con,$sql))
	{
		foreach ($result as $uid) {
			return $uid['product_title'];
		}
	}
	else{
		echo mysqli_error($con);
	}
	mysqli_close($con);
	
}
function getp_image($pid){
require 'admin/db.php';
  	$sql="SELECT * FROM products where product_id='$pid';";
	if ($result=mysqli_query($con,$sql))
	{
		foreach ($result as $uid) {
			return $uid['product_image'];
		}
	}
	else{
		echo mysqli_error($con);
	}
	mysqli_close($con);
	
}
function getseller_email($pid){
require 'admin/db.php';
  	$sql="SELECT * FROM products where product_id='$pid';";
	if ($result=mysqli_query($con,$sql))
	{
		foreach ($result as $uid) {
			 $id=$uid['user_id'];
			$sql1="SELECT * FROM user_info where user_id='$id';";
			if ($result1=mysqli_query($con,$sql1))
	{
		foreach ($result1 as $email) {
			return $email['email'];
		}
	}
	else{
		echo mysqli_error($con);
	}
	mysqli_close($con);
	
}}}
?>
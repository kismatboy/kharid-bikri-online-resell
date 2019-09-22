<?php
	
	require 'functions.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>send mail to the seller</title>
 </head>
 <body>
      <?php
       $uid= $_GET['uid'];
      $pid = $_GET['pid'];
      $u_name =getU_name($uid);
      $p_name=getp_name($pid);
      $p_image= getp_image($pid);
      $seller_email= getseller_email($pid);

    
    
      echo  '<center><img src="assets/prod_images/'.$p_image.'" style="width:200px; height:250px;"><br> <br>';
        echo 'Product Name:- '.$p_name.'<br>';
          echo 'Your email address:- '.$u_name.'<br>';
      ?>
      <form method="POST" action="sendmail.php">
      	<input type="hidden" name="p_name" value="<?php echo $p_name?>">
      	<input type="hidden" name="u_name" value="<?php echo $u_name?>">
      	<input type="hidden" name="seller_email" value="<?php echo $seller_email?>">
      	<textarea name="desc" placeholder="Ask any thing you wanna know more."></textarea>
      	<input type="submit" name="s" value="send">
      </form>

 </body>
 </html>
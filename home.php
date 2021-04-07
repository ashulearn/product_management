<?php
SESSION_START();
include 'config.php';
ob_start();
$position=$_GET['position'];
$uname= $_GET['uname'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
	    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styles/styles.css">
        <script src="bootstrap.min.js"></script>
	    <script src="jquery.min.js"></script>
		<script>
		  function addproduct(){
			  alert ("Sorry for Your Request,You are not Authorized..!" );
		
		  }
		</script>
		 <script type="text/javascript">
  window.history.forward();
	function noback()
	{
		window.history.forward();
	}
  
  </script>
	 </head>
	<body>
	<div class="col-sm-12 col-md-12 col-lg-12 logo_bg" >
	       <img src="images/rci_randqa.png" />
		   </div>
	   <div class="container-fluid" >
	  
	       <div class="col-sm-12 col-md-12 col-lg-12 subbanner" >
		   <div class="col-sm-2 col-md-2 col-lg-2 " style="margin:0px;padding:0px;"></div>
		   <div class="col-sm-8 col-md-8 col-lg-8">
               <h1 align='center'>PRODUCT QUALITY RANKING</h1>
			    
           </div> 
		     <div class="col-sm-2 col-md-2 col-lg-2">
			 <h1 align='center'><a href="logout.php"><img src="images/logout.png" title="logout" style="width:30px;height:30px;"></a></h1>
			 </div>
		   </div>  
		   <div class="col-sm-12 col-md-12 col-lg-12 " style="padding:10px;"> 
		   <marquee  name="welcome" id="welcome" >Welcome to Product Quality Ranking</marquee>
		   <!--<div class="col-sm-1 col-md-1 col-lg-1"></div>
		   <div class="col-sm-10 col-md-10 col-lg-10">
	            
		   </div>
		   <div class="col-sm-1 col-md-1 col-lg-1"></div>-->
		   </div>
	       <div class="col-sm-12 col-md-12 col-lg-12" style="padding:10px;">  
				<div  class="button12" style="float: left;padding: 10px;">
				<?php
				if($_GET['position']=='0'){
				?>
	             <a href="addproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"> <button class="btn btn-success" name="addproduct" id="addproduct" >Add Product for<br/> Quality Ranking</button> </a>
				<!--<button class="btn btn-success" name="addproduct" id="addproduct" onclick="addproduct();">Add Product for<br/> Quality Ranking</button>
				-->
              <?php
				} else if($_GET['position']=='1'){
				?>
                 <button class="btn btn-success" name="addproduct" id="addproduct" onclick="addproduct();">Add Product for<br/> Quality Ranking</button>
				<?php }	?>
				</div>
		   
				<div  class="button12"  style="float: left;padding: 10px;">
				<?php
				if($_GET['position']=='0'){
				?>
				 <a href="markingproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"> <button class="btn btn-success" name="markingproduct" id="markingproduct">Marking of Product for<br/> Product Quality Ranking</button> </a>
				  <?php
				} else if($_GET['position']=='1'){
				?>
                 <button class="btn btn-success" name="markingproduct" id="markingproduct" onclick="addproduct();">Marking of Product for<br/> Product Quality Ranking</button> 
				<?php }	?>

				</div>
		  
				<div  class="button12"  style="float: left;padding: 10px;">
				 <a href="viewproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"> <button class="btn btn-success" name="viewproduct" id="viewproduct">View Product <br/>Quality Ranking</button> </a>
				</div>
	        </div>
	
	
	
	
	
	
	
	
	
	
	  </div>
	</body>
</html>
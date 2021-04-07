<?php
SESSION_START();
include 'config.php';
ob_start();
$uname=$_GET['uname'];
$position=$_GET['position'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Product</title>
		<meta charset="utf-8">
	    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="bootstrap.min.css">
			<link rel="stylesheet" href="styles/styles.css">
        <script src="bootstrap.min.js"></script>
	    <script src="jquery.min.js"></script>
		<script>
		function buttonclick(){
			var btnsno=document.getElementById('release').value;
			<?php
			if(isset($_POST['release'])){
			$value=$_POST['release'];
			$upd="UPDATE `product_add` SET `status`='1' WHERE `sno`='".$value."'";
			$upd_qry=mysqli_query($con,$upd);
			}
			?>
			
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
	   <div class="container-fluid" style="border:1px solid green;">
	    <!--   <div class="col-sm-12 col-md-12 col-lg-12"> 
				<h1 align='center'>PRODUCT QUALITY RANKING</h1>
		   </div>  -->
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
		  <marquee  name="welcome" id="welcome" >Please Add a Product for Product Quality Ranking</marquee>
		   
		   </div>
	      
		  
	       <div class="col-sm-12 col-md-12 col-lg-12" style="padding:10px;">    
	          <div class="col-sm-3 col-md-3 col-lg-3">
			  <center><a href="home.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"><button type="button" class="btn btn-success" name="home" id="home">Back To Home</button></a></center>
			  </div> 
			  <div class="col-sm-6 col-md-6 col-lg-6 maincontenta">
			    <form action="addproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>" method="POST" name="addproductform">
				 <div class="form-group">
				  <label  class="control-label col-sm-12 col-md-4 col-lg-4">Directorate : </label>
				  <div class=" col-sm-12 col-md-8 col-lg-8">
				   <input type="text" class="form-control" name="directorate" id="directorate" required />
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Project : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <input type="text" class="form-control" name="project" id="project" required />
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Product Name : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <input type="text" class="form-control" name="product_name" id="product_name" required />
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Product Part No. : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <input type="text" class="form-control" name="product_partno" id="product_partno" required />
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Product SL No. : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <input type="text" class="form-control" name="product_sno" id="product_sno" required />
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Work Center : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <input type="text" class="form-control" name="workcenter" id="workcenter" required />
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Division : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <input type="text" class="form-control" name="division" id="division" required />
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Nodal Officer : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <input type="text" class="form-control" name="nodal_officer" id="nodal_officer" required />
				  </div> 
				 </div>
				 <div class="col-sm-12 col-md-12 col-lg-12" style="padding:20px;">
					<center><input type="submit" class="btn btn-danger" name="submit" value="submit" id="submit"><center>
				 </div>
			    </form>
			  </div>
			  <div class="col-sm-3 col-md-3 col-lg-3"></div> 
		   </div>	  
		  
	
	       <div class="col-sm-12 col-md-12 col-lg-12" style="padding:0px 20px;"> 
		   
			<!-- <button class="btn btn-success" name="productlist" id="productlist">List of Products Available for Marking</button>-->
			 <h2 name="productlist" id="productlist" >List of Products Available for Marking</h2>
	
	        </div>
			  <div class="col-sm-12 col-md-12 col-lg-12 " style="padding:20px;">
			  <form action="addproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>" method="POST" name="addbtn">
			<div class="table-responsive">
	         <table class="table table-hover" border='1' >
					 <tr style="background: #c508ff;color: #fff;" >
						  <th>S No</th> 
						  <th>Directorate</th>
						  <th>project</th> 
						  <th>Product Name </th> 
						  <th>Product Part No.</th> 
						  <th>Product SL No.</th>
						  <th>PQR Status</th>
						  <th>Delete</th>
					  </tr>
					  <?php
					  $exe="SELECT * FROM `product_add` order by inserted_date desc";
					  $apply=mysqli_query($con,$exe);
					  $sno=1;
					  while($re=mysqli_fetch_array($apply)){
					  ?>
					  <tr>
						  <td><?php echo $sno++; ?></td>
						  <td><?php echo $re['directorate']; ?></td>
						  <td><?php echo $re['project']; ?></td>
						  <td><?php echo $re['product_name']; ?></td>
						  <td><?php echo $re['product_partno']; ?></td>
						  <td><?php echo $re['product_sno']; ?></td>
						  <td><?php $status = $re['status']; 
					  if( $status == '1'){
						  ?>
						    <button  class='btn btn-danger' name='rdmark' id='rdmark'>Released for Marking</button>
						  <!--  <input type="text" name="released" id="released" value="<?php echo $re['sno']?>">-->
						  <?php
					  }
						else if( $status == '0'){
						  ?>
						  <button type='submit' class='btn btn-success' name='rmark' id='rmark' onclick="buttonclick()">Release for Marking</button>
						  <input type="hidden" name="release" id="release" value="<?php echo $re['sno']?>">
						  <?php } ?>
						  
						  </td>
						  <td>
						  <a href="deleteproduct.php?sno=<?php echo $re['sno']?>&position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>" name="del" ><img src="images/delete1.png" name="delete" id="delete"></a>
						  </td>
					   </tr>
					   <?php
					  }
					   ?>
				 </table>
	       </div> </form>  </div>
     
	
	 </div>
	</body>
</html>
<?php
if(isset($_POST['submit'])){
	date_default_timezone_set('Asia/Kolkata');
	$date=date('Y-m-d');
	$time=date('H:i:s');
	$add_uname=$_GET['uname'];
	$directorate=$_POST['directorate'];
	$project=$_POST['project'];
	$product_name=$_POST['product_name'];
	$prod_partno=$_POST['product_partno'];
	$product_slno=$_POST['product_sno'];
	$workcenter=$_POST['workcenter'];
	$division=$_POST['division'];
	$nodaloffice=$_POST['nodal_officer'];
	$quary="INSERT INTO `product_add`(`directorate`, `division`, `project`, `product_name`, `product_partno`, `product_sno`, `workcenter`, `nodal_office`, `status`, `add_uname`, `inserted_date`, `inserted_time`) VALUES
	('".$directorate."','".$division."','".$project."','".$product_name."','".$prod_partno."','".$product_slno."','".$workcenter."','".$nodaloffice."','0','".$add_uname."','".$date."','".$time."')";
	$sql_exe=mysqli_query($con,$quary);
	if($sql_exe){
		header("Location:addproduct.php?position=".$_GET['position']."&uname=".$_GET['uname']);
		
	}else{
		echo "<script>
		         alert('Your Request Failed,Try Again..!');
		</script>";
		}
}


//<!--------------Delete Code------------------>



?>
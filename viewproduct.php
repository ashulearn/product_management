<?php
SESSION_START();
include 'config.php';
ob_start();
$position=$_GET['position'];

$uname=$_GET['uname'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>View Products</title>
		<meta charset="utf-8">
	    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styles/styles.css">
        <script src="bootstrap.min.js"></script>
	    <script src="jquery.min.js"></script>
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
	       
	      <!--<div class="col-sm-12 col-md-12 col-lg-12"> 
				<h1 align='center'>PRODUCT QUALITY RANKING</h1>
		    
		   </div> -->
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
		   <marquee  name="welcome" id="welcome" >View Product Quality Ranking of Product</marquee>
		   
		   </div>
		 
	       <div class="col-sm-12 col-md-12 col-lg-12" style="padding:10px;">    
	          <div class="col-sm-3 col-md-3 col-lg-3">
			  <center><a href="home.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"><button type="button" class="btn btn-success" name="home" id="home">Back To Home</button></a></center>
			  </div> 
			  <div class="col-sm-6 col-md-6 col-lg-6 maincontenta">
			    <form action="viewproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>" method="POST" name="addproductform">
				 
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">project : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <select class="form-control" name="project" id="project" required>
					   <option value=''>Select Project</option>
					   <?php
					   $prj=mysqli_query($con,"SELECT distinct project FROM `product_add`");
					   while($row=mysqli_fetch_array($prj)){
						?>   
					   <option value='<?php echo $row["project"];?>'><?php echo $row['project'];?></option>
						   
						<?php   
					   }
					   ?>
				   </select>
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Product Name : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <select  class="form-control" name="product_name" id="product_name" required >
				      <option value=''>Select Product Name</option>
					    <?php
					   $prj=mysqli_query($con,"SELECT distinct product_name FROM `product_add`");
					   while($row=mysqli_fetch_array($prj)){
						?>   
					   <option value='<?php echo $row["product_name"];?>'><?php echo $row['product_name'];?></option>
						   
						<?php   
					   }
					   ?>
				   </select>
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Product SL No. : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <select  class="form-control" name="product_sno" id="product_sno" required >
				      <option value=''>Select Product SL NO.</option>
					     <?php
					   $prj=mysqli_query($con,"SELECT distinct product_sno FROM `product_add`");
					   while($row=mysqli_fetch_array($prj)){
						?>   
					   <option value='<?php echo $row["product_sno"];?>'><?php echo $row['product_sno'];?></option>
						   
						<?php   
					   }
					   ?>
				   </select>
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Directorate : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <select class="form-control" name="directorate" id="directorate" required >
				      <option value=''>Select Directorate</option>
					     <?php
					   $prj=mysqli_query($con,"SELECT distinct directorate FROM `product_add`");
					   while($row=mysqli_fetch_array($prj)){
						?>   
					   <option value='<?php echo $row["directorate"];?>'><?php echo $row['directorate'];?></option>
						   
						<?php   
					   }
					   ?>
				   </select>
				  </div> 
				 </div>
				 <div class="form-group">
				  <label  class="control-label  col-sm-12 col-md-4 col-lg-4">Product Part No. : </label>
				  <div class="col-sm-12 col-md-8 col-lg-8">
				   <select class="form-control" name="product_partno" id="product_partno" required >
				      <option value=''>Select Product Part No.</option>
					     <?php
					   $prj=mysqli_query($con,"SELECT distinct product_partno FROM `product_add`");
					   while($row=mysqli_fetch_array($prj)){
						?>   
					   <option value='<?php echo $row["product_partno"];?>'><?php echo $row['product_partno'];?></option>
						   
						<?php   
					   }
					   ?>
				   </select>
				  </div> 
				 </div>
				 <div class="col-sm-12 col-md-12 col-lg-12" style="padding:20px;">
					<center><input type="submit" class="btn btn-danger" name="submit" value="Product Details" id="submit"></center>
				 </div>
			    </form>
			  </div>
			  <div class="col-sm-3 col-md-3 col-lg-3"></div> 
		   </div>	  
		  
	
	       <div class="col-sm-12 col-md-12 col-lg-12" style="padding:20px;"> 
		   
			<!-- <button class="btn btn-success" name="productlist" id="productlist">List of Products Available for Marking</button>-->
	
	        </div>
			
			
			
			
<?php
     if(isset($_POST['submit'])){
		 
		 $proj=$_POST['project'];
		 $prod_name=$_POST['product_name'];
		 $prod_sno=$_POST['product_sno'];
		 $prod_dir=$_POST['directorate'];
		 $prod_partno=$_POST['product_partno'];
		 
     	$query=mysqli_query($con,"SELECT * FROM `product_add` WHERE project='".$proj."' and product_name='".$prod_name."' and product_partno='".$prod_partno."' and product_sno='".$prod_sno."' and directorate='".$prod_dir."' ");
		//echo "SELECT * FROM `product_add` WHERE project='".$proj."' and product_name='".$prod_name."' and product_partno='".$prod_partno."' and product_sno='".$prod_sno."' and directorate='".$prod_dir."' ";
			
	?>		
			  <div class="col-sm-12 col-md-12 col-lg-12 " style="padding:20px;">
			  
					<div class="table-responsive">
					 <table class="table table-hover" border='1'>
							 <tr  style="background: #c508ff;color: #fff;" >
								  <th>S No</th> 
								  <th>Product Name </th> 
								  <th>Product SL No.</th> 
								  <th>Product Part No.</th> 
								  <th>Division</th>
								  <th>Work Center </th>
								  <th>Nodal Officer</th>
							  </tr>
				<?php 
				       $sno=1;
					   while($roe=mysqli_fetch_array($query)){
				?>			  
							  <tr>
								  <td><?php echo $sno++; ?></td>
								  <td><?php echo $roe['product_name']; ?></td>
								  <td><?php echo $roe['product_sno']; ?></td>
								  <td><?php echo $roe['product_partno']; ?></td>
								  <td><?php echo $roe['division']; ?></td>
								  <td><?php echo $roe['workcenter']; ?></td>
								  <td><?php echo $roe['nodal_office']; ?></td>
								 </tr>
								  
							 	<tr style="border:2px solid #ffeaf4;">			
								 <!--  <td colspan='4'><a href="basequality.php?sno=<?php echo $roe['sno'];?>"><button class="btn btn-primary" style="width:150px;" name="bqr" id="bqr">Start/Modify BQR</button></a></td>
								  <td colspan='4'><a href="unitquality.php?sno=<?php echo $roe['sno'];?>&position=<?php echo $_GET['position'];?>"><button class="btn btn-primary" style="width:150px;" name="uqr" id="uqr">Start/Modify UQR</button></a></td>
							  	--> <td colspan='4'><a href="bqr_status.php?sno=<?php echo $roe['sno'];?>&position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"><button class="btn btn-primary" style="width:150px;" name="bqr" id="bqr">View BQR</button></a></td>
								  <td colspan='4'><a href="uqr_status.php?sno=<?php echo $roe['sno'];?>&position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"><button class="btn btn-primary" style="width:150px;" name="uqr" id="uqr">View UQR</button></a></td>
							  		
                                 </tr>		  
					   <?php  } ?>	   
						 </table>
				   </div>  
             
		   </div>	  
		   <div class="col-sm-12 col-md-12 col-lg-12 " style="padding:20px;">
		    <div class="col-sm-2 col-md-2 col-lg-2 "></div>
		    <div class="col-sm-8 col-md-8 col-lg-8 ">
			
			</div>
			 <div class="col-sm-2 col-md-2 col-lg-2 "></div>
     </div>
	 <?php } ?>
	
	
	
	
	
	
	  </div>
	</body>
</html>
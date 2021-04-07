<?php
session_start();
include "config.php";
$id=$_GET['sno'];
$position=$_GET['position'];
$uname=$_GET['uname'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>UQR Status</title>
		<meta charset="utf-8">
	    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="bootstrap.min.css">
			<link rel="stylesheet" href="styles/styles.css">
       <!--  <script src="bootstrap.min.js"></script>-->
	    <script src="jquery.min.js"></script>
		<style>
		
		</style>
			  
<script>
	$(document).ready(function(){

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".txt").each(function() {

			$(this).change(function(){
				calculateSum();
			});
		});

	});

	function calculateSum() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$(".txt").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		//$("#sum").html(sum.toFixed(2));
		$("#sum").val(sum);

	}
</script>	  
	  
	  
	 </head>
	<body>
		<div class="col-sm-12 col-md-12 col-lg-12 logo_bg" >
	       <img src="images/rci_randqa.png" />
		   </div>
	   <div class="container-fluid" style="border:1px solid green;">
	       
	       <div class="col-sm-12 col-md-12 col-lg-12">
		     
               <h1 align='center'>UNIT QUALITY RATING (UQR)</h1>
           
		   </div>  
		   
	       <div class="col-sm-12 col-md-12 col-lg-12" style="padding:10px;">    
	        <div class="col-sm-2 col-md-2 col-lg-2">
			<center><a href="viewproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"><button type="button" class="btn btn-success" name="home" id="home">Back To View Product</button></a></center>
			</div> 
			<div class="col-sm-8 col-md-8 col-lg-8">
			<form action="uqr_status.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>" method="POST">
		   
			 <table class="table table-hover">
			  <tr  style="background: #c508ff;color: #fff;">
			  <th>Activity Name</th>
			  <th>Marks Obtained</th>
			  <th>Remarks</th>
			  </tr>
			  <?php 
			  $query=mysqli_query($con,"SELECT * FROM `uqr_status` WHERE product_id='".$id."' ");
		      $row=mysqli_fetch_array($query);
			  ?>
			  
			   <tr>
			 <td>Populated PCB Class 3 Wired</td>
			
			 <td>
			  <input type="text" class="form-control" name="obtained1" id="obtained1" value="<?php echo $row['pcbwired_marks_td'];?>" readonly required />
			 </td>
			 <td> <input type="text" class="form-control" name="remarks1" id="remarks1" required /></td>
			
			</tr>
			
			
			<tr>
			 <td>Populated PCB class 3 Inspection Clearance</td>
		
			 <td> <input type="text" class="form-control" name="obtained2" id="obtained2" value="<?php echo $row['pcb_inspection_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks2" id="remarks2"  required /></td>
		
			</tr>
			 <tr>
			 <td>Mech Dimensional QC</td>
			
			 <td> <input type="text" class="form-control" name="obtained3" id="obtained3" value="<?php echo $row['mechdimen_marks_td'];?>" readonly  required /></td>
			 <td> <input type="text" class="form-control" name="remarks3" id="remarks3"  required /></td>
			 
			</tr>
			 <tr>
			 <td>Burn IN</td>
		
			 <td> <input type="text" class="form-control" name="obtained4" id="obtained4" value="<?php echo $row['burnin_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks4" id="remarks4"  required /></td>
	
			</tr>
			  <tr>
			 <td>Integration QC</td>
		
			 <td> <input type="text" class="form-control" name="obtained5" id="obtained5" value="<?php echo $row['integration_qc_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks5" id="remarks5"  required /></td>
			
			</tr>
			  <tr>
			 <td>Initial Functional Test Cleared</td>
			
			 <td> <input type="text" class="form-control" name="obtained6" id="obtained6" value="<?php echo $row['initial_func_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks6" id="remarks6"  required /></td>
			
			</tr>
			  <tr>
			 <td>ESS</td>
			
			 <td> <input type="text" class="form-control" name="obtained7" id="obtained7" value="<?php echo $row['ess_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks7" id="remarks7"  required /></td>
			
			</tr>
			  <tr>
			 <td>ENTEST Cleared</td>
			 
			 <td> <input type="text" class="form-control" name="obtained8" id="obtained8" value="<?php echo $row['entest_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks8" id="remarks8"  required /></td>
			
			</tr>
			  <tr>
			 <td>Final Functional Test</td>
			
			 <td> <input type="text" class="form-control" name="obtained9" id="obtained9" value="<?php echo $row['final_func_marks_td'];?>" readonly required  /></td>
			 <td> <input type="text" class="form-control" name="remarks9" id="remarks9"  required /></td>
			
			</tr>
			  <tr>
			 <td>Unit Never Opened After Integration</td>
		
			 <td> <input type="text" class="form-control" name="obtained10" id="obtained10" value="<?php echo $row['unit_never_opened_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks10" id="remarks10"  required /></td>
			
			</tr>
			  <tr>
			 <td>BURN IN Problem</td>
			 
			 <td> <input type="text" class="form-control" name="obtained11" id="obtained11" value="<?php echo $row['burnin_prob_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks11" id="remarks11"  required /></td>
			 
			</tr>
			  <tr>
			 <td>ESS Problem</td>
			 
			 <td> <input type="text" class="form-control" name="obtained12" id="obtained12" value="<?php echo $row['ess_prob_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks12" id="remarks12"  required /></td>
			
			</tr>
			  <tr>
			 <td>FAB cases</td>
			
			 <td> <input type="text" class="form-control" name="obtained13" id="obtained13" value="<?php echo $row['fab_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks13" id="remarks13"  required /></td>
			 
			</tr>
			  <tr>
			 <td>Performance Deviations Certified by TD</td>
			 
			 <td> <input type="text" class="form-control" name="obtained14" id="obtained14" value="<?php echo $row['perform_dev_cert_td_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks14" id="remarks14"  required /></td>
			
			</tr>
			  <tr>
			 <td>Waiver Cases</td>
			 <td> <input type="text" class="form-control" name="obtained15" id="obtained15" value="<?php echo $row['waiver_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks15" id="remarks15"  required /></td>
			
			</tr>
			 
			
			 <tr>
			<td colspan='2' align='center'><input type="submit" class="btn btn-primary" name="unitquality" id="unitquality" value='Submit UQR Remarks' ></td>
			 <td style="background:#ffffff;"><!-- <span id="sum" style="font-weight:bold;">0<?php //echo $row['total'];?></span>-->
			 <input type="text" class="form-control" name="sum" id="sum"  value="<?php echo $row['total'];?>" readonly /></td>
			</tr>
			</table>
			
			</form>
			</div> 
		    <div class="col-sm-2 col-md-2 col-lg-2"></div> 
		  
		  
		  
		   </div>	  
		  
			
      </div>
	  

	  
	</body>
</html>
<?php
if(isset($_POST['unitquality'])){

date_default_timezone_get('Asia/Kolkata');

$date=date('Y-m-d');
$time=date('H:i:s');

$pcbwired_obtained_marks=$_POST['obtained1'];
$pcbwired_remarks=$_POST['remarks1'];
$pcb_inspection_obtained_marks=$_POST['obtained2'];
$pcb_inspection_remarks=$_POST['remarks2'];
$mechdimen_obtained_marks=$_POST['obtained3'];
$mechdimen_remarks=$_POST['remarks3'];
$burnin_obtained_marks=$_POST['obtained4'];
$burnin_remarks=$_POST['remarks4'];
$integration_qc_obtained_marks=$_POST['obtained5'];
$integration_qc_remarks=$_POST['remarks5'];
$initial_func_obtained_marks=$_POST['obtained6'];
$initial_func_remarks=$_POST['remarks6'];
$ess_obtained_marks=$_POST['obtained7'];
$ess_remarks=$_POST['remarks7'];
$entest_obtained_marks=$_POST['obtained8'];
$entest_remarks=$_POST['remarks8'];
$final_func_obtained_marks=$_POST['obtained9'];
$final_func_remarks=$_POST['remarks9'];
$unit_never_opened_obtained_marks=$_POST['obtained10'];
$unit_never_opened_remarks=$_POST['remarks10'];
$burnin_prob_obtained_marks=$_POST['obtained11'];
$burnin_prob_remarks=$_POST['remarks11'];
$ess_prob_obtained_marks=$_POST['obtained12'];
$ess_prob_remarks=$_POST['remarks12'];
$fab_obtained_marks=$_POST['obtained13'];
$fab_cremarks=$_POST['remarks13'];
$perform_dev_cert_td_obtained_marks=$_POST['obtained14'];
$perform_dev_cert_td_remarks=$_POST['remarks14'];
$waiver_obtained_marks=$_POST['obtained15'];
$waiver_remarks=$_POST['remarks15'];
//$total=$_POST['sum'];


$query="INSERT INTO `remarks_uqr_status`(`product_id`, `pcbwired_obtained_marks`, `pcbwired_remarks`, `pcb_inspection_obtained_marks`, `pcb_inspection_remarks`, `mechdimen_obtained_marks`, `mechdimen_remarks`, `burnin_obtained_marks`, `burnin_remarks`, `integration_qc_obtained_marks`, `integration_qc_remarks`, `initial_func_obtained_marks`, `initial_func_remarks`, `ess_obtained_marks`, `ess_remarks`, `entest_obtained_marks`, `entest_remarks`, `final_func_obtained_marks`, `final_func_remarks`, `unit_never_opened_obtained_marks`, `unit_never_opened_remarks`, `burnin_prob_obtained_marks`, `burnin_prob_remarks`, `ess_prob_obtained_marks`, `ess_prob_remarks`, `fab_obtained_marks`, `fab_cremarks`, `perform_dev_cert_td_obtained_marks`, `perform_dev_cert_td_remarks`, `waiver_obtained_marks`, `waiver_remarks`, `inserted_date`, `inserted_time`) VALUES
('".$id."','".$pcbwired_obtained_marks."','".$pcbwired_remarks."','".$pcb_inspection_obtained_marks."','".$pcb_inspection_remarks."','".$mechdimen_obtained_marks."','".$mechdimen_remarks."','".$burnin_obtained_marks."','".$burnin_remarks."','".$integration_qc_obtained_marks."','".$integration_qc_remarks."','".$initial_func_obtained_marks."','".$initial_func_remarks."','".$ess_obtained_marks."','".$ess_remarks."','".$entest_obtained_marks."','".$entest_remarks."','".$final_func_obtained_marks."','".$final_func_remarks."','".$unit_never_opened_obtained_marks."','".$unit_never_opened_remarks."','".$burnin_prob_obtained_marks."','".$burnin_prob_remarks."','".$ess_prob_obtained_marks."','".$ess_prob_remarks."','".$fab_obtained_marks."','".$fab_cremarks."','".$perform_dev_cert_td_obtained_marks."','".$perform_dev_cert_td_remarks."','".$waiver_obtained_marks."','".$waiver_remarks."','".$date."','".$time."')";

// echo $query;
$exe_qry=mysqli_query($con,$query);
if($exe_qry)
{
	echo "<script>
	 alert('Your Process of Ranking Completed Successfully ...!');
	</script>";
	
}else{
	echo "<script>
	 alert('Your Request Failed,Try Again...!');
	</script>";
}


}


?>
<?php
session_start();
include "config.php";
$id=$_GET['sno'];
//$id='2';

$uname=$_GET['uname'];
$position=$_GET['position'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>BQR Status</title>
		<meta charset="utf-8">
	    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="bootstrap.min.css">
			<link rel="stylesheet" href="styles/styles.css">
        <script src="bootstrap.min.js"></script>
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
		   
               <h1 align='center'>BASE QUALITY RATING (BQR)</h1>
          
		   </div>  
		   
	       <div class="col-sm-12 col-md-12 col-lg-12" style="padding:10px;">    
	         <div class="col-sm-2 col-md-2 col-lg-2">
			<center><a href="viewproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"><button type="button" class="btn btn-success" name="home" id="home">Back To View Product</button></a></center>
			</div> 
			<div class="col-sm-8 col-md-8 col-lg-8">
			<form action="bqr_status.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>" method="POST">
		   
			 <table class="table table-hover">
			  <tr  style="background: #c508ff;color: #fff;">
			  <th>Activity Name</th>
			  <th>Marks Obtained</th>
			  <th>Remarks</th>
			  </tr>
			 <?php 
			// echo "SELECT * FROM `bqr_status` WHERE product_id='".$id."'";
			  $query=mysqli_query($con,"SELECT * FROM `bqr_status` WHERE product_id='".$id."' ");
			  
		      $row=mysqli_fetch_array($query);
			  ?>
			  <tr>
			 <td>PQR</td>
			
			 <td>
			  <input type="text" class="form-control" name="obtained1" id="obtained1" value="<?php echo $row['pdr_marks_td'];?>" readonly  required />
			 </td>
			 <td> <input type="text" class="form-control" name="remarks1" id="remarks1" required /></td>
		
			</tr>
			<tr>
			 <td>Layout Clearance</td>
			
			 <td> <input type="text" class="form-control" name="obtained2" id="obtained2" value="<?php echo $row['layout_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks2" id="remarks2"  required /></td>
			
			</tr>
			 <tr>
			 <td>PCB Analysis</td>
			
			 <td> <input type="text" class="form-control" name="obtained3" id="obtained3" value="<?php echo $row['pcb_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks3" id="remarks3"  required /></td>
		
			</tr>
			 <tr>
			 <td>Mechanical Design Analysis</td>
			
			 <td> <input type="text" class="form-control" name="obtained4" id="obtained4" value="<?php echo $row['mechdesign_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks4" id="remarks4"  required /></td>
			 
			</tr>
			  <tr>
			 <td>Group A Certificate Produced</td>
			
			 <td> <input type="text" class="form-control" name="obtained5" id="obtained5" value="<?php echo $row['group_a_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks5" id="remarks5"  required /></td>
		
			</tr>
			  <tr>
			 <td>Group B Certificate Produced</td>
			
			 <td> <input type="text" class="form-control" name="obtained6" id="obtained6" value="<?php echo $row['group_b_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks6" id="remarks6"  required /></td>
			 
			
			</tr>
			  <tr>
			 <td>BBT Clearance</td>
			
			 <td> <input type="text" class="form-control" name="obtained7" id="obtained7" value="<?php echo $row['bbt_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks7" id="remarks7"  required /></td>
			 
			</tr>
			  <tr>
			 <td>Packing Analysis Clearance</td>
		
			 <td> <input type="text" class="form-control" name="obtained8" id="obtained8" value="<?php echo $row['packing_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks8" id="remarks8"  required /></td>
			
			</tr>
			  <tr>
			 <td>QAP Document Approved</td>
			
			 <td> <input type="text" class="form-control" name="obtained9" id="obtained9" value="<?php echo $row['qap_marks_td'];?>" readonly required  /></td>
			 <td> <input type="text" class="form-control" name="remarks9" id="remarks9"  required /></td>
			
			</tr>
			  <tr>
			 <td>BOM Document Approved</td>
			 
			 <td> <input type="text" class="form-control" name="obtained10" id="obtained10" value="<?php echo $row['bom_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks10" id="remarks10"  required /></td>
			
			</tr>
			  <tr>
			 <td>Integration Process Document Approved</td>
			 
			 <td> <input type="text" class="form-control" name="obtained11" id="obtained11" value="<?php echo $row['integration_approved_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks11" id="remarks11"  required /></td>
			
			</tr>
			  <tr>
			 <td>QT/AT/SOFT Document Approved</td>
			
			 <td> <input type="text" class="form-control" name="obtained12" id="obtained12" value="<?php echo $row['qtatsoft_approved_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks12" id="remarks12"  required /></td>
			
			</tr>
			  <tr>
			 <td>Raw Material</td>
			
			 <td> <input type="text" class="form-control" name="obtained13" id="obtained13" value="<?php echo $row['rawmat_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks13" id="remarks13"  required /></td>
			
			</tr>
			  <tr>
			 <td>EMI/EMC</td>
			
			 <td> <input type="text" class="form-control" name="obtained14" id="obtained14" value="<?php echo $row['emi_emc_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks14" id="remarks14"  required /></td>
			
			</tr>
			  <tr>
			 <td>Major QT Completd</td>
			 
			 <td> <input type="text" class="form-control" name="obtained15" id="obtained15" value="<?php echo $row['majorqt_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks15" id="remarks15"  required /></td>
			 
			</tr>
			  <tr>
			 <td>CDR Conducted</td>
			
			 <td> <input type="text" class="form-control" name="obtained16" id="obtained16" value="<?php echo $row['cdr_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks16" id="remarks16"  required /></td>
			 
			</tr>
			  <tr>
			 <td>Reliability Analysis Done</td>
			
			 <td> <input type="text" class="form-control" name="obtained17" id="obtained17" value="<?php echo $row['reliability_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks17" id="remarks17"  required /></td>
			
			</tr>
			  <tr>
			 <td>Derating Analysis,FMECA ,FMEA</td>
			
			 <td> <input type="text" class="form-control" name="obtained18" id="obtained18" value="<?php echo $row['fmeca_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks18" id="remarks18"  required /></td>
			 
			</tr>
			  <tr>
			 <td>SDRC, if any or No Design Change</td>
			 
			 <td> <input type="text" class="form-control" name="obtained19" id="obtained19" value="<?php echo $row['sdrc_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks19" id="remarks19"  required /></td>
			
			</tr>
			  <tr>
			 <td>PDR Minutes of Meeting Action Point Compliance</td>
			
			 <td> <input type="text" class="form-control" name="obtained20" id="obtained20" value="<?php echo $row['pdr_minutes_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks20" id="remarks20"  required /></td>
			
			</tr>
			  <tr>
			 <td>Packaging Recomendations Non Compliance</td>
			
			 <td> <input type="text" class="form-control" name="obtained21" id="obtained21" value="<?php echo $row['packing_recomm_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks21" id="remarks21"  required /></td>
			
			</tr>
			 <tr>
			 <td>PDR After Units are Ready</td>
		
			 <td> <input type="text" class="form-control" name="obtained22" id="obtained22" value="<?php echo $row['pdr_units_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks22" id="remarks22"  required /></td>
			
			</tr>
			 <tr>
			 <td>QAP Document Delayed Release</td>
			
			 <td> <input type="text" class="form-control" name="obtained23" id="obtained23" value="<?php echo $row['qap_delayed_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks23" id="remarks23"  required /></td>
			
			</tr>
			 <tr>
			 <td>Integration Process Doc Delayed Release</td>
			
			 <td> <input type="text" class="form-control" name="obtained24" id="obtained24" value="<?php echo $row['integration_delayed_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks24" id="remarks24"  required /></td>
			 
			</tr>
			 <tr>
			 <td>QT/AT Document Delayed</td>
			
			 <td> <input type="text" class="form-control" name="obtained25" id="obtained25" value="<?php echo $row['qtatdoc_delayed_marks_td'];?>" readonly required /></td>
			 <td> <input type="text" class="form-control" name="remarks25" id="remarks25"  required /></td>
			
			</tr>
			
			 <tr>
			<td colspan='2' align='center'><input type="submit" class="btn btn-primary" name="basequality" id="basequality" value='Submit BQR Remarks' ></td>
			<td style="background:#ffffff;"> <!--<span id="sum" name="sum" style="font-weight:bold;">0 <?php //echo $row['total'];?></span>-->
			<input type="text" class="form-control" name="sum" id="sum"  value="<?php echo $row['total'];?>" readonly />
			</td>
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
if(isset($_POST['basequality'])){

date_default_timezone_get('Asia/Kolkata');

$date=date('Y-m-d');
$time=date('H:i:s');

$pdr_obtained_marks=$_POST['obtained1'];
$pdr_remarks=$_POST['remarks1'];
$layout_obtained_marks=$_POST['obtained2'];
$layout_remarks=$_POST['remarks2'];
$pcb_obtained_marks=$_POST['obtained3'];
$pcb_remarks=$_POST['remarks3'];
$mechdesign_obtained_marks=$_POST['obtained4'];
$mechdesign_remarks=$_POST['remarks4'];
$group_a_obtained_marks=$_POST['obtained5'];
$group_a_remarks=$_POST['remarks5'];
$group_b_obtained_marks=$_POST['obtained6'];
$group_b_remarks=$_POST['remarks6'];
$bbt_obtained_marks=$_POST['obtained7'];
$bbt_remarks=$_POST['remarks7'];
$packing_obtained_marks=$_POST['obtained8'];
$packing_remarks=$_POST['remarks8'];
$qap_obtained_marks=$_POST['obtained9'];
$qap_remarks=$_POST['remarks9'];
$bom_obtained_marks=$_POST['obtained10'];
$bom_remarks=$_POST['remarks10'];
$integration_approved_obtained_marks=$_POST['obtained11'];
$integration_approved_remarks=$_POST['remarks11'];
$qtatsoft_approved_obtained_marks=$_POST['obtained12'];
$qtatsoft_approved_remarks=$_POST['remarks12'];
$rawmat_obtained_marks=$_POST['obtained13'];
$rawmat_remarks=$_POST['remarks13'];
$emi_emc_obtained_marks=$_POST['obtained14'];
$emi_emc_remarks=$_POST['remarks14'];
$majorqt_obtained_marks=$_POST['obtained15'];
$majorqt_remarks=$_POST['remarks15'];
$cdr_obtained_marks=$_POST['obtained16'];
$cdr_remarks=$_POST['remarks16'];
$reliability_obtained_marks=$_POST['obtained17'];
$reliability_remarks=$_POST['remarks17'];
$fmeca_obtained_marks=$_POST['obtained18'];
$fmeca_remarks=$_POST['remarks18'];
$sdrc_obtained_marks=$_POST['obtained19'];
$sdrc_remarks=$_POST['remarks19'];
$pdr_minutes_obtained_marks=$_POST['obtained20'];
$pdr_minutes_remarks=$_POST['remarks20'];
$packing_recomm_obtained_marks=$_POST['obtained21'];
$packing_recomm_remarks=$_POST['remarks21'];
$pdr_units_obtained_marks=$_POST['obtained22'];
$pdr_units_remarks=$_POST['remarks22'];
$qap_delayed_obtained_marks=$_POST['obtained23'];
$qap_delayed_remarks=$_POST['remarks23'];
$integration_delayed_obtained_marks=$_POST['obtained24'];
$integration_delayed_remarks=$_POST['remarks24'];
$qtatdoc_delayed_obtained_marks=$_POST['obtained25'];
$qtatdoc_delayed_remarks=$_POST['remarks25'];
//$total=$_POST['sum'];


$query="INSERT INTO `remarks_bqr_status`(`product_id`, `pdr_obtained_marks`, `pdr_remarks`, `layout_obtained_marks`, `layout_remarks`, `pcb_obtained_marks`, `pcb_remarks`, `mechdesign_obtained_marks`, `mechdesign_remarks`, `group_a_obtained_marks`, `group_a_remarks`, `group_b_obtained_marks`, `group_b_remarks`, `bbt_obtained_marks`, `bbt_remarks`, `packing_obtained_marks`, `packing_remarks`, `qap_obtained_marks`, `qap_remarks`, `bom_obtained_marks`, `bom_remarks`, `integration_approved_obtained_marks`, `integration_approved_remarks`, `qtatsoft_approved_obtained_marks`, `qtatsoft_approved_remarks`, `rawmat_obtained_marks`, `rawmat_remarks`, `emi_emc_obtained_marks`, `emi_emc_remarks`, `majorqt_obtained_marks`, `majorqt_remarks`, `cdr_obtained_marks`, `cdr_remarks`, `reliability_obtained_marks`, `reliability_remarks`, `fmeca_obtained_marks`, `fmeca_remarks`, `sdrc_obtained_marks`, `sdrc_remarks`, `pdr_minutes_obtained_marks`, `pdr_minutes_remarks`, `packing_recomm_obtained_marks`, `packing_recomm_remarks`, `pdr_units_obtained_marks`, `pdr_units_remarks`, `qap_delayed_obtained_marks`, `qap_delayed_remarks`, `integration_delayed_obtained_marks`, `integration_delayed_remarks`, `qtatdoc_delayed_obtained_marks`, `qtatdoc_delayed_remarks`, `inserted_date`, `inserted_time`) VALUES
('".$id."','".$pdr_obtained_marks."','".$pdr_remarks."','".$layout_obtained_marks."','".$layout_remarks."','".$pcb_obtained_marks."','".$pcb_remarks."','".$mechdesign_obtained_marks."','".$mechdesign_remarks."','".$group_a_obtained_marks."','".$group_a_remarks."','".$group_b_obtained_marks."','".$group_b_remarks."','".$bbt_obtained_marks."','".$bbt_remarks."','".$packing_obtained_marks."','".$packing_remarks."','".$qap_obtained_marks."','".$qap_remarks."','".$bom_obtained_marks."','".$bom_remarks."','".$integration_approved_obtained_marks."','".$integration_approved_remarks."','".$qtatsoft_approved_obtained_marks."','".$qtatsoft_approved_remarks."','".$rawmat_obtained_marks."','".$rawmat_remarks."','".$emi_emc_obtained_marks."','".$emi_emc_remarks."','".$majorqt_obtained_marks."','".$majorqt_remarks."','".$cdr_obtained_marks."','".$cdr_remarks."','".$reliability_obtained_marks."','".$reliability_remarks."','".$fmeca_obtained_marks."','".$fmeca_remarks."','".$sdrc_obtained_marks."','".$sdrc_remarks."','".$pdr_minutes_obtained_marks."','".$pdr_minutes_remarks."','".$packing_recomm_obtained_marks."','".$packing_recomm_remarks."','".$pdr_units_obtained_marks."','".$pdr_units_remarks."','".$qap_delayed_obtained_marks."','".$qap_delayed_remarks."','".$integration_delayed_obtained_marks."','".$integration_delayed_remarks."','".$qtatdoc_delayed_obtained_marks."','".$qtatdoc_delayed_remarks."','".$date."','".$time."')";

// ho $query;
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
<?php
session_start();
include "config.php";
$id=$_GET['sno'];

$uname=$_GET['uname'];
$position=$_GET['position'];
$qur=mysqli_query($con,"SELECT * FROM `login` where `position`='".$position."'");
$roww=mysqli_fetch_array($qur);
$user=$roww['username'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Unit Quantity</title>
		<meta charset="utf-8">
		<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
		    
               <h1 align='center'>UNIT QUALITY RATING (UQR)</h1>
           
		   </div>  
		   
	        <div class="col-sm-12 col-md-12 col-lg-12" style="padding:10px;"> 
		     <div class="col-sm-2 col-md-2 col-lg-2">
		   <center><a href="markingproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"><button type="button" class="btn btn-success" name="home" id="home">Back To Marking Product</button></a></center>
		   </div>
		     <div class="col-sm-8 col-md-8 col-lg-8"  style="background:#ffff9d;">   
		    <center> <h3 style="color:#ff0099;font-weight:bold;"> Selected Product Name is: <span styl><?php $que="SELECT * FROM `product_add` WHERE `sno`= '".$id."'"; 
				$que_exe=mysqli_query($con,$que);
				while($woo=mysqli_fetch_array($que_exe)){
					echo $woo['product_name'];
				}
				
				?></span></h3></center>
				</div>
				<div class="col-sm-2 col-md-2 col-lg-2"> </div>
				</div>
              <div class="col-sm-12 col-md-12 col-lg-12" style="padding:10px;"> 
	        <div class="col-sm-1 col-md-1 col-lg-1"></div> 
		   	<form action="unitquality.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>" method="POST">
			<?php
                  $query_view=mysqli_query($con,"SELECT * FROM `uqr_status` WHERE product_id ='".$id."'");
		       if( $row=mysqli_fetch_array($query_view)){
            ?>			
		    <div class="col-sm-10 col-md-10 col-lg-10">
			 <table class="table table-hover">
			  <tr  style="background: #c508ff;color: #fff;">
			  <th>Activity Name</th>
			  <th>Marks by QSM</th>
			  <th>Comment</th>
			  <th>R&QA Rep</th>
			  <th> Marks by TD, DR&QA </th>
			  </tr>
			  <tr>
			 <td>Populated PCB Class 3 Wired</td>
			 <td>
			 <select class="form-control" name="marksqsm1" id="marksqsm1"  >
			   <option value="">Please Select</option><?php echo $row['pcbwired_marks_qsm'];?>
			   <option value="0"<?php if ($row['pcbwired_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="4"<?php if ($row['pcbwired_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			 </select>
			 </td>
			 <td>
			  <input type="text" class="form-control" name="comment1" id="comment1"  value="<?php echo $row['pcbwired_comment'];?>"   />
			 </td>
			 <td> <input type="text" class="form-control" name="randqa1" id="randqa1"  value="<?php echo $row['pcbwired_name'];?>"   /></td>
			 <td>
			  <select class="form-control txt" name="markstd1" id="markstd1"  >
			   <option value="">Please Select</option><?php echo $row['pcbwired_marks_td'];?>
			   <option value="0"<?php if ($row['pcbwired_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="4"<?php if ($row['pcbwired_marks_td']=='4') echo "selected" ; ?> >4</option>
			 </select>
			 </td>
			</tr>
			<tr>
			 <td>Populated PCB class 3 Inspection Clearance</td>
			 <td>
			 <select class="form-control" name="marksqsm2" id="marksqsm2"  >
			   <option value="">Please Select</option><?php echo $row['pcb_inspection_marks_qsm'];?>
			   <option value="0"<?php if ($row['pcb_inspection_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['pcb_inspection_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment2" id="comment2" value="<?php echo $row['pcb_inspection_comment'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa2" id="randqa2"  value="<?php echo $row['pcb_inspection_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd2" id="markstd2"  >
			   <option value="">Please Select</option><?php echo $row['pcb_inspection_marks_td'];?>
			   <option value="0"<?php if ($row['pcb_inspection_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['pcb_inspection_marks_td']=='3') echo "selected" ; ?> >3</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>Mech Dimensional QC</td>
			 <td>
			 <select class="form-control" name="marksqsm3" id="marksqsm3"  >
			   <option value="">Please Select</option><?php echo $row['mechdimen_marks_qsm'];?>
			   <option value="0"<?php if ($row['mechdimen_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['mechdimen_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			   <option value="6"<?php if ($row['mechdimen_marks_qsm']=='6') echo "selected" ; ?> >6</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment3" id="comment3" value="<?php echo $row['mechdimen_marks_qsm'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa3" id="randqa3" value="<?php echo $row['mechdimen_comment'];?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd3" id="markstd3"  >
			   <option value="0">Please Select</option><?php echo $row['mechdimen_marks_td'];?>
			   <option value="0"<?php if ($row['mechdimen_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['mechdimen_marks_td']=='3') echo "selected" ; ?> >3</option>
			   <option value="6"<?php if ($row['mechdimen_marks_td']=='6') echo "selected" ; ?> >6</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>Burn IN</td>
			 <td>
			 <select class="form-control" name="marksqsm4" id="marksqsm4"  >
			   <option value="">Please Select</option><?php echo $row['burnin_marks_qsm'];?>
			   <option value="0"<?php if ($row['burnin_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="10"<?php if ($row['burnin_marks_qsm']=='10') echo "selected" ; ?> >10</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment4" id="comment4" value="<?php echo $row['burnin_comment'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa4" id="randqa4"  value="<?php echo $row['burnin_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd4" id="markstd4" >
			   <option value="0">Please Select</option><?php echo $row['burnin_marks_td'];?>
			   <option value="0"<?php if ($row['burnin_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="10"<?php if ($row['burnin_marks_td']=='10') echo "selected" ; ?> >10</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Integration QC</td>
			 <td>
			 <select class="form-control" name="marksqsm5" id="marksqsm5"  >
			   <option value="">Please Select</option><?php echo $row['integration_qc_marks_qsm'];?>
			   <option value="0"<?php if ($row['integration_qc_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="4"<?php if ($row['integration_qc_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			   <option value="8"<?php if ($row['integration_qc_marks_qsm']=='8') echo "selected" ; ?> >8</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment5" id="comment5" value="<?php echo $row['integration_qc_comment'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa5" id="randqa5"  value="<?php echo $row['integration_qc_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd5" id="markstd5" >
			   <option value="0">Please Select</option><?php echo $row['integration_qc_marks_td'];?>
			   <option value="0"<?php if ($row['integration_qc_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="4"<?php if ($row['integration_qc_marks_td']=='4') echo "selected" ; ?> >4</option>
			   <option value="8"<?php if ($row['integration_qc_marks_td']=='8') echo "selected" ; ?> >8</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Initial Functional Test Cleared</td>
			 <td>
			 <select class="form-control" name="marksqsm6" id="marksqsm6" >
			   <option value="">Please Select</option><?php echo $row['initial_func_marks_qsm'];?>
			   <option value="0"<?php if ($row['initial_func_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="5"<?php if ($row['initial_func_marks_qsm']=='5') echo "selected" ; ?> >5</option>
			   <option value="10"<?php if ($row['initial_func_marks_qsm']=='10') echo "selected" ; ?> >10</option>
			   <option value="15"<?php if ($row['initial_func_marks_qsm']=='15') echo "selected" ; ?> >15</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment6" id="comment6" value="<?php echo $row['initial_func_comment'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa6" id="randqa6" value="<?php echo $row['initial_func_name'];?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd6" id="markstd6" >
			   <option value="0">Please Select</option><?php echo $row['initial_func_marks_td'];?>
			   <option value="0"<?php if ($row['initial_func_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="5"<?php if ($row['initial_func_marks_td']=='5') echo "selected" ; ?> >5</option>
			   <option value="10"<?php if ($row['initial_func_marks_td']=='10') echo "selected" ; ?> >10</option>
			   <option value="15"<?php if ($row['initial_func_marks_td']=='15') echo "selected" ; ?> >15</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>ESS</td>
			 <td>
			 <select class="form-control" name="marksqsm7" id="marksqsm7"  >
			   <option value="">Please Select</option><?php echo $row['ess_marks_qsm'];?>
			   <option value="0"<?php if ($row['ess_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="6"<?php if ($row['ess_marks_qsm']=='6') echo "selected" ; ?> >6</option>
			   <option value="12"<?php if ($row['ess_marks_qsm']=='12') echo "selected" ; ?> >12</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment7" id="comment7" value="<?php echo $row['ess_comment'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa7" id="randqa7"  value="<?php echo $row['ess_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd7" id="markstd7" >
			   <option value="0">Please Select</option><?php echo $row['ess_marks_td'];?>
			   <option value="0"<?php if ($row['ess_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="6"<?php if ($row['ess_marks_td']=='6') echo "selected" ; ?> >6</option>
			   <option value="12"<?php if ($row['ess_marks_td']=='12') echo "selected" ; ?> >12</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>ENTEST Cleared</td>
			 <td>
			 <select class="form-control" name="marksqsm8" id="marksqsm8" >
			   <option value="">Please Select</option><?php echo $row['entest_marks_qsm'];?>
			   <option value="0"<?php if ($row['entest_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="7"<?php if ($row['entest_marks_qsm']=='7') echo "selected" ; ?> >7</option>
			   <option value="13"<?php if ($row['entest_marks_qsm']=='13') echo "selected" ; ?> >13</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment8" id="comment8"  value="<?php echo $row['entest_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa8" id="randqa8"  value="<?php echo $row['entest_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd8" id="markstd8"  >
			   <option value="0">Please Select</option><?php echo $row['entest_marks_td'];?>
			   <option value="0"<?php if ($row['entest_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="7"<?php if ($row['entest_marks_td']=='7') echo "selected" ; ?> >7</option>
			   <option value="13"<?php if ($row['entest_marks_td']=='13') echo "selected" ; ?> >13</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Final Functional Test</td>
			<td>
			 <select class="form-control" name="marksqsm9" id="marksqsm9"  >
			   <option value="">Please Select</option><?php echo $row['final_func_marks_qsm'];?>
			   <option value="0"<?php if ($row['final_func_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="6"<?php if ($row['final_func_marks_qsm']=='6') echo "selected" ; ?> >6</option>
			   <option value="12"<?php if ($row['final_func_marks_qsm']=='12') echo "selected" ; ?> >12</option>
			   <option value="17"<?php if ($row['final_func_marks_qsm']=='17') echo "selected" ; ?> >17</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment9" id="comment9" value="<?php echo $row['final_func_comment'];?>"    /></td>
			 <td> <input type="text" class="form-control" name="randqa9" id="randqa9"  value="<?php echo $row['final_func_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd9" id="markstd9"  >
			   <option value="0">Please Select</option><?php echo $row['final_func_marks_td'];?>
			   <option value="0"<?php if ($row['final_func_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="6"<?php if ($row['final_func_marks_td']=='6') echo "selected" ; ?> >6</option>
			   <option value="12"<?php if ($row['final_func_marks_td']=='12') echo "selected" ; ?> >12</option>
			   <option value="17"<?php if ($row['final_func_marks_td']=='17') echo "selected" ; ?> >17</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Unit Never Opened After Integration</td>
			 <td>
			 <select class="form-control" name="marksqsm10" id="marksqsm10"  >
			   <option value="">Please Select</option><?php echo $row['unit_never_opened_marks_qsm'];?>
			   <option value="0"<?php if ($row['unit_never_opened_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['unit_never_opened_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			   <option value="6"<?php if ($row['unit_never_opened_marks_qsm']=='6') echo "selected" ; ?> >6</option>
			   <option value="10"<?php if ($row['unit_never_opened_marks_qsm']=='10') echo "selected" ; ?> >10</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment10" id="comment10" value="<?php echo $row['unit_never_opened_comment'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa10" id="randqa10"  value="<?php echo $row['unit_never_opened_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd10" id="markstd10"  >
			   <option value="0">Please Select</option><?php echo $row['unit_never_opened_marks_td'];?>
			   <option value="0"<?php if ($row['unit_never_opened_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['unit_never_opened_marks_td']=='3') echo "selected" ; ?> >3</option>
			   <option value="6"<?php if ($row['unit_never_opened_marks_td']=='6') echo "selected" ; ?> >6</option>
			   <option value="10"<?php if ($row['unit_never_opened_marks_td']=='10') echo "selected" ; ?> >10</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>BURN IN Problem</td>
			 <td>
			 <select class="form-control" name="marksqsm11" id="marksqsm11"  >
			   <option value="">Please Select</option><?php echo $row['burnin_prob_marks_qsm'];?>
			   <option value="0"<?php if ($row['burnin_prob_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-4"<?php if ($row['burnin_prob_marks_qsm']=='-4') echo "selected" ; ?> >-4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment11" id="comment11"  value="<?php echo $row['burnin_prob_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa11" id="randqa11" value="<?php echo $row['burnin_prob_name'];?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd11" id="markstd11"  >
			   <option value="0">Please Select</option><?php echo $row['burnin_prob_marks_td'];?>
			   <option value="0"<?php if ($row['burnin_prob_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-4"<?php if ($row['burnin_prob_marks_td']=='-4') echo "selected" ; ?> >-4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>ESS Problem</td>
			 <td>
			 <select class="form-control" name="marksqsm12" id="marksqsm12"  >
			   <option value="">Please Select</option><?php echo $row['ess_prob_marks_qsm'];?>
			   <option value="0"<?php if ($row['ess_prob_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-3"<?php if ($row['ess_prob_marks_qsm']=='-3') echo "selected" ; ?> >-3</option>
			   <option value="-6"<?php if ($row['ess_prob_marks_qsm']=='-6') echo "selected" ; ?> >-6</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment12" id="comment12"  value="<?php echo $row['ess_prob_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa12" id="randqa12"  value="<?php echo $row['ess_prob_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd12" id="markstd12"  >
			   <option value="0">Please Select</option><?php echo $row['ess_prob_marks_td'];?>
			   <option value="0"<?php if ($row['ess_prob_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-3"<?php if ($row['ess_prob_marks_td']=='-3') echo "selected" ; ?> >-3</option>
			   <option value="-6"<?php if ($row['ess_prob_marks_td']=='-6') echo "selected" ; ?> >-6</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>FAB cases</td>
			<td>
			 <select class="form-control"  name="marksqsm13" id="marksqsm13" >
			   <option value="">Please Select</option><?php echo $row['fab_marks_qsm'];?>
			   <option value="0"<?php if ($row['fab_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-4"<?php if ($row['fab_marks_qsm']=='-4') echo "selected" ; ?> >-4</option>
			   <option value="-8"<?php if ($row['fab_marks_qsm']=='-8') echo "selected" ; ?> >-8</option>
			   <option value="-12"<?php if ($row['fab_marks_qsm']=='-12') echo "selected" ; ?> >-12</option>
			   <option value="-16"<?php if ($row['fab_marks_qsm']=='-16') echo "selected" ; ?> >-16</option>
			   <option value="-20"<?php if ($row['fab_marks_qsm']=='-20') echo "selected" ; ?> >-20</option>
			   <option value="-24"<?php if ($row['fab_marks_qsm']=='-24') echo "selected" ; ?> >-24</option>
			   <option value="-28"<?php if ($row['fab_marks_qsm']=='-28') echo "selected" ; ?> >-28</option>
			   <option value="-32"<?php if ($row['fab_marks_qsm']=='-32') echo "selected" ; ?> >-32</option>
			   <option value="-36"<?php if ($row['fab_marks_qsm']=='-36') echo "selected" ; ?> >-36</option>
			   <option value="-40"<?php if ($row['fab_marks_qsm']=='-40') echo "selected" ; ?> >-40</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment13" id="comment13" value="<?php echo $row['fab_comment'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa13" id="randqa13"  value="<?php echo $row['fab_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd13" id="markstd13"  >
			   <option value="0">Please Select</option><?php echo $row['fab_marks_td'];?>
			   <option value="0"<?php if ($row['fab_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-4"<?php if ($row['fab_marks_td']=='-4') echo "selected" ; ?> >-4</option>
			   <option value="-8"<?php if ($row['fab_marks_td']=='-8') echo "selected" ; ?> >-8</option>
			   <option value="-12"<?php if ($row['fab_marks_td']=='-12') echo "selected" ; ?> >-12</option>
			   <option value="-16"<?php if ($row['fab_marks_td']=='-16') echo "selected" ; ?> >-16</option>
			   <option value="-20"<?php if ($row['fab_marks_td']=='-20') echo "selected" ; ?> >-20</option>
			   <option value="-24"<?php if ($row['fab_marks_td']=='-24') echo "selected" ; ?> >-24</option>
			   <option value="-28"<?php if ($row['fab_marks_td']=='-28') echo "selected" ; ?> >-28</option>
			   <option value="-32"<?php if ($row['fab_marks_td']=='-32') echo "selected" ; ?> >-32</option>
			   <option value="-36"<?php if ($row['fab_marks_td']=='-36') echo "selected" ; ?> >-36</option>
			   <option value="-40"<?php if ($row['fab_marks_td']=='-40') echo "selected" ; ?> >-40</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Performance Deviations Certified by TD</td>
			 <td>
			 <select class="form-control" name="marksqsm14" id="marksqsm14"  >
			   <option value="">Please Select</option><?php echo $row['perform_dev_cert_td_marks_qsm'];?>
			   <option value="0"<?php if ($row['perform_dev_cert_td_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-4"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-4') echo "selected" ; ?> >-4</option>
			   <option value="-8"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-8') echo "selected" ; ?> >-8</option>
			   <option value="-12"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-12') echo "selected" ; ?> >-12</option>
			   <option value="-16"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-16') echo "selected" ; ?> >-16</option>
			   <option value="-20"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-20') echo "selected" ; ?> >-20</option>
			   <option value="-24"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-24') echo "selected" ; ?> >-24</option>
			   <option value="-28"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-28') echo "selected" ; ?> >-28</option>
			   <option value="-32"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-32') echo "selected" ; ?> >-32</option>
			   <option value="-36"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-36') echo "selected" ; ?> >-36</option>
			   <option value="-40"<?php if ($row['perform_dev_cert_td_marks_qsm']=='-40') echo "selected" ; ?> >-40</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment14" id="comment14" value="<?php echo $row['perform_dev_cert_td_comment'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa14" id="randqa14"  value="<?php echo $row['perform_dev_cert_td_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd14" id="markstd14"  >
			   <option value="0">Please Select</option><?php echo $row['perform_dev_cert_td_marks_td'];?>
			   <option value="0"<?php if ($row['perform_dev_cert_td_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-4"<?php if ($row['perform_dev_cert_td_marks_td']=='-4') echo "selected" ; ?> >-4</option>
			   <option value="-8"<?php if ($row['perform_dev_cert_td_marks_td']=='-8') echo "selected" ; ?> >-8</option>
			   <option value="-12"<?php if ($row['perform_dev_cert_td_marks_td']=='-12') echo "selected" ; ?> >-12</option>
			   <option value="-16"<?php if ($row['perform_dev_cert_td_marks_td']=='-16') echo "selected" ; ?> >-16</option>
			   <option value="-20"<?php if ($row['perform_dev_cert_td_marks_td']=='-20') echo "selected" ; ?> >-20</option>
			   <option value="-24"<?php if ($row['perform_dev_cert_td_marks_td']=='-24') echo "selected" ; ?> >-24</option>
			   <option value="-28"<?php if ($row['perform_dev_cert_td_marks_td']=='-28') echo "selected" ; ?> >-28</option>
			   <option value="-32"<?php if ($row['perform_dev_cert_td_marks_td']=='-32') echo "selected" ; ?> >-32</option>
			   <option value="-36"<?php if ($row['perform_dev_cert_td_marks_td']=='-36') echo "selected" ; ?> >-36</option>
			   <option value="-40"<?php if ($row['perform_dev_cert_td_marks_td']=='-40') echo "selected" ; ?> >-40</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Waiver Cases</td>
			 <td>
			 <select class="form-control" name="marksqsm15" id="marksqsm15"  >
			   <option value="">Please Select</option><?php echo $row['waiver_marks_qsm'];?>
			   <option value="0"<?php if ($row['waiver_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['waiver_marks_qsm']=='-2') echo "selected" ; ?> >-2</option>
			   <option value="-4"<?php if ($row['waiver_marks_qsm']=='-4') echo "selected" ; ?> >-4</option>
			   <option value="-6"<?php if ($row['waiver_marks_qsm']=='-6') echo "selected" ; ?> >-6</option>
			   <option value="-8"<?php if ($row['waiver_marks_qsm']=='-8') echo "selected" ; ?> >-8</option>
			   <option value="-12"<?php if ($row['waiver_marks_qsm']=='-12') echo "selected" ; ?> >-12</option>
			   <option value="-14"<?php if ($row['waiver_marks_qsm']=='-14') echo "selected" ; ?> >-14</option>
			   <option value="-16"<?php if ($row['waiver_marks_qsm']=='-16') echo "selected" ; ?> >-16</option>
			   <option value="-18"<?php if ($row['waiver_marks_qsm']=='-18') echo "selected" ; ?> >-18</option>
			   <option value="-20"<?php if ($row['waiver_marks_qsm']=='-20') echo "selected" ; ?> >-20</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment15" id="comment15" value="<?php echo $row['waiver_comment'];?>"   /></td>
			 <td> <input type="text" class="form-control" name="randqa15" id="randqa15"  value="<?php echo $row['waiver_name'];?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd15" id="markstd15"  >
			   <option value="">Please Select</option><?php echo $row['waiver_marks_td'];?>
			   <option value="0"<?php if ($row['waiver_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['waiver_marks_td']=='-2') echo "selected" ; ?> >-2</option>
			   <option value="-4"<?php if ($row['waiver_marks_td']=='-4') echo "selected" ; ?> >-4</option>
			   <option value="-6"<?php if ($row['waiver_marks_td']=='-6') echo "selected" ; ?> >-6</option>
			   <option value="-8"<?php if ($row['waiver_marks_td']=='-8') echo "selected" ; ?> >-8</option>
			   <option value="-12"<?php if ($row['waiver_marks_td']=='-12') echo "selected" ; ?> >-12</option>
			   <option value="-14"<?php if ($row['waiver_marks_td']=='-14') echo "selected" ; ?> >-14</option>
			   <option value="-16"<?php if ($row['waiver_marks_td']=='-16') echo "selected" ; ?> >-16</option>
			   <option value="-18"<?php if ($row['waiver_marks_td']=='-18') echo "selected" ; ?> >-18</option>
			   <option value="-20"<?php if ($row['waiver_marks_td']=='-20') echo "selected" ; ?> >-20</option>
			 </select></td>
			</tr>
			 
			
			 <tr>
			<td colspan='4' align='center'><input type="submit" class="btn btn-primary" name="unitquality" id="unitquality" value='Unit Quality Rating' ></td>
			 <td style="background:#ffffff;"> <!--<span id="sum" style="font-weight:bold;">0</span>-->
			 <input type="text" name="sum"id="sum" value='<?php echo $row['waiver_marks_td'];?>' style="font-weight:bold;"></td>
			</tr>
			</table>
			</div> 
				   <?php }else{ ?>
			
			
			<div class="col-sm-10 col-md-10 col-lg-10">
			 <table class="table table-hover">
			  <tr style="background: #c508ff;color: #fff;">
			  <th>Activity Name</th>
			  <th>Marks by QSM</th>
			  <th>Comment</th>
			  <th>R&QA Rep</th>
			  <th> Marks by TD, DR&QA </th>
			  </tr>
			  <tr>
			 <td>
				<button
 					 type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If PCB assembly done as per  aerospace standard or IPC standard, marks to give is 4
					  If PCB assembly not done as per class 3 wired standard, marks to give is 0"
				>
				Populated PCB Class 3 Wired
				</button>
			</td>
			 <td>
			 <select class="form-control" name="marksqsm1" id="marksqsm1"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="4">4</option>
			 </select>
			 </td>
			 <td>
			  <input type="text" class="form-control" name="comment1" id="comment1"  />
			 </td>
			 <td> <input type="text" class="form-control" name="randqa1" id="randqa1"   value="<?php echo $user;?>"   /></td>
			 <td>
			  <select class="form-control txt" name="markstd1" id="markstd1"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="4">4</option>
			 </select>
			 </td>
			</tr>
			
			
			<tr>
			 <td>
				 <button
					 type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If PCB assembly inspection clearance obtained from QA agency, marks to give is 3
					  If PCB assembly inspection clearance not obtained from QA agency, marks to give is 0"
				> Populated PCB class 3 Inspection Clearance</button></td>
			 <td>
			 <select class="form-control" name="marksqsm2" id="marksqsm2"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment2" id="comment2"  /></td>
			 <td> <input type="text" class="form-control" name="randqa2" id="randqa2"    value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd2" id="markstd2"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			 </select></td>
			</tr>
			 <tr>
			 <td><button
				type="button"
				class="btn btn-secondary"
				data-mdb-toggle="tooltip"
				data-mdb-placement="top"
				title="If dimensional clearance obtained from QA agency, marks to give is 6.
				If provisional dimensional clearance obtained from QA agency, marks to give is 4.
				If observation are mentioned in dimensional clearance obtained from QA agency, marks to give is 3
				If no dimensional clearance obtained from QA agency before use, marks to give is 0."
				> Mech Dimensional QC</button></td>
			 <td>
			 <select class="form-control" name="marksqsm3" id="marksqsm3"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			   <option value="6">6</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment3" id="comment3"  /></td>
			 <td> <input type="text" class="form-control" name="randqa3" id="randqa3"   value="<?php echo $user;?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd3" id="markstd3"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			   <option value="6">6</option>
			 </select></td>
			</tr>
			 <tr>
			 <td><button
				type="button"
				class="btn btn-secondary"
				data-mdb-toggle="tooltip"
				data-mdb-placement="top"
				title="If BURN IN/Screening done, marks to give is 10
				If no BURN IN/Screening done, marks to give is 0"
				>Burn IN</button> </td>
			 <td>
			 <select class="form-control" name="marksqsm4" id="marksqsm4"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="10">10</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment4" id="comment4"  /></td>
			 <td> <input type="text" class="form-control" name="randqa4" id="randqa4"   value="<?php echo $user;?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd4" id="markstd4" >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="10">10</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
				type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If Integration clearance obtained from QA agency, marks to give is 8.
					  If provisional Integration clearance obtained from QA agency, marks to give is 6.
					  If observation are mentioned in dimensional clearance obtained from QA agency, marks to give is 4
					  If no Integration clearance obtained from QA agency, marks to give is 0."
					  >Integration QC</button> </td>
			 <td>
			 <select class="form-control" name="marksqsm5" id="marksqsm5"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="4">4</option>
			   <option value="8">8</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment5" id="comment5"  /></td>
			 <td> <input type="text" class="form-control" name="randqa5" id="randqa5"   value="<?php echo $user;?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd5" id="markstd5" >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="4">4</option>
			   <option value="8">8</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
					 type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If IFT clearance obtained from QA agency, marks to give is 15.
					  If no IFT clearance obtained from QA agency, marks to give is 0."
				>Initial Functional Test Cleared</button> </td>
			 <td>
			 <select class="form-control" name="marksqsm6" id="marksqsm6" >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="5">5</option>
			   <option value="10">10</option>
			   <option value="15">15</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment6" id="comment6"   /></td>
			 <td> <input type="text" class="form-control" name="randqa6" id="randqa6"   value="<?php echo $user;?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd6" id="markstd6" >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="5">5</option>
			   <option value="10">10</option>
			   <option value="15">15</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
					 type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If ESS done and clearance obtained from QA agency, marks to give is 12.
					  If no ESS done or clearance obtained from QA agency, marks to give is 0."
				>ESS</button> </td>
			 <td>
			 <select class="form-control" name="marksqsm7" id="marksqsm7"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="6">6</option>
			   <option value="12">12</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment7" id="comment7"  /></td>
			 <td> <input type="text" class="form-control" name="randqa7" id="randqa7"   value="<?php echo $user;?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd7" id="markstd7" >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="6">6</option>
			   <option value="12">12</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
				type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If ENTEST done as per AT document clearance obtained from QA agency, marks to give is 13.
					  If ENTEST not done as per AT document, marks to give is 9.
					  If no ENTEST clearance obtained from QA agency, marks to give is 0."
				>ENTEST Cleared</button> </td>
			 <td>
			 <select class="form-control" name="marksqsm8" id="marksqsm8" >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="7">7</option>
			   <option value="13">13</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment8" id="comment8"  /></td>
			 <td> <input type="text" class="form-control" name="randqa8" id="randqa8"    value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd8" id="markstd8"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="7">7</option>
			   <option value="13">13</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
				type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If FFT clearance obtained from QA agency, marks to give is 17.
					  If no FFT clearance obtained from QA agency, marks to give is 0."
				>Final Functional Test</button> </td>
			<td>
			 <select class="form-control" name="marksqsm9" id="marksqsm9"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="6">6</option>
			   <option value="12">12</option>
			   <option value="12">17</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment9" id="comment9"   /></td>
			 <td> <input type="text" class="form-control" name="randqa9" id="randqa9"   value="<?php echo $user;?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd9" id="markstd9"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="6">6</option>
			   <option value="12">12</option>
			   <option value="12">17</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
				type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If unit never opened after integration, marks to give is 10
					  If unit opened after integration only for software change, marks to give is 9
					  If unit opened after integration only one time due to failure, marks to give is 6
					  If unit opened after integration two time due to failure, marks to give is 3
					  If unit opened after integration more than two time due to failure, marks to give is 0"
				> Unit Never Opened After Integration</button></td>
			 <td>
			 <select class="form-control" name="marksqsm10" id="marksqsm10"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			   <option value="6">6</option>
			   <option value="10">10</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment10" id="comment10"  /></td>
			 <td> <input type="text" class="form-control" name="randqa10" id="randqa10"    value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd10" id="markstd10"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			   <option value="6">6</option>
			   <option value="10">10</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
				type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If no problem observed during BURN IN/Screening, marks to give is  0
					  If problem observed during BURN IN/Screening, marks to give is  -4"
				>BURN IN Problem</button> </td>
			 <td>
			 <select class="form-control" name="marksqsm11" id="marksqsm11"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-4">-4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment11" id="comment11"  /></td>
			 <td> <input type="text" class="form-control" name="randqa11" id="randqa11"   value="<?php echo $user;?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd11" id="markstd11"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-4">-4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
				type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If no problem observed during ESS, marks to give is  0
					  If problem observed during ESS, marks to give is  -6"
				>ESS Problem</button> </td>
			 <td>
			 <select class="form-control" name="marksqsm12" id="marksqsm12"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-3">-3</option>
			   <option value="-6">-6</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment12" id="comment12"  /></td>
			 <td> <input type="text" class="form-control" name="randqa12" id="randqa12"    value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd12" id="markstd12"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-3">-3</option>
			   <option value="-6">-6</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button 
				type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If no FAB, marks to give is 0
					  If one FAB obtained, marks to give is -4
					  If n FAB obtained, marks to give is -4*n"
				>FAB cases</button> </td>
			<td>
			 <select class="form-control"  name="marksqsm13" id="marksqsm13" >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-4">-4</option>
			   <option value="-8">-8</option>
			   <option value="-12">-12</option>
			   <option value="-16">-16</option>
			   <option value="-20">-20</option>
			   <option value="-24">-24</option>
			   <option value="-28">-28</option>
			   <option value="-32">-32</option>
			   <option value="-36">-36</option>
			   <option value="-40">-40</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment13" id="comment13"  /></td>
			 <td> <input type="text" class="form-control" name="randqa13" id="randqa13"   value="<?php echo $user;?>"    /></td>
			 <td>
			 <select class="form-control txt" name="markstd13" id="markstd13"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-4">-4</option>
			   <option value="-8">-8</option>
			   <option value="-12">-12</option>
			   <option value="-16">-16</option>
			   <option value="-20">-20</option>
			   <option value="-24">-24</option>
			   <option value="-28">-28</option>
			   <option value="-32">-32</option>
			   <option value="-36">-36</option>
			   <option value="-40">-40</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
				type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If no deviations , marks to give is 0
					  If one deviation, marks to give is -4
					  If n deviation, marks to give is -4*n"
				>Performance Deviations Certified by TD</button> </td>
			 <td>
			 <select class="form-control" name="marksqsm14" id="marksqsm14"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-4">-4</option>
			   <option value="-8">-8</option>
			   <option value="-12">-12</option>
			   <option value="-16">-16</option>
			   <option value="-20">-20</option>
			   <option value="-24">-24</option>
			   <option value="-28">-28</option>
			   <option value="-32">-32</option>
			   <option value="-36">-36</option>
			   <option value="-40">-40</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment14" id="comment14"  /></td>
			 <td> <input type="text" class="form-control" name="randqa14" id="randqa14"    value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd14" id="markstd14"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-4">-4</option>
			   <option value="-8">-8</option>
			   <option value="-12">-12</option>
			   <option value="-16">-16</option>
			   <option value="-20">-20</option>
			   <option value="-24">-24</option>
			   <option value="-28">-28</option>
			   <option value="-32">-32</option>
			   <option value="-36">-36</option>
			   <option value="-40">-40</option>
			 </select></td>
			</tr>
			  <tr>
			 <td><button
				type="button"
 					 class="btn btn-secondary"
 					 data-mdb-toggle="tooltip"
 					 data-mdb-placement="top"
 					 title="If no waiver obtained, marks to give is 0
					  If one waiver obtained, marks to give is -2
					  If n waiver obtained, marks to give is -2*n"
				>Waiver Cases</button>
				 </td>
			 <td>
			 <select class="form-control" name="marksqsm15" id="marksqsm15"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			   <option value="-4">-4</option>
			   <option value="-6">-6</option>
			   <option value="-8">-8</option>
			   <option value="-12">-12</option>
			   <option value="-14">-14</option>
			   <option value="-16">-16</option>
			   <option value="-18">-18</option>
			   <option value="-20">-20</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment15" id="comment15"  /></td>
			 <td> <input type="text" class="form-control" name="randqa15" id="randqa15"    value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd15" id="markstd15"  >
			   <option value="0">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			   <option value="-4">-4</option>
			   <option value="-6">-6</option>
			   <option value="-8">-8</option>
			   <option value="-12">-12</option>
			   <option value="-14">-14</option>
			   <option value="-16">-16</option>
			   <option value="-18">-18</option>
			   <option value="-20">-20</option>
			 </select></td>
			</tr>
			 
			
			 <tr>
			<td colspan='4' align='center'><input type="submit" class="btn btn-primary" name="unitquality" id="unitquality" value='Unit Quality Rating' ></td>
			 <td style="background:#ffffff;"><!-- <span id="sum" style="font-weight:bold;">0</span> --><input type="text" name="sum"id="sum" style="font-weight:bold;"></td>
			</tr>
			</table>
			</div> 
			
			
			
			
			
			
			
			
			
			
			
			   <?php //}
			   } ?>
			
			</form>
		    <div class="col-sm-1 col-md-1 col-lg-1"></div> 
		  
		  
		  
		   </div>	  
		  
			
      </div>
	  

	  <script>
		  $(document).ready(function () {
			  $('[data-mdb-toggle="tooltip"]').tooltip();
		  });
	  </script>
	</body>
</html>
<?php
if(isset($_POST['unitquality'])){


date_default_timezone_get('Asia/Kolkata');

$date=date('Y-m-d');
$time=date('H:i:s');

$pcbwired_marks_qsm=$_POST['marksqsm1'];
$pcbwired_comment=$_POST['comment1'];
$pcbwired_name=$_POST['randqa1'];
$pcbwired_marks_td=$_POST['markstd1'];
$pcb_inspection_marks_qsm=$_POST['marksqsm2'];
$pcb_inspection_comment=$_POST['comment2'];
$pcb_inspection_name=$_POST['randqa2'];
$pcb_inspection_marks_td=$_POST['markstd2'];
$mechdimen_marks_qsm=$_POST['marksqsm3'];
$mechdimen_comment=$_POST['comment3'];
$mechdimen_name=$_POST['randqa3'];
$mechdimen_marks_td=$_POST['markstd3'];
$burnin_marks_qsm=$_POST['marksqsm4'];
$burnin_comment=$_POST['comment4'];
$burnin_name=$_POST['randqa4'];
$burnin_marks_td=$_POST['markstd4'];
$integration_qc_marks_qsm=$_POST['marksqsm5'];
$integration_qc_comment=$_POST['comment5'];
$integration_qc_name=$_POST['randqa5'];
$integration_qc_marks_td=$_POST['markstd5'];
$initial_func_marks_qsm=$_POST['marksqsm6'];
$initial_func_comment=$_POST['comment6'];
$initial_func_name=$_POST['randqa6'];
$initial_func_marks_td=$_POST['markstd6'];
$ess_marks_qsm=$_POST['marksqsm7'];
$ess_comment=$_POST['comment7'];
$ess_name=$_POST['randqa7'];
$ess_marks_td=$_POST['markstd7'];
$entest_marks_qsm=$_POST['marksqsm8'];
$entest_comment=$_POST['comment8'];
$entest_name=$_POST['randqa8'];
$entest_marks_td=$_POST['markstd8'];
$final_func_marks_qsm=$_POST['marksqsm9'];
$final_func_comment=$_POST['comment9'];
$final_func_name=$_POST['randqa9'];
$final_func_marks_td=$_POST['markstd9'];
$unit_never_opened_marks_qsm=$_POST['marksqsm10'];
$unit_never_opened_comment=$_POST['comment10'];
$unit_never_opened_name=$_POST['randqa10'];
$unit_never_opened_marks_td=$_POST['markstd10'];
$burnin_prob_marks_qsm=$_POST['marksqsm11'];
$burnin_prob_comment=$_POST['comment11'];
$burnin_prob_name=$_POST['randqa11'];
$burnin_prob_marks_td=$_POST['markstd11'];
$ess_prob_marks_qsm=$_POST['marksqsm12'];
$ess_prob_comment=$_POST['comment12'];
$ess_prob_name=$_POST['randqa12'];
$ess_prob_marks_td=$_POST['markstd12'];
$fab_marks_qsm=$_POST['marksqsm13'];
$fab_comment=$_POST['comment13'];
$fab_name=$_POST['randqa13'];
$fab_marks_td=$_POST['markstd13'];
$perform_dev_cert_td_marks_qsm=$_POST['marksqsm14'];
$perform_dev_cert_td_comment=$_POST['comment14'];
$perform_dev_cert_td_name=$_POST['randqa14'];
$perform_dev_cert_td_marks_td=$_POST['markstd14'];
$waiver_marks_qsm=$_POST['marksqsm15'];
$waiver_comment=$_POST['comment15'];
$waiver_name=$_POST['randqa15'];
$waiver_marks_td=$_POST['markstd15'];
$total=$_POST['sum'];

$query_upd=mysqli_query($con,"SELECT * FROM `uqr_status` ");
		    while( $row_upd=mysqli_fetch_array($query_upd)){
			       if($row_upd['product_id'] == $id){ 

				   $query="UPDATE `uqr_status` SET `pcbwired_marks_qsm`='".$pcbwired_marks_qsm."', `pcbwired_comment`='".$pcbwired_comment."', `pcbwired_name`='".$pcbwired_name."', `pcbwired_marks_td`='".$pcbwired_marks_td."', `pcb_inspection_marks_qsm`='".$pcb_inspection_marks_qsm."', `pcb_inspection_comment`='".$pcb_inspection_comment."', `pcb_inspection_name`='".$pcb_inspection_name."', `pcb_inspection_marks_td`='".$pcb_inspection_marks_td."', `mechdimen_marks_qsm`='".$mechdimen_marks_qsm."', `mechdimen_comment`='".$mechdimen_comment."', `mechdimen_name`='".$mechdimen_name."', `mechdimen_marks_td`='".$mechdimen_marks_td."', `burnin_marks_qsm`='".$burnin_marks_qsm."', `burnin_comment`='".$burnin_comment."', `burnin_name`='".$burnin_name."', `burnin_marks_td`='".$burnin_marks_td."', `integration_qc_marks_qsm`='".$integration_qc_marks_qsm."', `integration_qc_comment`='".$integration_qc_comment."', `integration_qc_name`='".$integration_qc_name."', `integration_qc_marks_td`='".$integration_qc_marks_td."', `initial_func_marks_qsm`='".$initial_func_marks_qsm."', `initial_func_comment`='".$initial_func_comment."', `initial_func_name`='".$initial_func_name."', `initial_func_marks_td`='".$initial_func_marks_td."', `ess_marks_qsm`='".$ess_marks_qsm."', `ess_comment`='".$ess_comment."', `ess_name`='".$ess_name."', `ess_marks_td`='".$ess_marks_td."', `entest_marks_qsm`='".$entest_marks_qsm."', `entest_comment`='".$entest_comment."', `entest_name`='".$entest_name."', `entest_marks_td`='".$entest_marks_td."', `final_func_marks_qsm`='".$final_func_marks_qsm."', `final_func_comment`='".$final_func_comment."', `final_func_name`='".$final_func_name."',
				   `final_func_marks_td`='".$final_func_marks_td."', `unit_never_opened_marks_qsm`='".$unit_never_opened_marks_qsm."', `unit_never_opened_comment`='".$unit_never_opened_comment."', `unit_never_opened_name`='".$unit_never_opened_name."', `unit_never_opened_marks_td`='".$unit_never_opened_marks_td."', `burnin_prob_marks_qsm`='".$burnin_prob_marks_qsm."', `burnin_prob_comment`='".$burnin_prob_comment."', `burnin_prob_name`='".$burnin_prob_name."', `burnin_prob_marks_td`='".$burnin_prob_marks_td."', `ess_prob_marks_qsm`='".$ess_prob_marks_qsm."', `ess_prob_comment`='".$ess_prob_comment."', `ess_prob_name`='".$ess_prob_name."', `ess_prob_marks_td`='".$ess_prob_marks_td."', `fab_marks_qsm`='".$fab_marks_qsm."', `fab_comment`='".$fab_comment."', `fab_name`='".$fab_name."', `fab_marks_td`='".$fab_marks_td."', `perform_dev_cert_td_marks_qsm`='".$perform_dev_cert_td_marks_qsm."', `perform_dev_cert_td_comment`='".$perform_dev_cert_td_comment."', `perform_dev_cert_td_name`='".$perform_dev_cert_td_name."', `perform_dev_cert_td_marks_td`='".$perform_dev_cert_td_marks_td."', `waiver_marks_qsm`='".$waiver_marks_qsm."', `waiver_comment`='".$waiver_comment."', `waiver_name`='".$waiver_name."', `waiver_marks_td`='".$waiver_marks_td."', `total`='".$total."', `inserted_date`='".$date."', `inserted_time`='".$time."' WHERE `product_id`='".$id."'";


				   }else{
$query="INSERT INTO `uqr_status`(`product_id`, `pcbwired_marks_qsm`, `pcbwired_comment`, `pcbwired_name`, `pcbwired_marks_td`, `pcb_inspection_marks_qsm`, `pcb_inspection_comment`, `pcb_inspection_name`, `pcb_inspection_marks_td`, `mechdimen_marks_qsm`, `mechdimen_comment`, `mechdimen_name`, `mechdimen_marks_td`, `burnin_marks_qsm`, `burnin_comment`, `burnin_name`, `burnin_marks_td`, `integration_qc_marks_qsm`, `integration_qc_comment`, `integration_qc_name`, `integration_qc_marks_td`, `initial_func_marks_qsm`, `initial_func_comment`, `initial_func_name`, `initial_func_marks_td`, `ess_marks_qsm`, `ess_comment`, `ess_name`, `ess_marks_td`, `entest_marks_qsm`, `entest_comment`, `entest_name`, `entest_marks_td`, `final_func_marks_qsm`, `final_func_comment`, `final_func_name`, `final_func_marks_td`, `unit_never_opened_marks_qsm`, `unit_never_opened_comment`, `unit_never_opened_name`, `unit_never_opened_marks_td`, `burnin_prob_marks_qsm`, `burnin_prob_comment`, `burnin_prob_name`, `burnin_prob_marks_td`, `ess_prob_marks_qsm`, `ess_prob_comment`, `ess_prob_name`, `ess_prob_marks_td`, `fab_marks_qsm`, `fab_comment`, `fab_name`, `fab_marks_td`, `perform_dev_cert_td_marks_qsm`, `perform_dev_cert_td_comment`, `perform_dev_cert_td_name`, `perform_dev_cert_td_marks_td`, `waiver_marks_qsm`, `waiver_comment`, `waiver_name`, `waiver_marks_td`, `total`, `inserted_date`, `inserted_time`) VALUES 
('".$id."','".$pcbwired_marks_qsm."','".$pcbwired_comment."','".$pcbwired_name."','".$pcbwired_marks_td."','".$pcb_inspection_marks_qsm."','".$pcb_inspection_comment."','".$pcb_inspection_name."','".$pcb_inspection_marks_td."','".$mechdimen_marks_qsm."','".$mechdimen_comment."','".$mechdimen_name."','".$mechdimen_marks_td."','".$burnin_marks_qsm."','".$burnin_comment."','".$burnin_name."','".$burnin_marks_td."','".$integration_qc_marks_qsm."','".$integration_qc_comment."','".$integration_qc_name."','".$integration_qc_marks_td."','".$initial_func_marks_qsm."','".$initial_func_comment."','".$initial_func_name."','".$initial_func_marks_td."','".$ess_marks_qsm."','".$ess_comment."','".$ess_name."','".$ess_marks_td."','".$entest_marks_qsm."','".$entest_comment."','".$entest_name."','".$entest_marks_td."','".$final_func_marks_qsm."','".$final_func_comment."','".$final_func_name."','".$final_func_marks_td."','".$unit_never_opened_marks_qsm."','".$unit_never_opened_comment."','".$unit_never_opened_name."','".$unit_never_opened_marks_td."','".$burnin_prob_marks_qsm."','".$burnin_prob_comment."','".$burnin_prob_name."','".$burnin_prob_marks_td."','".$ess_prob_marks_qsm."','".$ess_prob_comment."','".$ess_prob_name."','".$ess_prob_marks_td."','".$fab_marks_qsm."','".$fab_comment."','".$fab_name."','".$fab_marks_td."','".$perform_dev_cert_td_marks_qsm."','".$perform_dev_cert_td_comment."','".$perform_dev_cert_td_name."','".$perform_dev_cert_td_marks_td."','".$waiver_marks_qsm."','".$waiver_comment."','".$waiver_name."','".$waiver_marks_td."','".$total."','".$date."','".$time."')";


				   }
				   
			}
//echo $query;

$exe_query=mysqli_query($con,$query);
if($exe_query)
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
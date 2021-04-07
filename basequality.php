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
		<title>Base Quantity</title>
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
	       
	      <!-- <div class="col-sm-12 col-md-12 col-lg-12">
		    
               <h1 align='center'>BASE QUALITY RATING (BQR)</h1>
           
		   </div>  -->
		   <div class="col-sm-12 col-md-12 col-lg-12" style="background-color:#0c85de;margin-top:10px;">
		   <div class="col-sm-2 col-md-2 col-lg-2 " style="margin:0px;padding:0px;"></div>
		   <div class="col-sm-8 col-md-8 col-lg-8">
               <h1 align='center'>BASE QUALITY RANKING</h1>
			    
           </div> 
		     <div class="col-sm-2 col-md-2 col-lg-2">
			 <h1 align='center'><a href="logout.php"><img src="images/logout.png" title="logout" style="width:30px;height:30px;"></a></h1>
			 </div>
		   </div> 
	       <div class="col-sm-12 col-md-12 col-lg-12" style="padding:0px;"> 
		     <div class="col-sm-2 col-md-2 col-lg-2">
		   <center><a href="markingproduct.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>"><button type="button" class="btn btn-success" name="home" id="home">Back To  Marking Product</button></a></center>
		   </div>
		     <div class="col-sm-8 col-md-8 col-lg-8"  style="background:#ffff9d;"> 
               <center> <h3 style="color:#ff0099;font-weight:bold; "> Selected Product Name is: <span styl><?php $que="SELECT * FROM `product_add` WHERE `sno`= '".$id."'"; 
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
			<div class="col-sm-10 col-md-10 col-lg-10">
			<form action="basequality.php?position=<?php echo $_GET['position'];?>&uname=<?php echo $_GET['uname'];?>" method="POST">
			<?PHP
			 $query_view=mysqli_query($con,"SELECT * FROM `bqr_status` WHERE product_id = '".$id."' ");
		    if( $row=mysqli_fetch_array($query_view)){

				   ?>
			
		    
			 <table class="table table-hover">
			  <tr  style="background: #c508ff;color: #fff;" >
			  <th>Activity Name</th>
			  <th>Marks by QSM</th>
			  <th>Comment</th>
			  <th>R&QA Rep</th>
			  <th> Marks by TD, DR&QA </th>
			  </tr>
			  <tr>
			 <td>PDR</td>
			 <td>
			 <select class="form-control" name="marksqsm1" id="marksqsm1"  >
			   <option value="">Please Select</option>
			   <option value="0"<?php if ($row['pdr_marks_qsm']=='0') echo "selected" ; ?>>0</option>
			   <option value="1"<?php if ($row['pdr_marks_qsm']=='1') echo "selected" ; ?> >1</option>
			   <option value="3"<?php if ($row['pdr_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			   <option value="6"<?php if($row['pdr_marks_qsm']=='6') echo "selected" ; ?>  >6</option>
			   <option value="10"<?php if ($row['pdr_marks_qsm']=='10') echo "selected" ; ?> >10</option>
			 </select>
			 </td>
			 <td>
			  <input type="text" class="form-control" name="comment1" id="comment1" value="<?php echo $row['pdr_comment'];?>"  />
			 </td>
			 <td> <input type="text" class="form-control" name="randqa1" id="randqa1" value="<?php echo $row['pdr_randqa_rep'];?>"  /></td>
			 <td>
			  <select class="form-control txt" name="markstd1" id="markstd1"  >
			   <option value="">Please Select</option>
			   <option value="0"<?php if ($row['pdr_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['pdr_marks_td']=='1') echo "selected" ; ?> >1</option>
			   <option value="3"<?php if ($row['pdr_marks_td']=='3') echo "selected" ; ?> >3</option>
			   <option value="6"<?php if($row['pdr_marks_td']=='6') echo "selected" ; ?>  >6</option>
			   <option value="10"<?php if ($row['pdr_marks_td']=='10') echo "selected" ; ?> >10</option>
			 </select>
			 </td>
			</tr>		
			<tr>
			 <td>Layout Clearance</td>
			 <td>
			 <select class="form-control" name="marksqsm2" id="marksqsm2"  >
			   <option value="">Please Select</option><?php echo $row['layout_marks_qsm'];?>
			   <option value="0"<?php if ($row['layout_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['layout_marks_qsm']=='1') echo "selected" ; ?> >1</option>
			   <option value="3"<?php if ($row['layout_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment2" id="comment2" value="<?php echo $row['layout_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa2" id="randqa2" value="<?php echo $row['layout_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd2" id="markstd2"  >
			   <option value="">Please Select</option><?php echo $row['layout_marks_td'];?>
			   <option value="0"<?php if ($row['layout_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['layout_marks_td']=='1') echo "selected" ; ?> >1</option>
			   <option value="3"<?php if ($row['layout_marks_td']=='3') echo "selected" ; ?> >3</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>PCB Analysis</td>
			 <td>
			 <select class="form-control" name="marksqsm3" id="marksqsm3" >
			   <option value="">Please Select</option><?php echo $row['pcb_marks_qsm'];?>
			   <option value="0"<?php if ($row['pcb_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['pcb_marks_qsm']=='1') echo "selected" ; ?> >1</option>
			   <option value="3"<?php if ($row['pcb_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			   <option value="5"<?php if ($row['pcb_marks_qsm']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment3" id="comment3" value="<?php echo $row['pcb_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa3" id="randqa3" value="<?php echo $row['pcb_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd3" id="markstd3"  >
			   <option value="">Please Select</option><?php echo $row['pcb_marks_td'];?>
			   <option value="0"<?php if ($row['pcb_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['pcb_marks_td']=='1') echo "selected" ; ?> >1</option>
			   <option value="3"<?php if ($row['pcb_marks_td']=='3') echo "selected" ; ?> >3</option>
			   <option value="5"<?php if ($row['pcb_marks_td']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>Mechanical Design Analysis</td>
			 <td>
			 <select class="form-control" name="marksqsm4" id="marksqsm4"  >
			   <option value="">Please Select</option><?php echo $row['mechdesign_marks_qsm'];?>
			   <option value="0"<?php if ($row['mechdesign_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['mechdesign_marks_qsm']=='1') echo "selected" ; ?> >1</option>
			   <option value="3"<?php if ($row['mechdesign_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			   <option value="5"<?php if ($row['mechdesign_marks_qsm']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment4" id="comment4" value="<?php echo $row['mechdesign_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa4" id="randqa4" value="<?php echo $row['mechdesign_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd4" id="markstd4" >
			   <option value="">Please Select</option><?php echo $row['mechdesign_marks_td'];?>
			   <option value="0"<?php if ($row['mechdesign_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['mechdesign_marks_td']=='1') echo "selected" ; ?> >1</option>
			   <option value="3"<?php if ($row['mechdesign_marks_td']=='3') echo "selected" ; ?> >3</option>
			   <option value="5"<?php if ($row['mechdesign_marks_td']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Group A Certificate Produced</td>
			 <td>
			 <select class="form-control" name="marksqsm5" id="marksqsm5" >
			   <option value="">Please Select</option><?php echo $row['group_a_marks_qsm'];?>
			   <option value="0"<?php if ($row['group_a_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['group_a_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment5" id="comment5" value="<?php echo $row['group_a_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa5" id="randqa5" value="<?php echo $row['group_a_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd5" id="markstd5" >
			   <option value="">Please Select</option><?php echo $row['group_a_marks_td'];?>
			   <option value="0"<?php if ($row['group_a_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['group_a_marks_td']=='3') echo "selected" ; ?> >3</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Group B Certificate Produced</td>
			 <td>
			 <select class="form-control" name="marksqsm6" id="marksqsm6" >
			   <option value="">Please Select</option><?php echo $row['group_b_marks_qsm'];?>
			   <option value="0"<?php if ($row['group_b_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="5"<?php if ($row['group_b_marks_qsm']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment6" id="comment6" value="<?php echo $row['group_b_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa6" id="randqa6" value="<?php echo $row['group_b_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd6" id="markstd6" >
			   <option value="">Please Select</option><?php echo $row['group_b_marks_td'];?>
			   <option value="0"<?php if ($row['group_b_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="5"<?php if ($row['group_b_marks_td']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Thermal Design Analysis</td>
			 <td>
			 <select class="form-control" name="marksqsm7" id="marksqsm7" >
			   <option value="">Please Select</option><?php echo $row['bbt_marks_qsm'];?>
			   <option value="0"<?php if ($row['bbt_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="5"<?php if ($row['bbt_marks_qsm']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment7" id="comment7" value="<?php echo $row['bbt_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa7" id="randqa7" value="<?php echo $row['bbt_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd7" id="markstd7" >
			   <option value="">Please Select</option><?php echo $row['bbt_marks_td'];?>
			   <option value="0"<?php if ($row['bbt_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="5"<?php if ($row['bbt_marks_td']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Packing Analysis Clearance</td>
			 <td>
			 <select class="form-control" name="marksqsm8" id="marksqsm8" >
			   <option value="">Please Select</option><?php echo $row['packing_marks_qsm'];?>
			   <option value="0"<?php if ($row['packing_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['packing_marks_qsm']=='1') echo "selected" ; ?> >1</option>
			   <option value="2"<?php if ($row['packing_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['packing_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment8" id="comment8" value="<?php echo $row['packing_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa8" id="randqa8" value="<?php echo $row['packing_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd8" id="markstd8"  >
			   <option value="">Please Select</option><?php echo $row['packing_marks_td'];?>
			   <option value="0"<?php if ($row['packing_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['packing_marks_td']=='1') echo "selected" ; ?> >1</option>
			   <option value="2"<?php if ($row['packing_marks_td']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['packing_marks_td']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>QAP Document Approved</td>
			<td>
			 <select class="form-control" name="marksqsm9" id="marksqsm9"  >
			   <option value="">Please Select</option><?php echo $row['qap_marks_qsm'];?>
			   <option value="0"<?php if ($row['qap_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['qap_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['qap_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment9" id="comment9" value="<?php echo $row['qap_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa9" id="randqa9" value="<?php echo $row['qap_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd9" id="markstd9"  >
			   <option value="">Please Select</option><?php echo $row['qap_marks_td'];?>
			   <option value="0"<?php if ($row['qap_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['qap_marks_td']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['qap_marks_td']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>BOM Document Approved</td>
			 <td>
			 <select class="form-control" name="marksqsm10" id="marksqsm10"  >
			   <option value="">Please Select</option><?php echo $row['bom_marks_qsm'];?>
			   <option value="0"<?php if ($row['bom_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['bom_marks_qsm']=='1') echo "selected" ; ?> >1</option>
			   <option value="2"<?php if ($row['bom_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment10" id="comment10" value="<?php echo $row['bom_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa10" id="randqa10" value="<?php echo $row['bom_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd10" id="markstd10"  >
			   <option value="">Please Select</option><?php echo $row['bom_marks_td'];?>
			   <option value="0"<?php if ($row['bom_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="1"<?php if ($row['bom_marks_td']=='1') echo "selected" ; ?> >1</option>
			   <option value="2"<?php if ($row['bom_marks_td']=='2') echo "selected" ; ?> >2</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Integration Process Document Approved</td>
			 <td>
			 <select class="form-control" name="marksqsm11" id="marksqsm11"  >
			   <option value="">Please Select</option><?php echo $row['integration_approved_marks_qsm'];?>
			   <option value="0"<?php if ($row['integration_approved_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['integration_approved_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['integration_approved_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment11" id="comment11" value="<?php echo $row['integration_approved_comment'];?>" /></td>
			 <td> <input type="text" class="form-control" name="randqa11" id="randqa11" value="<?php echo $row['integration_approved_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd11" id="markstd11"  >
			   <option value="">Please Select</option><?php echo $row['integration_approved_marks_td'];?>
			   <option value="0"<?php if ($row['integration_approved_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['integration_approved_marks_td']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['integration_approved_marks_td']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>QT/AT/SOFT Document Approved</td>
			 <td>
			 <select class="form-control" name="marksqsm12" id="marksqsm12"  >
			   <option value="">Please Select</option><?php echo $row['qtatsoft_approved_marks_qsm'];?>
			   <option value="0"<?php if ($row['qtatsoft_approved_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['qtatsoft_approved_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			   <option value="5"<?php if ($row['qtatsoft_approved_marks_qsm']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment12" id="comment12" value="<?php echo $row['qtatsoft_approved_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa12" id="randqa12" value="<?php echo $row['qtatsoft_approved_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd12" id="markstd12"  >
			   <option value="">Please Select</option><?php echo $row['qtatsoft_approved_marks_td'];?>
			   <option value="0"<?php if ($row['qtatsoft_approved_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['qtatsoft_approved_marks_td']=='2') echo "selected" ; ?> >2</option>
			   <option value="5"<?php if ($row['qtatsoft_approved_marks_td']=='5') echo "selected" ; ?> >5</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Raw Material</td>
			<td>
			 <select class="form-control"  name="marksqsm13" id="marksqsm13" >
			   <option value="">Please Select</option><?php echo $row['rawmat_marks_qsm'];?>
			   <option value="0"<?php if ($row['rawmat_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['rawmat_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['rawmat_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			   <option value="6"<?php if ($row['rawmat_marks_qsm']=='6') echo "selected" ; ?> >6</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment13" id="comment13" value="<?php echo $row['rawmat_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa13" id="randqa13" value="<?php echo $row['rawmat_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd13" id="markstd13"  >
			   <option value="">Please Select</option><?php echo $row['rawmat_marks_td'];?>
			   <option value="0"<?php if ($row['rawmat_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['rawmat_marks_td']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['rawmat_marks_td']=='4') echo "selected" ; ?> >4</option>
			   <option value="6"<?php if ($row['rawmat_marks_td']=='6') echo "selected" ; ?> >6</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>EMI/EMC</td>
			 <td>
			 <select class="form-control" name="marksqsm14" id="marksqsm14"  >
			   <option value="">Please Select</option><?php echo $row['emi_emc_marks_qsm'];?>
			   <option value="0"<?php if ($row['emi_emc_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['emi_emc_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['emi_emc_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			   <option value="6"<?php if ($row['emi_emc_marks_qsm']=='6') echo "selected" ; ?> >6</option>
			   <option value="8"<?php if ($row['emi_emc_marks_qsm']=='8') echo "selected" ; ?> >8</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment14" id="comment14" value="<?php echo $row['emi_emc_comment'];?>" /></td>
			 <td> <input type="text" class="form-control" name="randqa14" id="randqa14" value="<?php echo $row['emi_emc_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd14" id="markstd14"  >
			   <option value="">Please Select</option><?php echo $row['emi_emc_marks_td'];?>
			   <option value="0"<?php if ($row['emi_emc_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['emi_emc_marks_td']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['emi_emc_marks_td']=='4') echo "selected" ; ?> >4</option>
			   <option value="6"<?php if ($row['emi_emc_marks_td']=='6') echo "selected" ; ?> >6</option>
			   <option value="8"<?php if ($row['emi_emc_marks_td']=='8') echo "selected" ; ?> >8</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Major QT Completd</td>
			 <td>
			 <select class="form-control" name="marksqsm15" id="marksqsm15"  >
			   <option value="">Please Select</option><?php echo $row['majorqt_marks_qsm'];?>
			   <option value="0"<?php if ($row['majorqt_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['majorqt_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			   <option value="6"<?php if ($row['majorqt_marks_qsm']=='6') echo "selected" ; ?> >6</option>
			   <option value="9"<?php if ($row['majorqt_marks_qsm']=='9') echo "selected" ; ?> >9</option>
			   <option value="12"<?php if ($row['majorqt_marks_qsm']=='12') echo "selected" ; ?> >12</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment15" id="comment15" value="<?php echo $row['majorqt_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa15" id="randqa15" value="<?php echo $row['majorqt_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd15" id="markstd15"  >
			   <option value="">Please Select</option><?php echo $row['majorqt_marks_td'];?>
			   <option value="0"<?php if ($row['majorqt_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['majorqt_marks_td']=='3') echo "selected" ; ?> >3</option>
			   <option value="6"<?php if ($row['majorqt_marks_td']=='6') echo "selected" ; ?> >6</option>
			   <option value="9"<?php if ($row['majorqt_marks_td']=='9') echo "selected" ; ?> >9</option>
			   <option value="12"<?php if ($row['majorqt_marks_td']=='12') echo "selected" ; ?> >12</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>CDR Conducted</td>
			<td>
			 <select class="form-control" name="marksqsm16" id="marksqsm16"  >
			   <option value="">Please Select</option><?php echo $row['cdr_marks_qsm'];?>
			   <option value="0"<?php if ($row['cdr_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['cdr_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			   <option value="7"<?php if ($row['cdr_marks_qsm']=='7') echo "selected" ; ?> >7</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment16" id="comment16" value="<?php echo $row['cdr_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa16" id="randqa16" value="<?php echo $row['cdr_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd16" id="markstd16"  >
			   <option value="">Please Select</option><?php echo $row['cdr_marks_td'];?>
			   <option value="0"<?php if ($row['cdr_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['cdr_marks_td']=='3') echo "selected" ; ?> >3</option>
			   <option value="7"<?php if ($row['cdr_marks_td']=='7') echo "selected" ; ?> >7</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Reliability Analysis Done</td>
			 <td>
			 <select class="form-control" name="marksqsm17" id="marksqsm17"  >
			   <option value="">Please Select</option><?php echo $row['reliability_marks_qsm'];?>
			   <option value="0"<?php if ($row['reliability_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['reliability_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['reliability_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment17" id="comment17" value="<?php echo $row['reliability_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa17" id="randqa17" value="<?php echo $row['reliability_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd17" id="markstd17" >
			   <option value="">Please Select</option><?php echo $row['reliability_marks_td'];?>
			   <option value="0"<?php if ($row['reliability_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['reliability_marks_td']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['reliability_marks_td']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Derating Analysis,FMECA ,FMEA</td>
			 <td>
			 <select class="form-control" name="marksqsm18" id="marksqsm18"  >
			   <option value="">Please Select</option><?php echo $row['fmeca_marks_qsm'];?>
			   <option value="0"<?php if ($row['fmeca_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['fmeca_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['fmeca_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment18" id="comment18" value="<?php echo $row['fmeca_comment'];?>"/></td>
			 <td> <input type="text" class="form-control" name="randqa18" id="randqa18" value="<?php echo $row['fmeca_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd18" id="markstd18"  >
			   <option value="">Please Select</option><?php echo $row['fmeca_marks_td'];?>
			   <option value="0"<?php if ($row['fmeca_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['fmeca_marks_td']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['fmeca_marks_td']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>SDRC, if any or No Design Change</td>
			 <td>
			 <select class="form-control" name="marksqsm19" id="marksqsm19"  >
			   <option value="">Please Select</option><?php echo $row['sdrc_marks_qsm'];?>
			   <option value="0"<?php if ($row['sdrc_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['sdrc_marks_qsm']=='3') echo "selected" ; ?> >3</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment19" id="comment19" value="<?php echo $row['sdrc_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa19" id="randqa19" value="<?php echo $row['sdrc_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd19" id="markstd19" >
			   <option value="">Please Select</option><?php echo $row['sdrc_marks_td'];?>
			   <option value="0"<?php if ($row['sdrc_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="3"<?php if ($row['sdrc_marks_td']=='3') echo "selected" ; ?> >3</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>PDR Minutes of Meeting Action Point Compliance</td>
			 <td>
			 <select class="form-control" name="marksqsm20" id="marksqsm20" >
			   <option value="">Please Select</option><?php echo $row['pdr_minutes_marks_qsm'];?>
			   <option value="0"<?php if ($row['pdr_minutes_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['pdr_minutes_marks_qsm']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['pdr_minutes_marks_qsm']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment20" id="comment20" value="<?php echo $row['pdr_minutes_comment'];?>" /></td>
			 <td> <input type="text" class="form-control" name="randqa20" id="randqa20" value="<?php echo $row['pdr_minutes_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd20" id="markstd20" >
			   <option value="">Please Select</option><?php echo $row['pdr_minutes_marks_td'];?>
			   <option value="0"<?php if ($row['pdr_minutes_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="2"<?php if ($row['pdr_minutes_marks_td']=='2') echo "selected" ; ?> >2</option>
			   <option value="4"<?php if ($row['pdr_minutes_marks_td']=='4') echo "selected" ; ?> >4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Packaging Recomendations Non Compliance</td>
			<td>
			 <select class="form-control" name="marksqsm21" id="marksqsm21"  >
			   <option value="">Please Select</option><?php echo $row['packing_recomm_marks_qsm'];?>
			   <option value="0"<?php if ($row['packing_recomm_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['packing_recomm_marks_qsm']=='-2') echo "selected" ; ?> >-2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment21" id="comment21" value="<?php echo $row['packing_recomm_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa21" id="randqa21" value="<?php echo $row['packing_recomm_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd21" id="markstd21" >
			   <option value="">Please Select</option><?php echo $row['packing_recomm_marks_td'];?>
			   <option value="0"<?php if ($row['packing_recomm_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['packing_recomm_marks_td']=='-2') echo "selected" ; ?> >-2</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>PDR After Units are Ready</td>
			<td>
			 <select class="form-control" name="marksqsm22" id="marksqsm22"  >
			   <option value="">Please Select</option><?php echo $row['pdr_units_marks_qsm'];?>
			   <option value="0"<?php if ($row['pdr_units_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['pdr_units_marks_qsm']=='-2') echo "selected" ; ?> >-5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment22" id="comment22" value="<?php echo $row['pdr_units_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa22" id="randqa22" value="<?php echo $row['pdr_units_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd22" id="markstd22"  >
			   <option value="">Please Select</option><?php echo $row['pdr_units_marks_td'];?>
			   <option value="0"<?php if ($row['pdr_units_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['pdr_units_marks_td']=='-2') echo "selected" ; ?> >-5</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>QAP Document Delayed Release</td>
			<td>
			 <select class="form-control" name="marksqsm23" id="marksqsm23" >
			   <option value="">Please Select</option><?php echo $row['qap_delayed_marks_qsm'];?>
			   <option value="0"<?php if ($row['qap_delayed_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['qap_delayed_marks_qsm']=='-2') echo "selected" ; ?> >-2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment23" id="comment23" value="<?php echo $row['qap_delayed_comment'];?>" /></td>
			 <td> <input type="text" class="form-control" name="randqa23" id="randqa23" value="<?php echo $row['qap_delayed_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd23" id="markstd23"  >
			   <option value="">Please Select</option><?php echo $row['qap_delayed_marks_td'];?>
			   <option value="0"<?php if ($row['qap_delayed_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['qap_delayed_marks_td']=='-2') echo "selected" ; ?> >-2</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>Integration Process Doc Delayed Release</td>
			<td>
			 <select class="form-control" name="marksqsm24" id="marksqsm24"  >
			   <option value="">Please Select</option><?php echo $row['integration_delayed_marks_qsm'];?>
			   <option value="0"<?php if ($row['integration_delayed_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['integration_delayed_marks_qsm']=='-2') echo "selected" ; ?> >-2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment24" id="comment24" value="<?php echo $row['integration_delayed_comment'];?>"  /></td>
			 <td> <input type="text" class="form-control" name="randqa24" id="randqa24" value="<?php echo $row['integration_delayed_randqa_rep'];?>" /></td>
			 <td>
			 <select class="form-control txt" name="markstd24" id="markstd24" >
			   <option value="">Please Select</option><?php echo $row['integration_delayed_marks_td'];?>
			   <option value="0"<?php if ($row['integration_delayed_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['integration_delayed_marks_td']=='-2') echo "selected" ; ?> >-2</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>QT/AT Document Delayed</td>
			<td>
			 <select class="form-control" name="marksqsm25" id="marksqsm25" >
			   <option value="">Please Select</option><?php echo $row['qtatdoc_delayed_marks_qsm'];?>
			   <option value="0"<?php if ($row['qtatdoc_delayed_marks_qsm']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['qtatdoc_delayed_marks_qsm']=='-2') echo "selected" ; ?> >-2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment25" id="comment25" value="<?php echo $row['qtatdoc_delayed_comment'];?>" /></td>
			 <td> <input type="text" class="form-control" name="randqa25" id="randqa25" value="<?php echo $row['qtatdoc_delayed_randqa_rep'];?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd25" id="markstd25"  >
			   <option value="">Please Select</option><?php echo $row['qtatdoc_delayed_marks_td'];?>
			   <option value="0"<?php if ($row['qtatdoc_delayed_marks_td']=='0') echo "selected" ; ?> >0</option>
			   <option value="-2"<?php if ($row['qtatdoc_delayed_marks_td']=='-2') echo "selected" ; ?> >-2</option>
			 </select></td>
			</tr>
			
			 <tr>
			<td colspan='4' align='center'><input type="submit" class="btn btn-primary" name="basequality" id="basequality" value='Base Quality Rating' ></td>
			<td style="background:#ffffff;"> <!--<span id="sum" name="sum" style="font-weight:bold;">0</span>-->	
			<input type="text" class="form-control" name="sum" id="sum"  value="<?php echo $row['total'];?>" readonly /></td>
			</tr>
			</table>

			
				   <?php } 
				   else{ ?>
			
			
			
				<!--		</div> 
		    <div class="col-sm-10 col-md-10 col-lg-10">-->
			 <table class="table table-hover">
			  <tr  style="background: #c508ff;color: #fff;" >
			  <th>Activity Name</th>
			  <th>Marks by QSM</th>
			  <th>Comment</th>
			  <th>R&QA Rep</th>
			  <th> Marks by TD, DR&QA </th>
			  </tr>
			  <tr>
			 <td>PDR</td>
			 <td>
			 <select class="form-control" name="marksqsm1" id="marksqsm1"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="3">3</option>
			   <option value="6">6</option>
			   <option value="10">10</option>
			 </select>
			 </td>
			 <td>
			  <input type="text" class="form-control" name="comment1" id="comment1"  />
			 </td>
			 <td> <input type="text" class="form-control" name="randqa1" id="randqa1"  value="<?php echo $user;?>"  /></td>
			 <td>
			  <select class="form-control txt" name="markstd1" id="markstd1" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="3">3</option>
			   <option value="6">6</option>
			   <option value="10">10</option>
			 </select>
			 </td>
			</tr>
			
			
			<tr>
			 <td>Layout Clearance</td>
			 <td>
			 <select class="form-control" name="marksqsm2" id="marksqsm2"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="3">3</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment2" id="comment2" /></td>
			 <td> <input type="text" class="form-control" name="randqa2" id="randqa2" value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd2" id="markstd2"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="3">3</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>PCB Analysis</td>
			 <td>
			 <select class="form-control" name="marksqsm3" id="marksqsm3"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="3">3</option>
			   <option value="5">5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment3" id="comment3"  /></td>
			 <td> <input type="text" class="form-control" name="randqa3" id="randqa3"  value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd3" id="markstd3" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="3">3</option>
			   <option value="5">5</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>Mechanical Design Analysis</td>
			 <td>
			 <select class="form-control" name="marksqsm4" id="marksqsm4"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="3">3</option>
			   <option value="5">5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment4" id="comment4"  /></td>
			 <td> <input type="text" class="form-control" name="randqa4" id="randqa4"  value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd4" id="markstd4">
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="3">3</option>
			   <option value="5">5</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Group A Certificate Produced</td>
			 <td>
			 <select class="form-control" name="marksqsm5" id="marksqsm5"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment5" id="comment5"  /></td>
			 <td> <input type="text" class="form-control" name="randqa5" id="randqa5"  value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd5" id="markstd5" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Group B Certificate Produced</td>
			 <td>
			 <select class="form-control" name="marksqsm6" id="marksqsm6" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="5">5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment6" id="comment6"  /></td>
			 <td> <input type="text" class="form-control" name="randqa6" id="randqa6"  value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd6" id="markstd6" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="5">5</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>BBT Clearance</td>
			 <td>
			 <select class="form-control" name="marksqsm7" id="marksqsm7"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment7" id="comment7" /></td>
			 <td> <input type="text" class="form-control" name="randqa7" id="randqa7"  value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd7" id="markstd7" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Packing Analysis Clearance</td>
			 <td>
			 <select class="form-control" name="marksqsm8" id="marksqsm8" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment8" id="comment8"  /></td>
			 <td> <input type="text" class="form-control" name="randqa8" id="randqa8"  value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd8" id="markstd8" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>QAP Document Approved</td>
			<td>
			 <select class="form-control" name="marksqsm9" id="marksqsm9"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment9" id="comment9"  /></td>
			 <td> <input type="text" class="form-control" name="randqa9" id="randqa9"  value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd9" id="markstd9">
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>BOM Document Approved</td>
			 <td>
			 <select class="form-control" name="marksqsm10" id="marksqsm10"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="2">2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment10" id="comment10" /></td>
			 <td> <input type="text" class="form-control" name="randqa10" id="randqa10"  value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd10" id="markstd10">
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="1">1</option>
			   <option value="2">2</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Integration Process Document Approved</td>
			 <td>
			 <select class="form-control" name="marksqsm11" id="marksqsm11"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment11" id="comment11"  /></td>
			 <td> <input type="text" class="form-control" name="randqa11" id="randqa11"  value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd11" id="markstd11">
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>QT/AT/SOFT Document Approved</td>
			 <td>
			 <select class="form-control" name="marksqsm12" id="marksqsm12"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="5">5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment12" id="comment12"  /></td>
			 <td> <input type="text" class="form-control" name="randqa12" id="randqa12"  value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd12" id="markstd12"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="5">5</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Raw Material</td>
			<td>
			 <select class="form-control"  name="marksqsm13" id="marksqsm13" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			   <option value="6">6</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment13" id="comment13"  /></td>
			 <td> <input type="text" class="form-control" name="randqa13" id="randqa13"  value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd13" id="markstd13"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			   <option value="6">6</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>EMI/EMC</td>
			 <td>
			 <select class="form-control" name="marksqsm14" id="marksqsm14"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			   <option value="6">6</option>
			   <option value="8">8</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment14" id="comment14"  /></td>
			 <td> <input type="text" class="form-control" name="randqa14" id="randqa14"   value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd14" id="markstd14" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			   <option value="6">6</option>
			   <option value="8">8</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Major QT Completd</td>
			 <td>
			 <select class="form-control" name="marksqsm15" id="marksqsm15"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			   <option value="6">6</option>
			   <option value="9">9</option>
			   <option value="12">12</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment15" id="comment15"  /></td>
			 <td> <input type="text" class="form-control" name="randqa15" id="randqa15"   value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd15" id="markstd15" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			   <option value="6">6</option>
			   <option value="9">9</option>
			   <option value="12">12</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>CDR Conducted</td>
			<td>
			 <select class="form-control" name="marksqsm16" id="marksqsm16"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			   <option value="7">7</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment16" id="comment16"  /></td>
			 <td> <input type="text" class="form-control" name="randqa16" id="randqa16"  value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd16" id="markstd16" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			   <option value="7">7</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Reliability Analysis Done</td>
			 <td>
			 <select class="form-control" name="marksqsm17" id="marksqsm17"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment17" id="comment17"  /></td>
			 <td> <input type="text" class="form-control" name="randqa17" id="randqa17"   value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd17" id="markstd17" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Derating Analysis,FMECA ,FMEA</td>
			 <td>
			 <select class="form-control" name="marksqsm18" id="marksqsm18"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment18" id="comment18"  /></td>
			 <td> <input type="text" class="form-control" name="randqa18" id="randqa18"   value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd18" id="markstd18" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>SDRC, if any or No Design Change</td>
			 <td>
			 <select class="form-control" name="marksqsm19" id="marksqsm19"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment19" id="comment19"  /></td>
			 <td> <input type="text" class="form-control" name="randqa19" id="randqa19"  value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd19" id="markstd19" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="3">3</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>PDR Minutes of Meeting Action Point Compliance</td>
			 <td>
			 <select class="form-control" name="marksqsm20" id="marksqsm20" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment20" id="comment20"  /></td>
			 <td> <input type="text" class="form-control" name="randqa20" id="randqa20"  value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd20" id="markstd20" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="2">2</option>
			   <option value="4">4</option>
			 </select></td>
			</tr>
			  <tr>
			 <td>Packaging Recomendations Non Compliance</td>
			<td>
			 <select class="form-control" name="marksqsm21" id="marksqsm21"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment21" id="comment21"  /></td>
			 <td> <input type="text" class="form-control" name="randqa21" id="randqa21"  value="<?php echo $user;?>"   /></td>
			 <td>
			 <select class="form-control txt" name="markstd21" id="markstd21" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>PDR After Units are Ready</td>
			<td>
			 <select class="form-control" name="marksqsm22" id="marksqsm22"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-5</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment22" id="comment22"  /></td>
			 <td> <input type="text" class="form-control" name="randqa22" id="randqa22"   value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd22" id="markstd22">
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-5</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>QAP Document Delayed Release</td>
			<td>
			 <select class="form-control" name="marksqsm23" id="marksqsm23" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment23" id="comment23" /></td>
			 <td> <input type="text" class="form-control" name="randqa23" id="randqa23"  value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd23" id="markstd23"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>Integration Process Doc Delayed Release</td>
			<td>
			 <select class="form-control" name="marksqsm24" id="marksqsm24"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment24" id="comment24"  /></td>
			 <td> <input type="text" class="form-control" name="randqa24" id="randqa24"   value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd24" id="markstd24" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			 </select></td>
			</tr>
			 <tr>
			 <td>QT/AT Document Delayed</td>
			<td>
			 <select class="form-control" name="marksqsm25" id="marksqsm25" >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			 </select></td>
			 <td> <input type="text" class="form-control" name="comment25" id="comment25" /></td>
			 <td> <input type="text" class="form-control" name="randqa25" id="randqa25"  value="<?php echo $user;?>"  /></td>
			 <td>
			 <select class="form-control txt" name="markstd25" id="markstd25"  >
			   <option value="">Please Select</option>
			   <option value="0">0</option>
			   <option value="-2">-2</option>
			 </select></td>
			</tr>
			
			 <tr>
			<td colspan='4' align='center'><input type="submit" class="btn btn-primary" name="basequality" id="basequality" value='Base Quality Rating' ></td>
			<td style="background:#ffffff;"><!-- <span id="sum" name="sum" style="font-weight:bold;">0</span>-->
			<input type="text" class="form-control" name="sum" id="sum"  /></td>
			</tr>
			</table>
			
			
			
			
			
			
			
			
				   <?php //} 
				   } ?>
			</form>
			</div>
		    <div class="col-sm-1 col-md-1 col-lg-1"></div> 
		  
		  
		  
		   </div>	  
		  
			
      </div>
	</body>
</html>
<?php
if(isset($_POST['basequality'])){

date_default_timezone_set('Asia/Kolkata');

$date=date('Y-m-d');
$time=date('H:i:s');

$pdr_marks_qsm=$_POST['marksqsm1'];
$pdr_comment=$_POST['comment1'];
$pdr_randqa_rep=$_POST['randqa1'];
$pdr_marks_td=$_POST['markstd1'];
$layout_marks_qsm=$_POST['marksqsm2'];
$layout_comment=$_POST['comment2'];
$layout_randqa_rep=$_POST['randqa2'];
$layout_marks_td=$_POST['markstd2'];
$pcb_marks_qsm=$_POST['marksqsm3'];
$pcb_comment=$_POST['comment3'];
$pcb_randqa_rep=$_POST['randqa3'];
$pcb_marks_td=$_POST['markstd3'];
$mechdesign_marks_qsm=$_POST['marksqsm4'];
$mechdesign_comment=$_POST['comment4'];
$mechdesign_randqa_rep=$_POST['randqa4'];
$mechdesign_marks_td=$_POST['markstd4'];
$group_a_marks_qsm=$_POST['marksqsm5'];
$group_a_comment=$_POST['comment5'];
$group_a_randqa_rep=$_POST['randqa5'];
$group_a_marks_td=$_POST['markstd5'];
$group_b_marks_qsm=$_POST['marksqsm6'];
$group_b_comment=$_POST['comment6'];
$group_b_randqa_rep=$_POST['randqa6'];
$group_b_marks_td=$_POST['markstd6'];
$bbt_marks_qsm=$_POST['marksqsm7'];
$bbt_comment=$_POST['comment7'];
$bbt_randqa_rep=$_POST['randqa7'];
$bbt_marks_td=$_POST['markstd7'];
$packing_marks_qsm=$_POST['marksqsm8'];
$packing_comment=$_POST['comment8'];
$packing_randqa_rep=$_POST['randqa8'];
$packing_marks_td=$_POST['markstd8'];
$qap_marks_qsm=$_POST['marksqsm9'];
$qap_comment=$_POST['comment9'];
$qap_randqa_rep=$_POST['randqa9'];
$qap_marks_td=$_POST['markstd9'];
$bom_marks_qsm=$_POST['marksqsm10'];
$bom_comment=$_POST['comment10'];
$bom_randqa_rep=$_POST['randqa10'];
$bom_marks_td=$_POST['markstd10'];
$integration_approved_marks_qsm=$_POST['marksqsm11'];
$integration_approved_comment=$_POST['comment11'];
$integration_approved_randqa_rep=$_POST['randqa11'];
$integration_approved_marks_td=$_POST['markstd11'];
$qtatsoft_approved_marks_qsm=$_POST['marksqsm12'];
$qtatsoft_approved_comment=$_POST['comment12'];
$qtatsoft_approved_randqa_rep=$_POST['randqa12'];
$qtatsoft_approved_marks_td=$_POST['markstd12'];
$rawmat_marks_qsm=$_POST['marksqsm13'];
$rawmat_comment=$_POST['comment13'];
$rawmat_randqa_rep=$_POST['randqa13'];
$rawmat_marks_td=$_POST['markstd13'];
$emi_emc_marks_qsm=$_POST['marksqsm14'];
$emi_emc_comment=$_POST['comment14'];
$emi_emc_randqa_rep=$_POST['randqa14'];
$emi_emc_marks_td=$_POST['markstd14'];
$majorqt_marks_qsm=$_POST['marksqsm15'];
$majorqt_comment=$_POST['comment15'];
$majorqt_randqa_rep=$_POST['randqa15'];
$majorqt_marks_td=$_POST['markstd15'];
$cdr_marks_qsm=$_POST['marksqsm16'];
$cdr_comment=$_POST['comment16'];
$cdr_randqa_rep=$_POST['randqa16'];
$cdr_marks_td=$_POST['markstd16'];
$reliability_marks_qsm=$_POST['marksqsm17'];
$reliability_comment=$_POST['comment17'];
$reliability_randqa_rep=$_POST['randqa17'];
$reliability_marks_td=$_POST['markstd17'];
$fmeca_marks_qsm=$_POST['marksqsm18'];
$fmeca_comment=$_POST['comment18'];
$fmeca_randqa_rep=$_POST['randqa18'];
$fmeca_marks_td=$_POST['markstd18'];
$sdrc_marks_qsm=$_POST['marksqsm19'];
$sdrc_comment=$_POST['comment19'];
$sdrc_randqa_rep=$_POST['randqa19'];
$sdrc_marks_td=$_POST['markstd19'];
$pdr_minutes_marks_qsm=$_POST['marksqsm20'];
$pdr_minutes_comment=$_POST['comment20'];
$pdr_minutes_randqa_rep=$_POST['randqa20'];
$pdr_minutes_marks_td=$_POST['markstd20'];
$packing_recomm_marks_qsm=$_POST['marksqsm21'];
$packing_recomm_comment=$_POST['comment21'];
$packing_recomm_randqa_rep=$_POST['randqa21'];
$packing_recomm_marks_td=$_POST['markstd21'];
$pdr_units_marks_qsm=$_POST['marksqsm22'];
$pdr_units_comment=$_POST['comment22'];
$pdr_units_randqa_rep=$_POST['randqa22'];
$pdr_units_marks_td=$_POST['markstd22'];
$qap_delayed_marks_qsm=$_POST['marksqsm23'];
$qap_delayed_comment=$_POST['comment23'];
$qap_delayed_randqa_rep=$_POST['randqa23'];
$qap_delayed_marks_td=$_POST['markstd23'];
$integration_delayed_marks_qsm=$_POST['marksqsm24'];
$integration_delayed_comment=$_POST['comment24'];
$integration_delayed_randqa_rep=$_POST['randqa24'];
$integration_delayed_marks_td=$_POST['markstd24'];
$qtatdoc_delayed_marks_qsm=$_POST['marksqsm25'];
$qtatdoc_delayed_comment=$_POST['comment25'];
$qtatdoc_delayed_randqa_rep=$_POST['randqa25'];
$qtatdoc_delayed_marks_td=$_POST['markstd25'];
$total=$_POST['sum'];
//echo $total;
$query_view=mysqli_query($con,"SELECT * FROM `bqr_status`");
		    while( $row=mysqli_fetch_array($query_view)){ 
			if($row['product_id'] == $id){
	$query="UPDATE `bqr_status` SET `pdr_marks_qsm`='".$pdr_marks_qsm."', `pdr_comment`='".$pdr_comment."', `pdr_randqa_rep`='".$pdr_randqa_rep."', `pdr_marks_td`='".$pdr_marks_td."', `layout_marks_qsm`='".$layout_marks_qsm."', `layout_comment`='".$layout_comment."', `layout_randqa_rep`='".$layout_comment."', `layout_marks_td`='".$layout_marks_td."', `pcb_marks_qsm`='".$pcb_marks_qsm."', `pcb_comment`='".$pcb_comment."', `pcb_randqa_rep`='".$pcb_randqa_rep."', `pcb_marks_td`='".$pcb_marks_td."', `mechdesign_marks_qsm`='".$mechdesign_marks_qsm."', `mechdesign_comment`='".$mechdesign_comment."', `mechdesign_randqa_rep`='".$mechdesign_randqa_rep."', `mechdesign_marks_td`='".$mechdesign_marks_td."', `group_a_marks_qsm`='".$group_a_marks_qsm."', `group_a_comment`='".$group_a_comment."', `group_a_randqa_rep`='".$group_a_randqa_rep."', `group_a_marks_td`='".$group_a_marks_td."', `group_b_marks_qsm`='".$group_b_marks_qsm."', `group_b_comment`='".$group_b_comment."', `group_b_randqa_rep`='".$group_b_randqa_rep."', `group_b_marks_td`='".$group_b_marks_td."', `bbt_marks_qsm`='".$bbt_marks_qsm."', `bbt_comment`='".$bbt_comment."', `bbt_randqa_rep`='".$bbt_randqa_rep."', `bbt_marks_td`='".$bbt_marks_td."', `packing_marks_qsm`='".$packing_marks_qsm."', `packing_comment`='".$packing_comment."', `packing_randqa_rep`='".$packing_randqa_rep."', `packing_marks_td`='".$packing_marks_td."', `qap_marks_qsm`='".$qap_marks_qsm."', `qap_comment`='".$qap_comment."', `qap_randqa_rep`='".$qap_randqa_rep."', `qap_marks_td`='".$qap_marks_td."', `bom_marks_qsm`='".$bom_marks_qsm."', `bom_comment`='".$bom_comment."', `bom_randqa_rep`='".$bom_randqa_rep."', `bom_marks_td`='".$bom_marks_td."', `integration_approved_marks_qsm`='".$integration_approved_marks_qsm."', `integration_approved_comment`='".$integration_approved_comment."', `integration_approved_randqa_rep`='".$integration_approved_randqa_rep."', `integration_approved_marks_td`='".$integration_approved_marks_td."', `qtatsoft_approved_marks_qsm`='".$qtatsoft_approved_marks_qsm."', `qtatsoft_approved_comment`='".$qtatsoft_approved_comment."', `qtatsoft_approved_randqa_rep`='".$qtatsoft_approved_randqa_rep."', `qtatsoft_approved_marks_td`='".$qtatsoft_approved_marks_td."', `rawmat_marks_qsm`='".$rawmat_marks_qsm."', `rawmat_comment`='".$rawmat_comment."',
	`rawmat_randqa_rep`='".$rawmat_randqa_rep."', `rawmat_marks_td`='".$rawmat_marks_td."', `emi_emc_marks_qsm`='".$emi_emc_marks_qsm."', `emi_emc_comment`='".$emi_emc_comment."', `emi_emc_randqa_rep`='".$emi_emc_randqa_rep."', `emi_emc_marks_td`='".$emi_emc_marks_td."', `majorqt_marks_qsm`='".$majorqt_marks_qsm."', `majorqt_comment`='".$majorqt_comment."', `majorqt_randqa_rep`='".$majorqt_randqa_rep."', `majorqt_marks_td`='".$majorqt_marks_td."', `cdr_marks_qsm`='".$cdr_marks_qsm."', `cdr_comment`='".$cdr_comment."', `cdr_randqa_rep`='".$cdr_randqa_rep."', `cdr_marks_td`='".$cdr_marks_td."', `reliability_marks_qsm`='".$reliability_marks_qsm."', `reliability_comment`='".$reliability_comment."', `reliability_randqa_rep`='".$reliability_randqa_rep."', `reliability_marks_td`='".$reliability_marks_td."', `fmeca_marks_qsm`='".$fmeca_marks_qsm."', `fmeca_comment`='".$fmeca_comment."', `fmeca_randqa_rep`='".$fmeca_randqa_rep."', `fmeca_marks_td`='".$fmeca_marks_td."', `sdrc_marks_qsm`='".$sdrc_marks_qsm."', `sdrc_comment`='".$sdrc_comment."', `sdrc_randqa_rep`='".$sdrc_randqa_rep."', `sdrc_marks_td`='".$sdrc_marks_td."', `pdr_minutes_marks_qsm`='".$pdr_minutes_marks_qsm."', `pdr_minutes_comment`='".$pdr_minutes_comment."', `pdr_minutes_randqa_rep`='".$pdr_minutes_randqa_rep."', `pdr_minutes_marks_td`='".$pdr_minutes_marks_td."', `packing_recomm_marks_qsm`='".$packing_recomm_marks_qsm."', `packing_recomm_comment`='".$packing_recomm_comment."', `packing_recomm_randqa_rep`='".$packing_recomm_randqa_rep."', `packing_recomm_marks_td`='".$packing_recomm_marks_td."', `pdr_units_marks_qsm`='".$pdr_units_marks_qsm."', `pdr_units_comment`='".$pdr_units_comment."', `pdr_units_randqa_rep`='".$pdr_units_randqa_rep."', `pdr_units_marks_td`='".$pdr_units_marks_td."', `qap_delayed_marks_qsm`='".$qap_delayed_marks_qsm."', `qap_delayed_comment`='".$qap_delayed_comment."', `qap_delayed_randqa_rep`='".$qap_delayed_randqa_rep."', `qap_delayed_marks_td`='".$qap_delayed_marks_td."', `integration_delayed_marks_qsm`='".$integration_delayed_marks_qsm."', `integration_delayed_comment`='".$integration_delayed_comment."', `integration_delayed_randqa_rep`='".$integration_delayed_randqa_rep."', `integration_delayed_marks_td`='".$integration_delayed_marks_td."', `qtatdoc_delayed_marks_qsm`='".$qtatdoc_delayed_marks_qsm."', `qtatdoc_delayed_comment`='".$qtatdoc_delayed_comment."', `qtatdoc_delayed_marks_td`='".$qtatdoc_delayed_marks_td."', `qtatdoc_delayed_marks_td`='".$qtatdoc_delayed_marks_td."', `total`='".$total."', `inserted_date`='".$date."', `inserted_time`='".$time."' WHERE `product_id`='".$id."' ";			   
			}
				   
				  else{
$query="INSERT INTO `bqr_status`(`product_id`,`pdr_marks_qsm`, `pdr_comment`, `pdr_randqa_rep`, `pdr_marks_td`, `layout_marks_qsm`, `layout_comment`, `layout_randqa_rep`, `layout_marks_td`, `pcb_marks_qsm`, `pcb_comment`, `pcb_randqa_rep`, `pcb_marks_td`, `mechdesign_marks_qsm`, `mechdesign_comment`, `mechdesign_randqa_rep`, `mechdesign_marks_td`, `group_a_marks_qsm`, `group_a_comment`, `group_a_randqa_rep`, `group_a_marks_td`, `group_b_marks_qsm`, `group_b_comment`, `group_b_randqa_rep`, `group_b_marks_td`, `bbt_marks_qsm`, `bbt_comment`, `bbt_randqa_rep`, `bbt_marks_td`, `packing_marks_qsm`, `packing_comment`, `packing_randqa_rep`, `packing_marks_td`, `qap_marks_qsm`, `qap_comment`, `qap_randqa_rep`, `qap_marks_td`, `bom_marks_qsm`, `bom_comment`, `bom_randqa_rep`, `bom_marks_td`, `integration_approved_marks_qsm`, `integration_approved_comment`, `integration_approved_randqa_rep`, `integration_approved_marks_td`, `qtatsoft_approved_marks_qsm`, `qtatsoft_approved_comment`, `qtatsoft_approved_randqa_rep`, `qtatsoft_approved_marks_td`, `rawmat_marks_qsm`, `rawmat_comment`, `rawmat_randqa_rep`, `rawmat_marks_td`, `emi_emc_marks_qsm`, `emi_emc_comment`, `emi_emc_randqa_rep`, `emi_emc_marks_td`, `majorqt_marks_qsm`, `majorqt_comment`, `majorqt_randqa_rep`, `majorqt_marks_td`, `cdr_marks_qsm`, `cdr_comment`, `cdr_randqa_rep`, `cdr_marks_td`, `reliability_marks_qsm`, `reliability_comment`, `reliability_randqa_rep`, `reliability_marks_td`, `fmeca_marks_qsm`, `fmeca_comment`, `fmeca_randqa_rep`, `fmeca_marks_td`, `sdrc_marks_qsm`, `sdrc_comment`, `sdrc_randqa_rep`, `sdrc_marks_td`, `pdr_minutes_marks_qsm`, `pdr_minutes_comment`, `pdr_minutes_randqa_rep`, `pdr_minutes_marks_td`, `packing_recomm_marks_qsm`, `packing_recomm_comment`, `packing_recomm_randqa_rep`, `packing_recomm_marks_td`, `pdr_units_marks_qsm`, `pdr_units_comment`, `pdr_units_randqa_rep`, `pdr_units_marks_td`, `qap_delayed_marks_qsm`, `qap_delayed_comment`, `qap_delayed_randqa_rep`, `qap_delayed_marks_td`, `integration_delayed_marks_qsm`, `integration_delayed_comment`, `integration_delayed_randqa_rep`, `integration_delayed_marks_td`, `qtatdoc_delayed_marks_qsm`, `qtatdoc_delayed_comment`, `qtatdoc_delayed_randqa_rep`, `qtatdoc_delayed_marks_td`, `total`, `inserted_date`, `inserted_time`) VALUES 
        ('".$id."','".$pdr_marks_qsm."','".$pdr_comment."','".$pdr_randqa_rep."','".$pdr_marks_td."','".$layout_marks_qsm."','".$layout_comment."','".$layout_randqa_rep."','".$layout_marks_td."','".$pcb_marks_qsm."','".$pcb_comment."','".$pcb_randqa_rep."','".$pcb_marks_td."','".$mechdesign_marks_qsm."','".$mechdesign_comment."','".$mechdesign_randqa_rep."','".$mechdesign_marks_td."','".$group_a_marks_qsm."','".$group_a_comment."','".$group_a_randqa_rep."','".$group_a_marks_td."','".$group_b_marks_qsm."','".$group_b_comment."','".$group_b_randqa_rep."','".$group_b_marks_td."','".$bbt_marks_qsm."','".$bbt_comment."','".$bbt_randqa_rep."','".$bbt_marks_td."','".$packing_marks_qsm."','".$packing_comment."','".$packing_randqa_rep."','".$packing_marks_td."','".$qap_marks_qsm."','".$qap_comment."','".$qap_randqa_rep."','".$qap_marks_td."','".$bom_marks_qsm."','".$bom_comment."','".$bom_randqa_rep."','".$bom_marks_td."','".$integration_approved_marks_qsm."','".$integration_approved_comment."','".$integration_approved_randqa_rep."','".$integration_approved_marks_td."','".$qtatsoft_approved_marks_qsm."','".$qtatsoft_approved_comment."','".$qtatsoft_approved_randqa_rep."','".$qtatsoft_approved_marks_td."','".$rawmat_marks_qsm."','".$rawmat_comment."','".$rawmat_randqa_rep."','".$rawmat_marks_td."','".$emi_emc_marks_qsm."','".$emi_emc_comment."','".$emi_emc_randqa_rep."','".$emi_emc_marks_td."','".$majorqt_marks_qsm."','".$majorqt_comment."','".$majorqt_randqa_rep."','".$majorqt_marks_td."','".$cdr_marks_qsm."','".$cdr_comment."','".$cdr_randqa_rep."','".$cdr_marks_td."','".$reliability_marks_qsm."','".$reliability_comment."','".$reliability_randqa_rep."','".$reliability_marks_td."','".$fmeca_marks_qsm."','".$fmeca_comment."','".$fmeca_randqa_rep."','".$fmeca_marks_td."','".$sdrc_marks_qsm."','".$sdrc_comment."','".$sdrc_randqa_rep."','".$sdrc_marks_td."','".$pdr_minutes_marks_qsm."','".$pdr_minutes_comment."','".$pdr_minutes_randqa_rep."','".$pdr_minutes_marks_td."','".$packing_recomm_marks_qsm."','".$packing_recomm_comment."','".$packing_recomm_randqa_rep."','".$packing_recomm_marks_td."','".$pdr_units_marks_qsm."','".$pdr_units_comment."','".$pdr_units_randqa_rep."','".$pdr_units_marks_td."','".$qap_delayed_marks_qsm."','".$qap_delayed_comment."','".$qap_delayed_randqa_rep."','".$qap_delayed_marks_td."','".$integration_delayed_marks_qsm."','".$integration_delayed_comment."','".$integration_delayed_randqa_rep."','".$integration_delayed_marks_td."','".$qtatdoc_delayed_marks_qsm."','".$qtatdoc_delayed_comment."','".$qtatdoc_delayed_randqa_rep."','".$qtatdoc_delayed_marks_td."','".$total."','".$date."','".$time."')";
				   }
				   }
						   				   
//echo $query;
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
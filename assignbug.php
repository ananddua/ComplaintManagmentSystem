<?php session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	if(isset($_GET['bid'])){$bid=$_GET['bid'];}
	include "connection.php";
	$sql="select * from bug_details where bug_id='$bid'";
	if(!$result=mysqli_query($conn,$sql)){die(mysql_error($conn));}
	while($row=mysqli_fetch_array($result)){
		$product_name=$row['product_name'];
		$date=$row['date'];
	}
?>
<html>
	<head>
		<title>Complaint Management System</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<style>
			#frm{margin:0px auto 0px auto;}
			td{padding:10px;}
		</style>
	</head>
	<body>
		<div id="header">
				<div class="logo"><a href="#"><span>Complaints </span>Management System</a></div>
	</div>
		<div id="container">
			<div class="sidebar">
				<ul id="nav">
					<li><a class="selected" href="index.php">Home</a></li>
					
					<li><a href="bugstoassign.php">Complaints To Assign</a></li>
					<li><a href="assignedbugs.php">Assigned Complaints</a></li>
				</ul>
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1><span><a href="logout.php">logout</a></span>
					
					<div id="box">
						<div class="box-top">
							<h2>View Records</h2>
						</div>
						<div class="box-panel">
							<form action="updatebug.php">
									<table id="frm">
									<tr>
									<td colspan="2" style="text-align:center;color:green;"><?php if(isset($_GET['success'])){echo $_GET['success'];} ?></td>
								</tr>
										<tr>
											<td><label>Complaint Id</label></td>
											<td><input type="text" name="bid" readonly="true" value="<?php echo $bid;?>"</td>
										</tr>
											<tr>
											<td><label>Product name</label></td>
											<td><input type="text" name="product_name" readonly="true" value="<?php echo $product_name;?>"</td>
										</tr>
											<tr>
											<td><label>Date</label></td>
											<td><input type="text" name="date" readonly="true" value="<?php echo $date;?>"</td>
										</tr>
											<tr>
											<td><label>Expected Date</label></td>
											<td><input type="date" name="edate" required/></td>
										</tr>
										<tr>
										<td><label>tech Name</label></td>
										<td><select name="tid">
										<option>select tech person</option>
									<?php
										$sql="select * from techperson_register";
										if(!$result=mysqli_query($conn,$sql)){die(mysqli_error());}
										while($row=mysqli_fetch_array($result)){
											$tid=$row['tid'];
											$tname=$row['tech_name'];
											echo "<option value=$tid>$tname</option>";
										}
									?>
									</td>
									</tr>
									</select>
									<tr>
										<td></td>
										<td><input type="submit" value="Assign"/></td>
									</tr>
									</table>
							</form>
						</div>
					</div>
			</div>
		</div>
		
	</body>
</html>
<?php }else{
	header("location:admin.php");
}?>

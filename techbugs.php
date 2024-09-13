<?php 
	session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	include 'connection.php';
	$sql="select * from techperson_register where username='$user'";
	if(!$result=mysqli_query($conn,$sql)){die(mysqli_error($conn));}
	while($row=mysqli_fetch_array($result)){
		$tid=$row['tid'];
	}
	
?>
<html>
	<head>
		<title>Complaint Management System</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<style>
			#frm{margin:0px auto 0px auto;}
			td{padding:10px;}
			th{color:#ccc;
	background-color:#2980b9;}
		</style>
	</head>
	<body>
		<div id="header">
			<div class="logo"><a href="#"><span>Complaints </span>Management System</a></div>
		</div>
		<div id="container">
			<div class="sidebar">
				
					<ul id="nav">
					<li><a class="selected" href="#">Home</a></li>
					
					<li><a href="techbugs.php">Complaints To Resolve</a></li>
							
				</ul>
				
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1><span><a href="logout.php">logout</a></span>
					
					<div id="box">
						<div class="box-top">
							<h2>My Complaints</h2>
						</div>
						<div class="box-panel">
								<table border="1" width="100%">
								<tr><th>Complaint Id </th>
									<th>Product Name</th>
									<th>Priority</th>
									<th>Details</th>
									<th>Date</th>
									<th>Expected Date</th>
								
								</tr>
									<?php
										$sql="select * from bug_details where tech_id='$tid'";
										if(!$result=mysqli_query($conn,$sql)){die(mysqli_error($conn));}
										while($row=mysqli_fetch_array($result)){
											$bid=$row['bug_id'];
											$pname=$row['product_name'];
											$priority=$row['priority'];
											$details=$row['details'];
											$date=$row['date'];
											$edate=$row['expected_date'];
										?>
										<tr>
											<td><?php echo $bid;?></td>
											<td><?php echo $pname;?></td>
											<td><?php echo $priority;?></td>
											<td><?php echo $details;?></td>
											<td><?php echo $date;?></td>
											<td><?php echo $edate;?></td>
											<td><a href="providesol.php?bid=<?php echo $bid; ?>">Provide solution</a></td>
										</tr>
										<?php										
										}
									?>
									</table>
							
						</div>
					</div>
			</div>
		</div>
		
	</body>
</html>
<?php }else{
	header("location:admin.php");
}?>

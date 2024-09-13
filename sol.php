<?php 
	session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	include 'connection.php';
	$bid=$_GET['p'];
	include 'connection.php';
	$sql="select * from bug_details where bug_id='$bid'";
	if(!$result=mysqli_query($conn,$sql)){die(mysqli_error($conn));}
	while($row=mysqli_fetch_array($result)){
		$sol=$row['solution'];
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
					
					<li><a href="newbugs.php">Post New Complaint</a></li>
					<li><a href="mybugs.php">My Complaints</a></li>
					
					
				</ul>
				
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1><span><a href="logout.php">logout</a></span>
					
					<div id="box">
						<div class="box-top">
							<h2>My Complaints</h2>
						</div>
						<div class="box-panel">
								<table id="frm">
								<form action="addsol.php"/>
									 <tr>
										<td><label>Solution is as follows: </label></td>
										<tr>
										<tr/>
										<td> <p style="color : Blue">
											<?php echo $sol;?></td>
									</tr>
									
								</form>	
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

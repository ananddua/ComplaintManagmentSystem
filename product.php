<?php session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	include 'connection.php';
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
					<li><a class="selected" href="#">Home</a></li>
					<li><a href="manager.php">Add Manager</a></li>
					<li><a href="product.php">Add Products</a></li>
					<li><a href="tech.php">Add Tech Person</a></li>
					
					
				</ul>
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1><span><a href="logout.php">logout</a></span>
					
					<div id="box">
						<div class="box-top">
							<h2>Add Products</h2>
						</div>
						<div class="box-panel">
							<form action="addproduct.php">
							<table id="frm">
							<tr>
									<td colspan="2" style="text-align:center;color:green;"><?php if(isset($_GET['success'])){echo $_GET['success'];} ?></td>
								</tr>
								<tr>
									<td><label>Product Name</label></td>
									<td><input type="text" name="pname" required/></td>
								</tr>
								<tr>
									<td><label>Version</label></td>
									<td><input type="text" name="version" required/></td>
								</tr>
								<tr>
									<td><label>Vendor</label></td>
									<td><input type="text" name="vendor" required/></td>
								</tr>
									<tr>
										<td><label>Manager Name</label></td>
										<td><select name="mid">
										<option>select manager</option>
									<?php
										$sql="select * from manager_register";
										if(!$result=mysqli_query($conn, $sql)){die(mysqli_error($conn));}
										while($row=mysqli_fetch_array($result)){
											$mid=$row['mid'];
											$mname=$row['manager_name'];
											echo "<option value=$mid>$mname</option>";
										}
									?>
									</select>
									</td>
									</tr>
								<tr>
									<td></td>
									<td><input type="submit" value="Insert"/></td>
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

<?php 
	session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	include 'connection.php';
?>
<html>
	<head>
		<title>Comaplaint Management System</title>
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
					<li><a href="manager.php">Add Manager</a></li>
					<li><a href="product.php">Add Products</a></li>
					<li><a href="tech.php">Add Tech Person</a></li>
					
					
				</ul>
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1><span><a href="logout.php">logout</a></span>
					
					<div id="box">
						<div class="box-top">
							<h2>Add Tech Person</h2>
						</div>
						<div class="box-panel">
							<form action="addtech.php">
							<table id="frm">
							<tr>
									<td colspan="2" style="text-align:center;color:green;"><?php if(isset($_GET['success'])){echo $_GET['success'];} ?></td>
								</tr>
								<tr>
									<td><label>Username</label></td>
									<td><input type="text" name="username" required/></td>
								</tr>
								<tr>
									<td><label>Password</label></td>
									<td><input type="password" name="password" required/></td>
								</tr>
								<tr>
									<td><label>Tech Person Name</label></td>
									<td><input type="text" name="tname" required/></td>
								</tr>
								<tr>
									<td><label>Address</label></td>
									<td><textarea name="address"></textarea></td>
								</tr>
								<tr>
									<td><label>Phno</label></td>
									<td><input type="text" name="phno" required/></td>
								</tr>
								<tr>
									<td><label>Email</label></td>
									<td><input type="email" name="email" required/></td>
								</tr>
									<tr>
										<td><label>Manager Name</label></td>
										<td><select name="mid">
										<option>select manager</option>
									<?php
										$sql="select * from manager_register";
										if(!$result=mysqli_query($conn,$sql)){die(mysqli_error($conn));}
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

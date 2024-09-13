<?php session_start();
include 'connection.php';
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	$sql="select * from customer_register where username='$user'";
	if(!$res=mysqli_query($conn,$sql)){die(mysqli_error($conn));}
	while($row=mysqli_fetch_array($res)){
	$id=$row['cid'];
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
					<li><a class="selected" href="#">Home</a></li>
					
					<li><a href="newbugs.php">Post New Complaint</a></li>
					<li><a href="mybugs.php">My Complaints</a></li>
					
					
				</ul>
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1><span><a href="logout.php">logout</a></span>
					
					<div id="box">
						<div class="box-top">
							<h2>Post New Complaint</h2>
						</div>
						<div class="box-panel">
							<form action="addnewbug.php">
							<table id="frm">
							<tr>
									<td colspan="2" style="text-align:center;color:green;"><?php if(isset($_GET['success'])){echo $_GET['success'];} ?></td>
								</tr>
								<tr>
										<td><label>Product Name</label></td>
										<td><select name="product_name">
										<option>select product</option>
										<option>computer</option>
									<?php
										$sql="select * from product_register";
										if(!$result=mysqli_query($conn,$sql)){die(mysqli_error($conn));}
										while($row=mysqli_fetch_array($result)){
											$pid=$row['pid'];
											$pname=$row['product_name'];
											
											echo "<option value=$pname>$pname</option>";
										}
									?>
									</select>
									</td>
									</tr>
								<tr>
									<td><label>Priority</label></td>
									<td><select name="priority">
										<option value="low">Low</option>
										<option value="medium">Medium</option>
										<option value="high">High</option>
									</select></td>
								</tr>
								<tr>
									<td><label>os</label></td>
									<td><input type="text" name="os" required/></td>
								</tr>
								<tr>
									<td><label>Software</label></td>
									<td><input type="text" name="software" required/></td>
								</tr>
								<tr>
									<td><label>Summary</label></td>
									<td><input type="text" name="summary" required/></td>
								</tr>
								<tr>
									<td><label>details</label></td>
									<td><textarea name="details"></textarea></td>
								</tr>
								
									<input type="hidden" name="cid" value="<?php echo $id;?>"/>
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

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
				<img src="images/um.gif" width="250px"/>
				<img src="images/1.jpg" width="250px"/>
				
				
				
			</div>
			<div class="content">
				<h1>Customer Signup</h1>
					
					<div id="box">
						<div class="box-top">
							<h2>Register Here</h2>
						</div>
						<div class="box-panel">
							<form action="addcustomer.php" method="GET">
							<table id="frm">
								<tr>
									<td colspan="2" style="text-align:center;color:green;"><?php if(isset($_GET['success'])){echo $_GET['success'];} ?> <?php if(isset($_GET['link'])){echo $_GET['link'];} ?></td>
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
									<td><label>Customer Name</label></td>
									<td><input type="text" name="cname" required/></td>
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

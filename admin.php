<html>
	<head>
		<title>Complaint Management System</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<style>
			table{border-top:1px solid red;}
			td{color:white;}
		</style>
	</head>
	<body>
		<div id="header">
				<div class="logo"><a href="#"><span>Complaints </span>Management System</a></div>
	</div>
		<div id="container">
			<div class="sidebar">
				
				<table width="100%">
					<form action="adminlogin.php" method="post">
					<tr>
						<td colspan="2" style="text-align:center;"><p style="color:red;"><?php if(isset($_GET['error'])){echo $_GET['error'];} ?><p></td>
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
						<td></td>
						<td><input type="submit" value="Login"/></td>
					</tr>
					</form>
				</table>
				
				<br/>
				<img src="images/2.png" width="250px"/>
			</div>
			<div class="content">
				<h1>Home Page</h1>
					<p>Content goes Here</p>
					<div id="box">
						<div class="box-top">
							<h2>News</h2>
						</div>
						<div class="box-panel">
							main content goes here
						</div>
					</div>
			</div>
		</div>
		
	</body>
</html>

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
	 		
			<div class="logo"><a href="index.php"><span> Complaints </span>Management System</a></div>
		</div>
		
		
		<div id="container">
			<div class="sidebar">
				
				<table width="100%">
					<form action="login.php" method="post">
					<tr>
						<td><label>Username</label></td>
						<td><input type="text" name="username" required/></td>
					</tr>
					
					<tr>
						<td><label>Password</label></td>
						<td><input type="password" name="password" required/></td>
					</tr>
					
					<tr>
						<td><label>Usertype</label></td>
						<td><select name="usertype">
						<option>Select usertype</option>
							<option value="customer">Customer</option>
							<option value="manager">Manager</option>
							<option value="techperson">Techperson</option>
						</select></td>
					</tr>
					<tr>
						<td><a style="color:yellow;" href="customerSignup.php">Register Here</a></td>
						<td><input type="submit" value="Login"/></td>
					</tr>
					</form>
				</table>  <br/>
<br/>
				<img src="images/2.png" alt="complaint Management System" Height="250px"/>
			</div>
			<div class="content">
			
				<!--
				<h1>Welcome </h1>  <marquee behavior="alternate">
					<h1 style="color:#FF0000 "><img src="images/image.gif" height=20></h1></marquee> 
					<p>Register your complaints about our product and get their solution from our solution providers</p>
					-->
					<div id="box">
						<div class="box-top">
							<h2>Welcome</h2>
						</div>
						<div class="box-panel">
				<p>
						<img src="images/image2.gif" height=30><br/><br/>
							A Complaint System is a set of procedures used in organizations to address complaints and resolve complaints. Complaint management is the process of how organizations handle, manage, respond to and report customer complaints. Notably in many countries, conflict management channels and systems have evolved from a major focus on labor-management relations to a much wider preview that includes union workers and also managers, non-union employees, professional staff, students, trainees, vendors, donors, customers, etc.
						<br/><br/>
						<p align="center">
						<img src="images/sug.jpg"  height=300  width=500>  </p>
				</p>
					
					</div>
						</div>
			</div>
		</div>
		
	</body>
</html>

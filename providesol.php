<?php 
	session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	include 'connection.php';
	$bid=$_GET['bid'];
	
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
					
					<li><a href="techbugs.php">Complaints To Assign</a></li>
							
				</ul>
				
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1><span><a href="logout.php">logout</a></span>
					
					<div id="box">
						<div class="box-top">
							<h2>My Complainta</h2>
						</div>
						<div class="box-panel">
								<table id="frm">
								<form action="addsol.php"/>
									<tr>
										<td><label>Complaint_id</label></td>
										// <td><input type="text" readonly="true" name="bug_id" value="<?php echo $bid;?>"/></td>
									</tr>
									<tr>
										<td><label>Solution</label></td>
										<td><textarea name="sol"></textarea></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="submit" value="provide"/></td>
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

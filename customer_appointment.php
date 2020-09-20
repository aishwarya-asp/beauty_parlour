<?php
	include_once('connection.php');
	$query="select * from appointment";
	$result=mysqli_query($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Makeover | Your Appointment </title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
	<table align="center" border="1px" style="width:600px; line-height:30px">
		<tr>
			<th colspan="6" style="width:400px; line-height:50px"><h2>YOUR APPOINTMENT RECORD</h2></th>
		</tr>
			<tr>
			<th>ID</th>
			<th>FRIST NAME</th>
			<th>LAST NAME</th>
			<th>CONTACT</th>
			<th>TIME</th>
			<th>SUBJECT</th>
			</tr>
		<?php
			while($rows=mysqli_fetch_assoc($result))
			{
		?>
				<tr>
					<td><?php echo $rows['id'];?></td>
					<td><?php echo $rows['fname'];?></td>
					<td><?php echo $rows['lname'];?></td>
					<td><?php echo $rows['contact'];?></td>
					<td><?php echo $rows['time'];?></td>
					<td><?php echo $rows['subject'];?></td>
				</tr>
		<?php
			}
		?>
	</table>
</body>
</html>
<?php 
$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');


  $email =$_SESSION['email'];
 
  $query = "SELECT * FROM orders WHERE email='$email'";
  $results = mysqli_query($db, $query);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <style type="text/css">
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
  </style>
 </head>
 <body>
 <table border="1" cellpadding="10" align="center" style="margin-bottom: 40px;">
 	<tr>
 		<th bgcolor="#0069D9"><strong>ID</strong></td>
 		<th bgcolor="#0069D9"><strong>Username</strong></td>
 		<th bgcolor="#0069D9"><strong>Email</strong></td>
 		<th bgcolor="#0069D9"><strong>Mobile Number</strong></td>
 		<th bgcolor="#0069D9"><strong>Address</strong></td>
 		<th bgcolor="#0069D9"><strong>Days</strong></td>
 		<th bgcolor="#0069D9"><strong>Price</strong></td>
    <th bgcolor="#0069D9"><strong>Service</strong></td>
 		<th bgcolor="#0069D9"><strong>Starting Date</strong></td>
 		<th bgcolor="#0069D9"><strong>Ending Date</strong></td>
    <th bgcolor="#0069D9"><strong>Edit</strong></td>
 	</tr>
 	<?php 
	 while($row = mysqli_fetch_assoc($results)){
	 ?>
            <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["mobile_number"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["days"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["service"]; ?></td>
            <td><?php echo $row["starting_date"]; ?></td>
            <td><?php echo $row["ending_date"]; ?></td>
            <td><a href="cancel_order.php?id=<?php echo $row['id']?>">Cancel</a></td>
            </tr>
	<?php 
	}
	?>
 	</table>
 </body>
 </html>
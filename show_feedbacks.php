
<?php if(isset($_SESSION['admin_email'])) : ?>
<?php 
$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');
 
  $query = "SELECT * FROM feedback";
  $results = mysqli_query($db, $query);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <style>
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
textarea {
  width: 100%;
  height: auto;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>
 </head>
 <body>
 <table style="margin-bottom: 40px; margin-top: 20px;">
 	<tr>
 		<th bgcolor="#0069D9"><strong>ID</strong></th>
 		<th bgcolor="#0069D9"><strong>Username</strong></th>
 		<th bgcolor="#0069D9"><strong>Email</strong></th>
 		<th bgcolor="#0069D9"><strong>Mobile Number</strong></th>
 		<th bgcolor="#0069D9"><strong>Message</strong></th>
    <th bgcolor="#0069D9"><strong>Edit</strong></th>
 	</tr>
 	<?php 
	 while($row = mysqli_fetch_assoc($results)){
	 ?>
            <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["mobile_number"]; ?></td>
            <td><textarea><?php echo $row["message"]?></textarea></td>
            <td><a href="delete_feedback.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
            </tr>
	<?php 
	}
	?>
 	</table>
    <?php else : ?>
  <h4 align="center" style="color: red;">Only Admin has access to this page</h4>
<?php endif?>
 </body>
 </html>
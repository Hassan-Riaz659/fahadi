
<?php if(isset($_SESSION['admin_email'])) : ?>
<?php 

$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');
 
  $query = "SELECT * FROM employee";
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
button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
        <th bgcolor="#0069D9"><strong>Emirates ID</strong></th>
        <th bgcolor="#0069D9"><strong>Passport Nummber</strong></th>
        <th bgcolor="#0069D9"><strong>Address</strong></th>
        <th bgcolor="#0069D9"><strong>Nationality</strong></th>
        <th bgcolor="#0069D9"><strong>Gender</strong></th>
        <th bgcolor="#0069D9"><strong>Religion</strong></th>
        <th bgcolor="#0069D9"><strong>Password</strong></th>
        <th bgcolor="#0069D9" colspan="2"><strong>Edit</strong></th>
    </tr>
    <?php 
     while($row = mysqli_fetch_assoc($results)){
     ?>
            <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["mobile_number"]; ?></td>
            <td><?php echo $row["emirates_id"]; ?></td>
            <td><?php echo $row["passport_number"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["nationality"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["religion"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td><a href="delete_employee.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
            <td><a href="update_employee.php?id=<?php echo $row['id']?>">Update</a></td>
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
<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>userid</td>
		<td>firstname</td>
		<td>lastname</td>
		<td>City</td>
		<td>Email id</td>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["userid"]; ?></td>
		<td><?php echo $row["firstname"]; ?></td>
		<td><?php echo $row["lastname"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["password"]; ?></td>
		<td><?php echo $row["message"]; ?></td>
		<td><a href="update-process.php?id=<?php echo $row["userid"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>

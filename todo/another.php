<?php
$db = mysqli_connect("shareddb-w.hosting.stackcp.net", "actual-313439c1bb", "t9mrp8chbo","actual-313439c1bb");


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    <style> <?php include_once ("style1.css") ?></style>
    <title>Document</title>
</head>
<body>
	<header>
		<nav>
			<a href='index.php' title='Go back' ><i class='fas fa-arrow-left fa-3x' style='color:white'></i></a>
		</nav>
	</header>
	<h1> My To Do List</h1>
	<table>
	<thead>
		<tr>
			<th>Activity </th>
			<th>Deadline</th>
			<th id='deletes'>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$result = mysqli_query($db,"SELECT * FROM testing");
		while($row = mysqli_fetch_array($result))
{ ?> 
	<tr>
		<td ><?php echo $row['activity']?> </td>
		<td><?php echo $row['dates']?></td>
		<td id='del'><a href='delete.php?ID=<?php echo $row['ID'] ?>'><i class='fa fa-trash'></a></td>
	</tr>
<?php }
mysqli_close($db);
?>

</tbody>
	
	</table>
    
</body>
</html>



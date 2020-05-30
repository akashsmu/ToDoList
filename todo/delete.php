<?php
$db = mysqli_connect("shareddb-w.hosting.stackcp.net", "actual-313439c1bb", "t9mrp8chbo","actual-313439c1bb"); // Using database connection file here

$id = $_GET['ID']; // get id through query string

$del = mysqli_query($db,"delete from testing where ID = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:another.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}



?>
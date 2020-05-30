<?php 
include_once ('indexes.html');
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("shareddb-w.hosting.stackcp.net", "actual-313439c1bb", "t9mrp8chbo","actual-313439c1bb");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in both the fields";
		
		}else{
			$task = $_POST['task'];
			$time=$_POST['datetime'];
			$sql = "INSERT INTO `testing` (`activity`,`dates`) VALUES ('$task','$time')";
			mysqli_query($db, $sql);
		}
	}

?>




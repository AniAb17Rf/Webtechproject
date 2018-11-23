<?php
$email = filter_input(INPUT_POST,'email');
$comment = filter_input(INPUT_POST,'comments');
$host="localhost";
$dbUsername="root";
$dbPassword = "";
$dbname = "test";
$conn = new mysqli ($host,$dbUsername,$dbPassword, $dbname);
if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else{
	$sql = "INSERT INTO com1 (email,comments) 
	values ('$email','$comment')";
	if($conn->query($sql)){
		echo "<i><h1> Thank you !</h1>,<h2> Your comment has been recorded</i></h2>";
	}
	else{
	echo "ERROR";
	
	}
	$conn->close();
}
?>
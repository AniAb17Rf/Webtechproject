<!DOCTYPE html>
<html>
<head>
<title>
comments
</title>
</head>
<body background="https://www.wmdtech.com/wp-content/uploads/section-background.jpg" style="font-size:18px">
<h1><u> Comments Section </u></h1>
<div style="padding-left:50px">
<i>
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
if($conn-> connect_error) {
die("connection failed: ". $conn-> connect_error);
}
$sql = "SELECT email,comments from com1";
$result = $conn->query($sql);
if($result-> num_rows > 0) {
while($row = $result->fetch_assoc()){
"<div style=\"padding-left:50px\" >";
echo "<div style=\"border-style:solid;border-color:black;border-width:1px;\"><b><u>". $row["email"] ."</u> has commented </b><br>". $row["comments"] ."</div><br><br><br><br>";
"</div>";
}
}
else{
echo"<h2> Comments section is blank</h2>";
}

?>
</i>
</div>
</body>
</html>
<html>
<head>
</head>
<body>
<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "ArrowClassifieds");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$email_address = mysqli_real_escape_string($link, $_POST['email']);
$contact = mysqli_real_escape_string($link, $_POST['number']);
$book_Name = mysqli_real_escape_string($link, $_POST['itemname']);
$category = mysqli_real_escape_string($link, $_POST['category']);
$year = mysqli_real_escape_string($link, $_POST['year']);
$subject = mysqli_real_escape_string($link, $_POST['subject']);
$department = mysqli_real_escape_string($link, $_POST['department']);
$cost = mysqli_real_escape_string($link, $_POST['cost']);


 
// attempt insert query execution
$sql = "INSERT INTO books (Pname, email_address, contact_no, book_Name, category, year, subject, department, cost ) VALUES ('$name', '$email_address','$contact','$book_Name','$category','$year', '$subject','$department','$cost')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

</body>
</html>
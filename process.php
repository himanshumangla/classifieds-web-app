<?php include 'database.php';
?>

<?php

// create a variable
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
$email=$_POST['email'];

//Execute the query

mysqli_query($connect "INSERT INTO adpost(name,description,price,email)
				VALUES('$name','$description','$price','$email')");
?>

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
 
// Attempt create table query execution
$sql = "CREATE TABLE BOOKS(book_id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, Pname CHAR(30) NOT NULL, email_address VARCHAR(50), contact_no INT(14), category CHAR(30) NOT NULL, book_Name VARCHAR(60), year CHAR(10), subject CHAR(30), department CHAR(10), cost INT(5))";
if (mysqli_query($link, $sql)){
    echo "Table entry created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
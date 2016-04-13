<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Records Form</title>
<link href="styleform.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="insert.php" method="post" class="smart-green">
<div>
<h1>STUDENT REGISTRATION</h1>
	<p>
    	<label for="Name">Name:</label>
        <input type="text"  required="y" id="name">
    </p>
    <p>
    	<label for="Cateqqgory">Category:</label>
        <input type="text" name="category" id="category">
		
    </p>
    <p>
    	<label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <button type="submit" value="Add Records">SUBMIT</button>
</div>
</form>
</body>
</html>
<body style="background: lightyellow; padding: 50px; color: teal; font-size: 30px;">

<?php

/*if (isset($_POST)) {
	 	$booksId =  $_POST["books_id"]; 
	 	$booksName = $_POST["books_name"];
	 	$isbn = $_POST["isbn"];
	 	$author = $_POST["author"];
	 }
echo $booksId, $booksName, $isbn, $author;*/

// $dsn="mysql:dbname=test";
// $username="root";
// $password="root";
 /*require("config.php");




try {
	//PDO - PHP data objects 
	// mysqli is a replacement for the mysql functions, with object-oriented and procedural versions. It has support for prepared statements. PDO (PHP Data Objects) is a general database abstraction layer with support for MySQL among many other databases.

	// PDO supports various databases and mysqli supports only MySQL. MySQLi is also a bit faster. PDO supports 12 different drivers, opposed to MySQLi, which supports MySQL only. So about security there's no difference because they both use prepared statements with escaping.



	 $conn= new PDO($dsn,$username,$password);
	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	echo "connection failed:" . $e->getMessage();
	}
	$sql="SELECT * FROM Books";
	echo "<ul>";
	try {
	$rows=$conn->query($sql);
	foreach ($rows as $row) {
	echo "<li>" . $row["Book_ID"] . "  " . $row["Book_Name"] . "  " . $row["Author"] . $row["ISBN"] .  "</li>";
	}
	} catch (PDOException $e) {
	echo "Query failed: " . $e->getMessage();
	}
	echo "</ul>";
	$conn=null;*/
?>
<!-- 
GET method not suitable for sensitive data as it display form data on the url but used with cookies
POST method a secured way  -->

<!-- <form method="get" action="add.php"> -->
	<form method="post" action="add.php">

Books_ID: <input type="text" name="books_id" id="books_id"> <br>
Books_Name: <input type="text" name="books_name" id="books_name"> <br>
ISBN: <input type="text" name="isbn" id="isbn"> <br>
Author: <input type="text" name="author" id="author"> <br>

 <input type="submit" value="Add this book">

 


</form>

<hr size="10" color="red">

</body>






<body style="background: lightyellow; padding: 50px; color: teal; font-size: 30px;">
<h1>
<?php

/*if (isset($_GET)) {
	 	$booksId =  $_GET["books_id"]; 
	 	$booksName = $_GET["books_name"];
	 	$booksIsbn = $_GET["isbn"];
	 	$author = $_GET["author"];
	 }*/

	 if (isset($_POST)) {
	 	$booksId =  $_POST["books_id"]; 
	 	$booksName = $_POST["books_name"];
	 	$booksIsbn = $_POST["isbn"];
	 	$author = $_POST["author"];
	 }
	 echo $booksId . "<br>" . $booksName . "<br>" . $booksIsbn . "<br>" . $author . "<br>" . "<br>";

require("connection.php");


try {
	
	 $conn= new PDO($dsn,$username,$password);
	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connected" . "<br>" .  "<br>";
	
	} catch (PDOException $e) {
	echo "connection failed:" . $e->getMessage();
	}

//$sql="INSERT INTO `Books`(`Book_ID`, `Book_Name`, `ISBN`, `Author`) VALUES (1111,'Java', 2222, 'Beula')";
	$sql="insert into Books(Book_ID,Book_Name,ISBN,Author) values ('$booksId', '$booksName', '$booksIsbn', '$author')";
	

try {
	$rows=$conn->query($sql);
	
	
		if ( $rows){
			echo "Record saved";
		} else {
			echo "Error!!! Record not saved";
		}
	
	} catch (PDOException $e) {
	echo "Query failed: " . $e->getMessage();
	}


	$conn=null;


?>
</h1>
</body>
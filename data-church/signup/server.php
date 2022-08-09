<?php

session_start();
//initialize variables
    $name = "";
	$email = "";
	$residence = "";
	$date = "";
	$pwd = "";
	$id = 0;
	$edit_state = false;

//connect to database
$db = mysqli_connect('localhost', 'root', '', 'church');

//if save button is clicked

if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$residence = $_POST['residence'];
	$date = $_POST['date'];
	$pwd = $_POST['pwd'];
	

	$query = "INSERT INTO congregation (name, email, residence,date,pwd) VALUES ('$name', '$email','$residence','$date','$pwd')";
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Contact Saved";
	header('Location: signup.php');//redirect to index page
}

//update records

if (isset($_POST['update'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$residence = $_POST['residence'];
	$date = $_POST['date'];
	$pwd = $_POST['pwd'];
	$id= $_POST['id'];

	mysqli_query($db, "UPDATE congregation SET name='$name', email='$email', residence='$residence', date='$date', pwd='$pwd' WHERE id=$id ");
	$_SESSION['msg'] = "contact Updated";
	header('Location: signup.php');
	
}


//delete records
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM congregation WHERE id=$id");
	$_SESSION['msg'] = "contact Deleted";
	header('Location: signup.php');
}



//retrieve records
$results = mysqli_query($db, "SELECT * FROM congregation");
?>
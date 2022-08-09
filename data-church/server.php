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
	header('Location: index.php');//redirect to index page
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
	header('Location: index.php');
	
}


//delete records
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM congregation WHERE id=$id");
	$_SESSION['msg'] = "contact Deleted";
	header('Location: index.php');
}



//retrieve records
$results = mysqli_query($db, "SELECT * FROM congregation");
?>

<?php


//insert offering




if (isset($_POST['save'])) {
	$offering = $_POST['offering'];
	$offering_1 = $_POST['offering_1'];
	$offering_2 = $_POST['offering_2'];
	$offering_3 = $_POST['offering_3'];
	$offering_4 = $_POST['offering_4'];
	$offering_5 = $_POST['offering_5'];
	

	$query = "INSERT INTO offering (offering, offering_1, offering_2, offering_3,offering_4,offering_5) VALUES ('$offering', '$offering_1', '$offering_2','$offering_3','$offering_4','$offering_5')";
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Contact Saved";
	header('Location: index.php');//redirect to index page
}

?>



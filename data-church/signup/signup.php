<?php
include ('server.php');

//fetch the record to be updated
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM congregation WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$name = $record['name'];
	$residence = $record['residence'];
  $date = $record['date'];
  $email = $record['email'];
  $pwd = $record['pwd'];
	$id = $record['id'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/vendor/icomoon.css">
</head>
<body>
	<nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" title="ProBootstrap:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="www.kag.co.ke">Home</a></li>
              <li class="active"><a href="signup.php">Signup</a></li>
              <li><a href="../input/input.php">input</a></li>
              <li><a href="../offering/offering.php"></a></li>
              <li><a href="../index.php">view</a></li>
              <li>
                                    </div>

                                  </div>
                                </div>
                              </div>
                   </li>
            </ul>

          </div>
        </div>
      </nav>

      <div class="container">
          <div class="row">
            <div class="col-md-12 ">
              <h2>SignUp Page </h2>
            </div>
          </div>
        </div>

        <div class="col-md-8">
        	<?php if (isset($_SESSION['msg'])):  ?>
      <div class="msg">
      	<?php
      		echo $_SESSION['msg'];
      		unset($_SESSION['msg']);
      	?>
      </div>
<?php endif ?>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
      <th>Residence</th>
      <th>Baptism</th>
      <th>Password</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>

		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
			    <td><?php echo $row['name']; ?></td>
			    <td><?php  echo $row['email']; ?></td>
          <td><?php  echo $row['residence']; ?></td>
          <td><?php  echo $row['date']; ?></td>
          <td><?php  echo $row['pwd']; ?></td>
			    <td>
				    <a href="signup.php?edit=<?php echo $row['id']; ?>">Edit</a>
			    </td> 
			    <td>
				    <a href="server.php?del=<?php echo $row[$id]; ?>">delete</a>
			    </td>
		
		</tr>
		<?php }


		?>
		
	</tbody>
</table>
        </div>



<div class="col-md-4">
	<form method="post" action="server.php"  class="table table-bordered">
	
			<input type="hidden" name="id" value="<?php echo $id; ?>">	
      

		<div class="form-group">
		       <label>Name</label>
		       <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
		  </div>
		  <div class="form-group">
		       <label>Email</label>
		       <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
		</div>
     <div class="form-group">
           <label>residence</label>
           <input type="text" name="residence" value="<?php echo $residence; ?>" class="form-control">
    </div>
     <div class="form-group">
           <label>Baptism date</label>
           <input type="text" name="date" placeholder="MM/DD/YYYY" value="<?php echo $date; ?>" class="form-control">
    </div>
     <div class="form-group">
           <label>Password</label>
           <input type="text" name="pwd" value="<?php echo $pwd; ?>" class="form-control">
    </div>

		<div class="form-group">
			<?php if ($edit_state == false):  ?>
		<button type="submit" name="save" class="btn">save</button>
		    <?php else: ?>
		<button type="submit" name="update" class="btn">update</button>
			<?php endif ?>

		  
		  
		</div>

		
	
		</form>
</div>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
</script>
  
   

</body>
</html>
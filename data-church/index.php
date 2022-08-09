<?php
include ('server.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/icomoon.css">
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
              <li class="active"><a href="www.kag.co.ke">Home</a></li>
              <li><a href="signup/signup.php">Signup</a></li>
              <li><a href="input/input.php">input</a></li>
              <li><a href="offering/offering.php"></a></li>
              <li class="active"><a href="index.php">view</a></li>
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
              <h2>View Congregation details </h2>
            </div>
          </div>
        </div>

<div class="container">
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
      <th>Tithe_1</th>
      <th>Tithe_2</th>
      <th>Tithe_3</th>
      <th>Tithe_4</th>
      
			
		</tr>
	</thead>
	<tbody>

		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
			    <td><?php echo $row['name']; ?></td>
			    <td><?php  echo $row['email']; ?></td>
		          <td><?php  echo $row['residence']; ?></td>
		          <td><?php  echo $row['tithe_1']; ?></td>
		          <td><?php  echo $row['tithe_2']; ?></td>
		          <td><?php  echo $row['tithe_3']; ?></td>
		          <td><?php  echo $row['tithe_4']; ?></td>
		         
			    
		
		</tr>
		<?php }


		?>
		
	</tbody>
</table>

</div>





		

</body>
</html>
<?php
include ('server.php');

//fetch the record to be updated
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM congregation WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$name = $record['name'];
	$interdict = $record['interdict'];
    $tithe_1 = $record['tithe_1'];
    $tithe_2 = $record['tithe_2'];
    $tithe_3 = $record['tithe_3'];
	$tithe_4 = $record['tithe_4'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/vendor/bootstrap.css">
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
              <li><a href="www.kag.co.ke">Home</a></li>
              <li><a href="../signup/signup.php">Signup</a></li>
              <li class="active"><a href="../input/input.php">input</a></li>
              <li><a href="../offering/offering.php">Offering</a></li>
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
              <h2>Input Details (Tithe, interdict etc) </h2>
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
      <th>Interdict</th>
      <th>Tithe_1</th>
      <th>Tithe_2</th>
      <th>Tithe_3</th>
      <th>Tithe_4</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
      <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php  echo $row['interdict']; ?></td>
          <td><?php  echo $row['tithe_1']; ?></td>
          <td><?php  echo $row['tithe_2']; ?></td>
          <td><?php  echo $row['tithe_3']; ?></td>
          <td><?php  echo $row['tithe_4']; ?></td>
          <td>
            <a href="input.php?edit=<?php echo $row['id']; ?>">Edit</a>
          </td> 
         
    
    </tr>
    <?php }


    ?>
    
  </tbody>
</table>
</div>


<div class="col-md-4">
  <form method="post" action="server.php" class="table table-bordered">
<input type="hidden" name="id" value="<?php echo $id; ?>">  
    <div class="form-group">
           <label>Name</label>
           <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
      </div>
      <div class="form-group">
           <label>Interdict</label>
           <input type="text" name="interdict" value="<?php echo $interdict; ?>" class="form-control">
    </div>
     <div class="form-group">
           <label>Tithe_1</label>
           <input type="text" name="tithe_1" value="<?php echo $tithe_1; ?>" class="form-control">
    </div>
     <div class="form-group">
           <label>Tithe_2</label>
           <input type="text" name="tithe_2" value="<?php echo $tithe_2; ?>" class="form-control">
    </div>
     <div class="form-group">
           <label>Tithe_3</label>
           <input type="text" name="tithe_3" value="<?php echo $tithe_3; ?>" class="form-control">
    </div>
    <div class="form-group">
           <label>Tithe_4</label>
           <input type="text" name="tithe_4" value="<?php echo $tithe_4; ?>" class="form-control">
    </div>


    <div class="input-group">
      <?php if ($edit_state == false):  ?>
    <button type="submit" name="save" class="btn">save</button>
        <?php else: ?>
    <button type="submit" name="update" class="btn">update</button>
      <?php endif ?>

      
      
    </div>

    </form>
</div>


		

</body>
</html>
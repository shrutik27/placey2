
<?php
// connection
$db = mysqli_connect('localhost', 'u139817065_shrutik', '9822174187', 'u139817065_registration');
if(!$db){
    die("connection to this database failed due to" . mysqli_connect_error());
}
$msg="";
if (isset($_POST['upload'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  	// Get text
  	

  	// image file directory
  	$target = "images/".basename($image);
  
  // Collect post variables
  $countryname = (isset($_POST['countryname']) ? $_POST['countryname'] : null);
  $statename = (isset($_POST['statename']) ? $_POST['statename'] : null);
  $cityname = (isset($_POST['cityname']) ? $_POST['cityname'] : null);
  $category = (isset($_POST['category']) ? $_POST['category'] : null);
  $placename = (isset($_POST['placename']) ? $_POST['placename'] : null);
  $description = (isset($_POST['description']) ? $_POST['description'] : null);
 
  $query= "INSERT INTO places (countryname,statename,cityname,category,placename,description,image) 
  VALUES ('$countryname','$statename','$cityname','$category','$placename','$description','$image')";
  
  
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
  if($db->query($query) == false){
    // echo "unscuccesfullSuccessfully inserted";
    echo "Error: " . $query . "<br>" . $db->error;
}
}

  
  
   // Close the database connection
   $db->close();
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Add New|Add New Places|Places|placey2</title>
  </head>
  <body>
  <div style="padding-top:50px;">

  

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
  	<h2>Add New</h2>
  </div>
<form action="add.php" method="post" enctype="multipart/form-data">
<div class="input-group">
    <p>
        <label for="countryname">Country</label>
        <input type="text" name="countryname" >
    </p>
    <p>
        <label for="statename">State</label>
        <input type="text" name="statename" >
    </p>
    <p>
        <label for="cityname">City</label>
        <input type="text" name="cityname"  >
    </p>
    <p>
        <label for="category">Category</label>
        <input type="text" name="category" >
    </p>
    <p>
        <label for="placename">Placename</label>
        <input type="text" name="placename" >
    </p>
    <p>
      <label for ="description">Write a description of place</label>
      <textarea id="description"name="description" rows="5vw"cols="10vw">
        </textarea>
    </p>
    *dont use (') or (`) in the description eg:temple's
    <input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	
    <div class="input-group">
    <input type="submit" value="Submit" class="btn" name="upload">
</div>
</div>
</div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type='text/javascript' src='//pl15430392.passtechusa.com/e3/aa/31/e3aa311dd4f0dc1435e5cd7a6274e68d.js'></script>
  </body>
</html>



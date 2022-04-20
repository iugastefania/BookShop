<!DOCTYPE html>
<html>
<head>
  <title>Jeanne Lanvin Admin</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!--Bara de navigatie-->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
  <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="primuadmin.html" class="w3-bar-item w3-button w3-padding-large w3-red"target="_self">Istoria modei</a>
    <a href="doiadmin.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Ilustratii anuale</a>
    <a href="shopadmin.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Books</a> 
    <a href="recordspaulpoiret.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Paul Poiret</a>
    <a href="recordsjeannelanvin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Jeanne Lanvin</a> 
    <a href="recordsmadeleinevionnet.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Madeleine Vionnet</a>
    <a href="recordsgabriellechanel.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Gabrielle Coco Chanel</a> 
    <a href="recordselsaschiaparelli.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Elsa Schiaparelli</a>
    <a href="recordscristobalbalenciaga.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Cristóbal Balenciaga</a> 
    <a href="recordschristiandior.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Christian Dior</a>
    <a href="recordssaintlaurent.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Yves Saint Laurent</a>
    <a href="indexadmin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Admin Page</a>
    <div class="w3-dropdown-hover w3-hide-small">
    </div>
 </div>
</div>
</div>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    
    /* Float four columns side by side */
    .column {
      float: left;
      width: 100%;
      padding: 0 10px;
    }
    
    /* Remove extra left and right margins, due to padding */
    .row {margin: 0 -5px;}
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
      }
    }
    
    /* Style the counter cards */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 16px;
      text-align: center;
      background-color: #f1f1f1;
    }
    </style>
    </head>
    <body>
    
    <h2 class="w3-wide w3-center">Christian Dior</h2>
    
    <div class="row">
      <div class="column">
    <div class="card">
<body>
<h2>Feedback</h2>

<table border="1" class="orderproduct">
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Subject</td>
  </tr>
<?php

include "dbConnjl.php"; // Using database connection file here

$records = mysqli_query($db,"select * from tbljeannelanvin"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['namejeannelanvin']; ?></td>
    <td><?php echo $data['lnamejeannelanvin']; ?></td>
    <td><?php echo $data['subjectjeannelanvin']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</div>
      </div>
    </div>
      
    <div class="row">  
    <div class="column">
        <div class="card">
        <body>

<?php

include "itemsjl.php"; // Using database connection file here

if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($db,"insert into booksjl(fname,description,new,images) values('$_POST[fname]', '$_POST[description]', '$_POST[new]', '$dst_db')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
}
?>

<h2>Insert book</h2>

<form method="post" enctype="multipart/form-data">
  <table border="1"class="orderproduct">
    <tr>
      <td>Enter Name</td>
      <td><input type="text" name="fname" placeholder="Enter Name" Required></td>
    </tr>
    <tr>
      <td>Enter Price</td>
      <td><input type="text" name="description" placeholder="Enter Price" Required></td>
    </tr>
    <tr>
      <td>Enter New Price</td>
      <td><input type="text" name="new" placeholder="Enter Price" Required></td>
    </tr>
    <tr>
      <td>Select Image</td>
      <td><input type="file" name="image" Required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>

    </div>
      </div>
</div>
      
   
      <div class="row">
      <div class="column">
        <div class="card">
        <body>
          <h2>Books</h2>

<table border=1 class="orderproduct">
  <tr>
    <td>Name</td>
    <td>Price</td>
    <td>Images</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

$records = mysqli_query($db,"select * from booksjl"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['fname']; ?></td>
    <td><?php echo $data['description']; ?></td>
    <td><?php echo $data['new']; ?></td>
    <td><img src="<?php echo $data['images']; ?>" width="199" height="299"></td>
    <td><a href="editjl.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="deletebookjl.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>

</table>

</body>
    </div>
      </div>

    </div>

    <div class="row">
      <div class="column">
        <div class="card">
        <body>
          <h2>Orders</h2>

<table border=1 class="orderproduct">
  <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Quantity</td>
    <td>Delete</td>
  </tr>

<?php

$records = mysqli_query($db,"select * from ordersjl"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['qty']; ?></td>
    <td><a href="deleteorderjl.php?order_id=<?php echo $data['order_id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>

</body>
    </div>
      </div>

    </div>

  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  
  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

.orderproduct{
  margin:auto;
  width:auto;
}
  </style>
  </head>
  <body>

  </body>  
    </body>
</html>
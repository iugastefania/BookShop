<!DOCTYPE html>
<html>
  <head>
    <title>Christian Dior</title>
    <link href="2-theme.css" rel="stylesheet">
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
</head>


<body>

<!--Poza front--!>
<div style="text-align: center;"><img src="https://vignette.wikia.nocookie.net/fashion/images/e/ed/Elle-screenshot.png/revision/latest?cb=20110308011444">



<!--Bara de navigatie-->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
  <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="primu.html" class="w3-bar-item w3-button w3-padding-large w3-red"target="_self">Istoria modei</a>
    <a href="doi nou.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Ilustratii anuale</a>
    <a href="shop.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Books</a> 
    <a href="paulpoiret.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Paul Poiret</a>
    <a href="adminjeannelanvin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Jeanne Lanvin</a> 
    <a href="madeleinevionnet.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Madeleine Vionnet</a>
    <a href="admingabriellechanel.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Gabrielle Coco Chanel</a> 
    <a href="adminelsaschiaparelli.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Elsa Schiaparelli</a>
    <a href="cristobalbalenciaga.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Crist??bal Balenciaga</a> 
    <a href="christiandior.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Christian Dior</a>
    <a href="saintlaurent.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Yves Saint Laurent</a> 
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Client Page</a>
    <div class="w3-dropdown-hover w3-hide-small">
 </div>
 </div>
</div>
</div>


<!-- Continut pagina -->
<div class="w3-content" style="max-width:2000px;margin-top:48px">
 

<!-- Sectiunea de informatii -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">

  <div class="w3-black">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Christian Dior (1905-1957)</h2>

	
<p style="font-family:times new roman;"
style="font-size:200%;"><strong><em>In anii 1947-1957, moda a avut un singur nume:Christian Dior. Mare revolutionar al perioadei postbelice (pe podium, nu in politica!), Dior a fost creatorul care, intr-un singur deceniu de activitate, a rescris regulile modei si a deschis o noua era in haute couture. Pe 8 decembrie 1946, cu sprijinul lui Boussac, Dior ??i-a fondat casa de mod??. Numele real al liniei primei sale colec??ii, prezentat?? la 12 februarie 1947, a fost Corolle, dar expresia New Look a fost inventat?? pentru aceasta de Carmel Snow, redactorul ??ef al Harper's Bazaar. Design-urile Dior au fost mai voluptoase dec??t formele boxy, care p??streaz?? materialul, ale stilurilor recente ale celui de-al Doilea R??zboi Mondial, influen??ate de ra??iile de pe ??es??tur??. A fost un maestru ??n crearea de forme ??i siluete; Dior este citat c?? a spus ???Am conceput femei cu flori???. ??nf????i??area lui a folosit ??es??turi c??ptu??ite predominant cu corsete ??n percal, dezosate, ??n stil bustier, c??ptu??eal?? de ??old, corsete cu talie de viesp?? ??i jupoane care ??i f??ceau rochiile s?? ias?? din talie, d??nd modelelor sale o form?? foarte curb??.
  ???New Look??? a revolu??ionat rochia femeilor ??i a restabilit Parisul ca centrul lumii modei dup?? cel de-al Doilea R??zboi Mondial, precum ??i f??c??nd din Dior un arbitru virtual al modei pentru mare parte din urm??torul deceniu, fiecare sezon prezent??nd o linie Dior nou intitulat??, ", ??n felul liniei "Corolle" din 1947, care va fi apoi tr??mbi??at?? ??n presa de mod??.</em></strong></p>
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Christian_Dior_hi_res_GettyImages-2662150.jpg?auto=format%2Ccompress&crop=top&fit=crop&h=781&w=521">
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Christian_Dior.png?auto=format%2Ccompress">

      <div class="w3-third">
</div>
</div>
</style>
</head>
<body>
</body>

  <?php

include "items.php"; // Using database connection file here

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
	
    $check = mysqli_query($db,"insert into books(fname,description,images) values('$_POST[fname]', '$_POST[description]','$dst_db')");  // executing insert query
		
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

<!-- Sectiunea de feedback -->
  
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  
  <h3>Got feedback? We???d love to hear it!</h3>
  
  <div class="container">
    <form action="feedbackdior.php" method="post">
      <label for="fname" class="email">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your first name..">
  
      <label for="lname" class="email">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
  
  
      <label for="subject" class="email">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

  </body>
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}
  
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

.form-center {
	display:flex;
	justify-content: center;
}

.email{
  color:black;
}

 /* Float four columns side by side */
 .column {
      float: left;
      width: 100%;
      padding: 0 5px;
    }
    
    /* Remove extra left and right margins, due to padding */
    .row {
      margin: 0 -5px;}
    
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
      padding: 25px;
      text-align: center;
      background-color: #f1f1f1;
    }
.orderproduct{
  margin:auto;
  width:auto;
}
  </style>

<h2>Order the book</h2>
<div>
<div class="row">
      <div class="column">
        <div class="card">
        <table class="orderproduct">

<?php

$records = mysqli_query($db,"select * from books"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td class="email"><?php echo $data['fname']; ?></td>
    <td class="email"><img src="<?php echo $data['images']; ?>" width="250" height="350"></td>
    <td class="email"><?php echo $data['description']; ?></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($db);  // close connection ?>
    </div>
      </div>
      <div class="column">
      <div class="card">
      <body>
    <?php
    // (A) PROCESS ORDER FORM
    if (isset($_POST["name"])) {
      require "processcd.php";
      echo $result == ""
        ? "<div class='notify'>Thank You! We have received your order</div>"
        : "<div class='notify'>$result</div>" ;
    }
    ?>
    <!-- (B) ORDER FORM -->
      <form id="orderform" method="post" target="_self"  class="orderproduct" >
      <label for="name" class="email">Name:</label>
      <input type="text" name="name" class="ordername"/>

      <label for="email" class="email">Email:</label>
      <input type="email" name="email" />

      <label for="qty" class="email">Quantity Needed:</label>
      <input type="number" name="qty" required value="1"/>

      <input type="submit" value="Place Order"/>
    </form>
    </div>
      </div>
  </div>
</div>
</html>

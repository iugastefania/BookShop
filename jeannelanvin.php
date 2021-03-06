<!DOCTYPE html>
<html>
  <head>
    <title>Jeanne Lanvin</title>
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
      <h2 class="w3-wide w3-center">Jeanne Lanvin (1867-1946)</h2>

	
<p style="font-family:times new roman;"
style="font-size:200%;"><strong><em>Jeanne Lanvin a depasit competitia. Ea a construit cea mai longeviva casa de moda din lume pe partea de palarii cloche, haine feminine si un parfum care este apreciat si in prezent.??n 1909, Lanvin s-a al??turat Syndicat de la Couture (fr), ceea ce a marcat statutul ei formal de couturi??re. ??mbr??c??mintea pe care Lanvin le-a f??cut pentru fiica ei a ??nceput s?? atrag?? aten??ia unui num??r de oameni boga??i care au cerut copii pentru proprii lor copii. ??n cur??nd, Lanvin a f??cut rochii pentru mamele lor, iar unele dintre cele mai cunoscute nume din Europa au fost incluse ??n clientela noului ei butic de pe rue du Faubourg Saint-Honor??, Paris.
Modele ale doamnei Lanvin ??n La Gazette du Bon Ton, 1922, Din 1923, imperiul Lanvin a inclus o fabric?? de vopsea ??n Nanterre. ??n anii 1920, Lanvin a deschis magazine dedicate decorului casnic, ??mbr??c??mintea pentru b??rba??i, bl??nurile ??i lenjerie.
Cu toate acestea, cea mai semnificativ?? expansiune a ei a fost crearea Lanvin Parfums SA ??n 1924 ??i introducerea parfumului ei semn??tur??, Arp??ge, ??n 1927, inspirat de sunetul fiicei sale, Marguerite, care ????i exersa c??ntarul la pian.</em></strong></p>
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Jeanne_Lanvin_draping_fabric_on_a_model_photographed_by_Laure_Albin_Guillot_1929_edited.jpg?auto=format%2Ccompress&crop=top&fit=crop&h=781&w=521">
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Jeanne_Lanvin.png?auto=format%2Ccompress">

      <div class="w3-third">
</div>
</div>
</style>
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link3 = mysqli_connect("localhost", "root", "", "jeannelanvin");
 
// Check connection
if($link3 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$namejeannelanvin = mysqli_real_escape_string($link3, $_REQUEST['namejeannelanvin']);
$lnamejeannelanvin = mysqli_real_escape_string($link3, $_REQUEST['lnamejeannelanvin']);
$subjectjeannelanvin = mysqli_real_escape_string($link3, $_REQUEST['subjectjeannelanvin']);
 
// Attempt insert query execution
$sql3 = "INSERT INTO tbljeannelanvin (namejeannelanvin, lnamejeannelanvin, subjectjeannelanvin) VALUES ('$namejeannelanvin', '$lnamejeannelanvin', '$subjectjeannelanvin')";
if(mysqli_query($link3, $sql3)){
    echo "Feedback added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link3);
}
 
// Close connection
mysqli_close($link3);
?>
</body>
</html>
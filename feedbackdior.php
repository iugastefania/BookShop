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
    <a href="cristobalbalenciaga.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Cristóbal Balenciaga</a> 
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
style="font-size:200%;"><strong><em>In anii 1947-1957, moda a avut un singur nume:Christian Dior. Mare revolutionar al perioadei postbelice (pe podium, nu in politica!), Dior a fost creatorul care, intr-un singur deceniu de activitate, a rescris regulile modei si a deschis o noua era in haute couture. Pe 8 decembrie 1946, cu sprijinul lui Boussac, Dior și-a fondat casa de modă. Numele real al liniei primei sale colecții, prezentată la 12 februarie 1947, a fost Corolle, dar expresia New Look a fost inventată pentru aceasta de Carmel Snow, redactorul șef al Harper's Bazaar. Design-urile Dior au fost mai voluptoase decât formele boxy, care păstrează materialul, ale stilurilor recente ale celui de-al Doilea Război Mondial, influențate de rațiile de pe țesătură. A fost un maestru în crearea de forme și siluete; Dior este citat că a spus „Am conceput femei cu flori”. Înfățișarea lui a folosit țesături căptușite predominant cu corsete în percal, dezosate, în stil bustier, căptușeală de șold, corsete cu talie de viespă și jupoane care îi făceau rochiile să iasă din talie, dând modelelor sale o formă foarte curbă.
  „New Look” a revoluționat rochia femeilor și a restabilit Parisul ca centrul lumii modei după cel de-al Doilea Război Mondial, precum și făcând din Dior un arbitru virtual al modei pentru mare parte din următorul deceniu, fiecare sezon prezentând o linie Dior nou intitulată, ", în felul liniei "Corolle" din 1947, care va fi apoi trâmbițată în presa de modă.</em></strong></p>
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Christian_Dior_hi_res_GettyImages-2662150.jpg?auto=format%2Ccompress&crop=top&fit=crop&h=781&w=521">
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Christian_Dior.png?auto=format%2Ccompress">

      <div class="w3-third">
</div>
</div>
</style>
</head>
<body>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "db_feedback");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);
 
// Attempt insert query execution
$sql = "INSERT INTO feedbackdior (firstname, lastname, subject) VALUES ('$firstname', '$lastname', '$subject')";
if(mysqli_query($link, $sql)){
    echo "Feedback added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Madeleine Vionnet</title>
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
      <h2 class="w3-wide w3-center">Madeleine Vionnet (1876-1975)</h2>

	
<p style="font-family:times new roman;"
style="font-size:200%;"><strong><em>Madeleine Vionnet a construit un imperiu prin respingerea corsetelor și a nasturilor. Vionnet avea 26 de ateliere si angajase muncitori in număr de 1.000, insa ea a preferat sa se întalneasca cu clientii si a apreciat intotdeauna confidentialitatea. Alături de Coco Chanel, Vionnet este creditat cu trecerea de la hainele rigide, formalizate, la haine mai elegante și mai moi. Spre deosebire de Chanel, Vionnet avea puțin apetit pentru autopromovare; pensionarea ei în 1940 a marginalizat contribuția ei la mișcarea mai largă. Madeleine Vionnet este citată spunând că „când o femeie zâmbește, rochia ei trebuie să zâmbească cu ea”. Evitând corsetele, căptușelile, rigidizările și orice a distorsionat curbele naturale ale corpului unei femei, ea a devenit cunoscută pentru hainele care accentuau forma naturală feminină. Influențat de dansurile moderne ale Isadora Duncan, Vionnet a creat modele care scot în evidență forma naturală a unei femei. La fel ca Duncan, Vionnet s-a inspirat din arta greacă antică, în care hainele par să plutească liber în jurul corpului, mai degrabă decât să-i distorsioneze sau să-și modeleze forma. Stilul ei sa schimbat relativ puțin de-a lungul carierei, deși a devenit puțin mai potrivit în anii 1930.</em></strong></p>
<img src="https://images.businessoffashion.com/site/uploads/2015/08/GettyImages-89858496_edited.jpg?auto=format%2Ccompress&crop=top&fit=crop&h=781&w=521">
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Madeleine_Vionnet1.png?auto=format%2Ccompress">


      <div class="w3-third">
</div>
</div>
</style>
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link4 = mysqli_connect("localhost", "root", "", "bdmadeleinevionnet");
 
// Check connection
if($link4 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$namemadeleine = mysqli_real_escape_string($link4, $_REQUEST['namemadeleine']);
$lnamemadeleine = mysqli_real_escape_string($link4, $_REQUEST['lnamemadeleine']);
$subjectmadeleine = mysqli_real_escape_string($link4, $_REQUEST['subjectmadeleine']);
 
// Attempt insert query execution
$sql4 = "INSERT INTO tlmadeleinevionnet (namemadeleine, lnamemadeleine, subjectmadeleine) VALUES ('$namemadeleine', '$lnamemadeleine', '$subjectmadeleine')";
if(mysqli_query($link4, $sql4)){
    echo "Feedback added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link4);
}
 
// Close connection
mysqli_close($link4);
?>
</body>
</html>
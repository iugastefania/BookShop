<!DOCTYPE html>
<html>
  <head>
    <title>Elsa Schiaparelli</title>
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
    <h2 class="w3-wide w3-center">Elsa Schiaparelli (1890-1973)</h2>

	
<p style="font-family:times new roman;"
style="font-size:200%;"><strong><em>Inamicului lui Chanel, care a flirtat cu suprarealismul si a adus factorul de soc în modă. Elsa Schiaparelli a atins faima cochetand in cercurile inalte ale societatii pariziene, care au condus-o pana la Hollywood unde a imbracat-o pe Greta Garbo si pe Mae West. Cariera de design a lui Schiaparelli a fost de la început influențată de couturierul Paul Poiret. Mai târziu, Schiaparelli s-a referit la Poiret drept „un mentor generos, prieten drag”.
Schiaparelli nu avea pregătire în abilitățile tehnice de modelare și construcție de îmbrăcăminte. Metoda ei de abordare s-a bazat atât pe impulsul momentului, cât și pe inspirația fortuită pe măsură ce lucrarea progresa. Ea a drapat material textil direct pe corp, uneori folosindu-se ca model. În timp ce se afla la Paris, Schiaparelli – „Schiap” pentru prietenii ei – a început să-și facă propriile haine. Cu încurajarea lui Poiret, ea și-a început propria afacere, dar aceasta s-a închis în 1926, în ciuda recenziilor favorabile. Ea a lansat o nouă colecție de tricotaje la începutul anului 1927, folosind o cusătură specială în două straturi, creată de refugiații armeni și cu pulovere cu imagini suprarealiste. Colecția Sport s-a extins în anul următor pentru a include costume de baie, îmbrăcăminte de schi și rochii de in. Schiaparelli a adăugat ținute de seară colecțiilor sale în 1931, folosind mătăsurile de lux ale lui Robert Perrier, iar afacerea a crescut din ce în ce mai mult, culminând cu o mutare de la Rue de la Paix la achiziționarea renumitului salon Louise Chéruit de la 21 Place Vendôme, care a fost botezat Magazinul Schiap.</em></strong></p>
<img src="https://images.businessoffashion.com/site/uploads/2015/08/3837694636_07431e2f06_o_edited.jpg?auto=format%2Ccompress&crop=top&fit=crop&h=781&w=521">
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Elsa_Shiaparelli.png?auto=format%2Ccompress">

      <div class="w3-third">
</div>
</div>
</style>
</head>
<body>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link1 = mysqli_connect("localhost", "root", "", "elsaschiaparelli");
 
// Check connection
if($link1 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$nameelsaschiaparelli = mysqli_real_escape_string($link1, $_REQUEST['nameelsaschiaparelli']);
$lnameelsaschiaparelli = mysqli_real_escape_string($link1, $_REQUEST['lnameelsaschiaparelli']);
$subjectelsaschiaparelli = mysqli_real_escape_string($link1, $_REQUEST['subjectelsaschiaparelli']);
 
// Attempt insert query execution
$sql1 = "INSERT INTO tblelsaschiaparelli (nameelsaschiaparelli, lnameelsaschiaparelli, subjectelsaschiaparelli) VALUES ('$nameelsaschiaparelli', '$lnameelsaschiaparelli', '$subjectelsaschiaparelli')";
if(mysqli_query($link1, $sql1)){
    echo "Feedback added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link1);
}
 
// Close connection
mysqli_close($link1);
?>
</body>
</html>
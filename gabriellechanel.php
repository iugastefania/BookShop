<!DOCTYPE html>
<html>
  <head>
  <title>Gabrielle Coco Chanel</title>
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
      <h2 class="w3-wide w3-center">Gabrielle Coco Chanel (1883-1971)</h2>

	
<p style="font-family:times new roman;"
style="font-size:200%;"><strong><em>Creatoarea “little black dress” si-a luat curajul dintr-o tara in doliu. Gabrielle "Coco" Chanel a fondat cea mai renumita casa de moda, folosind banii iubitilor sai pentru a se stabili si a rescrie regulamentul cu colectiile sale inovatare. Stilul lui Gabrielle Chanel a fost revoluționar pentru anii '20: a creat nu doar haine noi și o nouă marcă, ci un nou stil de viață. A creat mai ales pălării și doar după câțiva ani a început să deseneze haine. Mai apoi s-a decis să creeze gențile gigantice, parfumuri (de amintit istoricul Chanel No.5), încălțăminte bicoloră, ceasuri unisex și bijuterii. Interpretând spiritul modernist al epocii, Chanel caută noua imagine de femeie liberă și independentă de bărbați: o femeie liberă, revoluționară, modernă și avangardă. Ceva important de amintit este că Chanel a fost una din primele femei care a îmbrăcat pantalonii.
  Țesăturile preferate ale lui Chanel erau tweed și jersey, iar tailleur-ul a devenit un must (un necesar). Culorile preferate și cel mai des folosite erau negrul, albul, la care se mai adaugă și albastrul-închis, bejul și griul. Conștientizarea propriul corp, comoditatea, masculinitatea, eventual combinată cu feminitatea sunt principiile de bază cu care Coco prin creațiile sale a sedus femei (și bărbați). Stilul său este cunoscut în istorie ca fiind sinonim cu eleganța, rafinamentul și modernitatea, combinate cu confortul.</em></strong></p>
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Coco_Chanel_2.jpg?auto=format%2Ccompress&crop=top&fit=crop&h=781&w=521">
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Gabrielle_Coco_Chanel.png?auto=format%2Ccompress">

      <div class="w3-third">
</div>
</div>
</style>
</head>
<body>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link2 = mysqli_connect("localhost", "root", "", "gabriellechanel");
 
// Check connection
if($link2 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$namegabriellechanel = mysqli_real_escape_string($link2, $_REQUEST['namegabriellechanel']);
$lnamegabriellechanel = mysqli_real_escape_string($link2, $_REQUEST['lnamegabriellechanel']);
$subjectgabriellechanel = mysqli_real_escape_string($link2, $_REQUEST['subjectgabriellechanel']);
 
// Attempt insert query execution
$sql2 = "INSERT INTO tblgabriellechanel (namegabriellechanel, lnamegabriellechanel, subjectgabriellechanel) VALUES ('$namegabriellechanel', '$lnamegabriellechanel', '$subjectgabriellechanel')";
if(mysqli_query($link2, $sql2)){
    echo "Feedback added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link2);
}
 
// Close connection
mysqli_close($link2);
?>
</body>
</html>
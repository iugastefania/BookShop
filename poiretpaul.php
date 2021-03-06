<!DOCTYPE html>
<html>
<head>
<title>Paul Poiret</title>
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
      <h2 class="w3-wide w3-center">Paul Poiret (1879-1944)</h2>

	
<p style="font-family:times new roman;"
style="font-size:200%;"><strong><em>aul Poiret este eroul neclintit al modei din secolul al XX-lea. Poiret a imbracat cel mai bine Parisul inainte de primul razboi mondial, dar, pe masura ce anii au continuat, incapacitatea sa de a se adapta la modernitatea anilor 20 a condus la prabusirea companiei sale.
  Viziunea lui Poiret, extrem de novatoare pentru ??ntreaga mod?? feminin?? contemporan?? cu el ??i ulterioar??, se poate rezuma la parafraza eliberarea corpului femeii de orice fel de constr??ngeri. Prin modul ??n care a conceput toat?? ??mbr??c??mintea feminin??, inclusiv prin inova??iile sale deosebite ??n domeniul lenjeriei intime feminine, inventarea sutienului modern fiind una dintre cele mai cunoscute, Paul Poiret a fost un reformator din r??d??cini al modei feminine. Astfel, ??n 1909, public?? ??mpreun?? cu Paul Iribe ??i Georges Lapepe, o bro??ur?? intitulat?? "Les Robes de Paul Poiret", iar ??n 1911 o a doua intitulat?? "Les Choses de Paul Poiret". Aceste bro??uri prezint?? rochii, respectiv alte piese de ??mbr??c??minte feminine, ca solu??ii elegante, simple, nerestrictive fizic ??i extrem de frumoase, un adev??rat manifesto artistic al couturierului.</em></strong></p>
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Poiret_GettyImages-72880842_edited.jpg?auto=format%2Ccompress&crop=top&fit=crop&h=781&w=521">
<img src="https://images.businessoffashion.com/site/uploads/2015/08/Paul_Poiret-287x1024.png?auto=format%2Ccompress">

      <div class="w3-third">
</div>
</div>
</style>
</head>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link5 = mysqli_connect("localhost", "root", "", "dpaulpoiret");
 
// Check connection
if($link5 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$namepoiret = mysqli_real_escape_string($link5, $_REQUEST['namepoiret']);
$lnamepoiret = mysqli_real_escape_string($link5, $_REQUEST['lnamepoiret']);
$subjectpoiret = mysqli_real_escape_string($link5, $_REQUEST['subjectpoiret']);
 
// Attempt insert query execution
$sql5 = "INSERT INTO bpaulpoiret (namepoiret, lnamepoiret, subjectpoiret) VALUES ('$namepoiret', '$lnamepoiret', '$subjectpoiret')";
if(mysqli_query($link5, $sql5)){
    echo "Feedback added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql5. " . mysqli_error($link5);
}
 
// Close connection
mysqli_close($link5);
?>

</body>
</html>

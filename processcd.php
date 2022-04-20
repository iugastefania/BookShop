<?php
// (A) PROCESS RESULT
$result = "";

// (B) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "items";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

// (C) SAVE ORDER TO DATABASE
if ($result=="") {
  try {
    $stmt = $pdo->prepare("INSERT INTO `orders` (`name`, `email`, `qty`) VALUES (?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["email"], $_POST["qty"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}

// // (D) SEND ORDER VIA EMAIL (OPTIONAL)
// if ($result=="") {
//   $to = "admin@site.com"; // CHANGE TO YOUR OWN!
//   $subject = "ORDER RECEIVED";
//   $message = "";
//   foreach ($_POST as $k=>$v) { $message .= "$k - $v\r\n"; }
//   if (!@mail($to, $subject, $message)) { $result = "Error sending mail!"; }
// }

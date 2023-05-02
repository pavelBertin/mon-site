<?php
if ($_SERVER["REQUEST_METHOD"]=="GET") {
   # code...

if(isset($_GET['valider']))
{
 if(isset($_GET['abc']) AND isset($_GET['abd']) AND isset($_GET['abe']) AND isset($_GET['abf']) AND isset($_GET['abg']) AND isset($_GET['abh']))
 
    if(!empty($_GET['abc']) AND !empty($_GET['abd'])  AND !empty($_GET['abe'])  AND !empty($_GET['abf'])  AND !empty($_GET['abg'])  AND !empty($_GET['abh']))
  
    $Nom=$_GET["abc"];
    $prenom=$_GET["abd"];
    $telephone=$_GET["abe"];
    $message=$_GET["abf"];
    $adress=$_GET["abg"];
    $email=$_GET["abh"];
 
 echo "bonjour  $prenom nous avons recues vos coordonnees:NOM:$Nom<br> PRENOM: $prenom<br> CONTACT: $telephone<br>MESSSAGE:$message<br>ADDRESSE:$adress <br>E-MAIL: $email " ; 
 }
}
?>
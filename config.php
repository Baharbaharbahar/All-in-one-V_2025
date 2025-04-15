<?php
$server="localhost";
$username="root";
$password="";
$db="bdallinone2025";
//La fonction connect() / mysqli_connect() ouvre une nouvelle connexion au serveur MySQL.
$conn=mysqli_connect($server,$username,$password,$db) or die ("Probleme de connxion au serveur ou à la base de données");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="fonctions.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL IN ONE V2025 By bahaeddine </title>
</head>

<body>
        <form action="ajouter.php" method="post" name="f1">
            Login: <input type="text" name="login" id="login" > <br>
            Mot de passe: <input type="password" name="passwd" id="passwd" > <br>
            Nom: <input type="text" name="nom" id="nom" > <br>
            Prénom: <input type="text" name="prenom" id="prenom"> <br>
            Date de Naissance: <input type="date" name="date_naiss" id="date_naiss" > <br>
            Heure: <input type="time" name="heure" id="heure"> <br>
            Email: <input type="email" name="mail" id="mail" placeholder="aaaa@bbbb.cc" > <br>
            <fieldset>
                <legend>Sexe :</legend>
                <input type="radio" name="sexe" id="homme"  value="H" >Homme
                <input type="radio" name="sexe" id="femme" value="F" >Femme
            </fieldset>
            <br>
            <label for="">Language</label>
            <input list="languages" name="language" id="language">
            <datalist id="languages">
                <option value="PHP">
                <option value="HTML">
                <option value="Javascript">
                <option value="CSS">
            </datalist>
            <br>
            <label for="">Preférence Travail</label>
            <input type="checkbox" name="frelance" id="frelance" value="O">Frelance
            <input type="checkbox" name="hybride" id="hybride" value="O">Hybride
            <input type="checkbox" name="site" id="site" value="O">Sur Site
            <input type="checkbox" name="remote" id="remote" value="O">Remote

            <br>
            Sports:
            <input type="checkbox" name="foot" id="foot" value="O"  >Football
            <input type="checkbox" name="hand" id="hand" value="O" >Handball
            <input type="checkbox" name="tennis" id="tennis" value="O">Tennis
<br>
<select name="pays" id="pays">
<option>Veuillez choisir un pays SVP</option>
<option value="TN">Tunisie</option>
<option value="AL">Algérie</option>
<option value="LY">Lybie</option>
</select>
<br>

    Remarques:
    <br>
    <textarea name="remarques" id="remarques" cols="30" rows="10"></textarea>
  <br>
  <input type="button" value="mon bouton" onclick="verif()">
  <input type="submit" value="Ajouter" name="ajouter">
  <input type="submit" value="Supprimer" name="supprimer">
  <input type="submit" value="Afficher" name="afficher">
  <input type="submit" value="Mise à jour" name="maj">

  <input type="reset" value="Reinitialiser">
</form>
    </body>
</html>
<?php
$login = $_POST['login'];
$passwd = $_POST['passwd'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naiss = $_POST['date_naiss'];
$heure = $_POST['heure'];
$mail = $_POST['mail'];
$sexe = $_POST['sexe'];
$language = $_POST['language'];
$frelance =$_POST['frelance'];
$hybride =$_POST['hybride'];
$site =$_POST['site'];
$remote =$_POST['remote'];
$foot=$_POST['foot'];
$hand=$_POST['hand'];
$tennis=$_POST['tennis'];
$pays = $_POST['pays'];
$remarques = $_POST['remarques'];
require ("config.php");
if (!isset($_POST['foot'])){
    $foot="N";
}
if (!isset($_POST['hand'])){
    $hand="N";
}
if (!isset($_POST['tennis'])){
    $tennis="N";
}
if (!isset($_POST['freelance'])){
    $frelance="N";
}
if (!isset($_POST['hybride'])){
    $hybride="N";
}
if (!isset($_POST['site'])){
    $site="N";
}
if (!isset($_POST['remote'])){
    $remote="N";
}
$sql="INSERT INTO users VALUES ('$login','$passwd','$nom ','$prenom','$date_naiss','$heure','$mail','$sexe','$language','$foot','$hand','$tennis','$frelance','$hybride','$site','$remote','$pays','$remarques');";
mysqli_query($conn,$sql)

    
?>
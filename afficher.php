<?php
$login =$_POST['login'];
require ("config.php");
$sql="select * from users WHERE login='$login';";
$res=mysqli_query($conn,$sql);
$en=mysqli_fetch_array($res);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="fonctions.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL IN ONE V2025 By bahaeddine </title>
</head>
<body>
    <form action="afficher.php" method="post" name="f1">
         Login: <input type="text" name="login" id="login" value="<?php echo htmlspecialchars($en['login']); ?>"><br>
        Mot de passe: <input type="password" name="passwd" id="passwd" value ="<?php echo $en[1]; ?>"><br>
            Nom: <input type="text" name="nom" id="nom" value ="<?php echo $en[2]; ?>"> <br>
            Prénom: <input type="text" name="prenom" id="prenom" value ="<?php echo $en[3]; ?>"><br>
            Date de Naissance: <input type="date" name="date_naiss" id="date_naiss" value ="<?php echo $en[4]; ?>"> <br>
            Heure: <input type="time" name="heure" id="heure" value ="<?php echo $en[5]; ?>"> <br>
            Email: <input type="email" name="mail" id="mail" placeholder="aaaa@bbbb.cc" value ="<?php echo $en[6]; ?>"> <br>
            <fieldset>
                <legend>Sexe :</legend>
                <input type="radio" name="sexe" id="homme"  value="H"<?php if ($en[7]=="H"){echo "checked";} ?>>Homme
                <input type="radio" name="sexe" id="femme" value="F"<?php if ($en[7]=="F"){echo "checked";} ?>>Femme
            </fieldset>
            <br>
            <label for="">Language</label>
            <input list="languages" name="language" id="language" value ="<?php echo $en[8]; ?>">
            <datalist id="languages">
                <option value="PHP">
                <option value="HTML">
                <option value="Javascript">
                <option value="CSS">
            </datalist>
            <br>
            <label for="">Preférence Travail</label>
            <input type="checkbox" name="frelance" id="frelance" value="O" <?php if($en[9]=="O"){echo "checked";} ?> >Frelance
            <input type="checkbox" name="hybride" id="hybride" value="O" <?php if($en[10]=="O"){echo "checked";} ?> >Hybride
            <input type="checkbox" name="site" id="site" value="O" <?php if($en[11]=="O"){echo "checked";} ?> >Sur Site
            <input type="checkbox" name="remote" id="remote" value="O" <?php if($en[12]=="O"){echo "checked";} ?> >Remote

            <br>
            Sports:
            <input type="checkbox" name="foot" id="foot" value="O"  <?php if($en[13]=="O"){echo "checked";} ?>>Football
            <input type="checkbox" name="hand" id="hand" value="O" <?php if($en[14]=="O"){echo "checked";} ?> >Handball
            <input type="checkbox" name="tennis" id="tennis" value="O" <?php if($en[15]=="O"){echo "checked";} ?>>Tennis
<br>
<select name="pays" id="pays">
<option>Veuillez choisir un pays SVP</option>
<option value="TN" <?php if($en[16]=='TN'){ echo "selected";} ?> >Tunisie</option>
<option value="AL" <?php if($en[16]=='AL'){ echo "selected";} ?>>Algérie</option>
<option value="LY" <?php if($en[16]=='LY'){ echo "selected";} ?>>Lybie</option>
</select>
<br>

    Remarques:
    <br>
    <textarea name="remarques" id="remarques" cols="30" rows="10" value ="<?php echo $en[17]; ?>"></textarea>
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

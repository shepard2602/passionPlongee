<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
        <meta charset="utf-8">
</head>
<form method="post" action="/index.php">
  <input type="text" name="prenom" value="toto" />

  <label for="jour">Selectionne ton jour de naissance</label>
  <select name="jour">
    <?php
        for ($i=1; $i < 32; $i++) {
          echo '<option value="'.$i.'">'.$i.'</option>';
        }
     ?>
  </select>

  <input type="submit" value="envoyer"/>
</form>

<?php
if(isset($_POST['prenom']) && isset($_POST['jour']))
{
  echo "bonjour ".$_POST['prenom'];
  echo " tu est né le ".$_POST['jour'];
}

 ?>

 <br/>
  <a href="https://www.google.fr">google</a>
  <p>
      Voici une photo de plongée:<br/>
      <a href="img/Basking_Shark.jpg"><img src="img/basking_sharkmini.jpg" alt="photo plongée" title="cliquez pour agrandir"/></a>
      <figcaption>Plongeur et requin pelerin en mer d'Irlande</figcaption>
  </p>

  <form method="post" action="/index.php">
    <p>
      <label for="pseudo">Votre pseudo :</label>
      <input type="text" name="pseudo" id="pseudo"/>
      <br/>
      <label for="pass">Votre mot de passe :</label>
      <input type="password" name="pass" id="pass"/>
      <br/>
      <input type="submit" value="Envoyer"/>

    </p>
</html>

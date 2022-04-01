<?php

  $servname = 'localhost';
  $dbname = 'IDAW';
  $user = 'root';
  $pass = 'root';

  print_r($_POST);
             
  try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $ajoutAliments = $dbco->prepare("INSERT INTO aliments (ID_aliment, Nom, ID_type) VALUES('$_POST[id]','$_POST[nom]','$_POST[type]')");
    $ajoutAliments->execute();

  }

  catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
  }

          
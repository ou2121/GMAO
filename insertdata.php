<?php

include ('dbconnection.php');
if(isset($_POST['ajouter'])){
$marque = $_POST['marque'];
$immatricule = $_POST['immatricule'];
$parc = $_POST['parc'];
$chassis  = $_POST['chassis'];

$query = "insert into `listeautocar`(`marque`,`immatricule`,`numero_parc`,`numero_chassis`) values ('$marque' ,'$immatricule',
'$parc','$chassis')";
$result = mysqli_query($connection,$query);

    header('location:index.php?insert_msg=your data has been added seccusfuly');
}


?>



 
<?php include('header.php');?>
<?php include('dbconnection.php');?>


<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM `listeautocar` where `id` = '$id' ";

  $result = mysqli_query($connection,$query);
if(!$result)
{
    die("query filed"  );
}
else{
   $row = mysqli_fetch_assoc($result);  

}}






?>

<?php

if(isset($_POST['update'])){

  if(isset($_GET['id_new'])){
    $idnew =$_GET['id_new'];
  }
    
$marque = $_POST['marque'];
$immatricule = $_POST['immatricule'];
$parc = $_POST['parc'];
$chassis = $_POST['chassis'];

$query = "UPDATE `listeautocar` set `marque`  = '$marque' , `immatricule` = '$immatricule', `numero_parc` = '$parc', `numero_chassis` = '$chassis' where
  `id` = '$idnew' ";
$result = mysqli_query($connection,$query);

  if(!$result){
    die("query failed");
  }
else{
  header('location:index.php?update_msg= UPDETEDDD');
}}

?>


<form action="update.php?id_new=<?php echo $id; ?> " method="post">

<div class="form-group">
        <label for="marque">Marque</label>  
       <input type="text" name= "marque" class="form-control" value="<?php echo $row['marque']?>">  
</div> 
<div class="form-group">
        <label for="immatricule">Immatricule</label>  
       <input type="text" name= "immatricule" class="form-control" value="<?php echo $row['immatricule']?>">  
</div> 
<div class="form-group">
        <label for="parc">Num de parc</label>  
       <input type="text" name= "parc" class="form-control" value="<?php echo $row['numero_parc']?>">  
</div> 
<div class="form-group">
        <label for="chassis">Num de chassis</label>  
       <input type="text" name= "chassis" class="form-control" value="<?php echo $row['numero_chassis']?>">  
</div> 
    
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="update" value="Update">
      </div>
      </form>














<?php include('footer.php');?>
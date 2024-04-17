<?php include('header.php');?>
<?php include('dbconnection.php');?>
<div class="box1"> 
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" >Ajouter autocar</button>
</div>
  <table class="table table-hover table-bordered table-striped">
<thead>
    <tr>
      <th> id </th>
      <th> Marque </th>
      <th> Immatriculé</th>
      <th> Num de parc</th>
      <th> Num de chassis</th>  
      <th> Update</th>  
      <th> Delete</th>  
    </tr>
</thead>
<tbody>

<?php 
$query = "SELECT * FROM `listeautocar` ";

$result = mysqli_query($connection,$query);
if(!$result)
{
    die("query filed"  );
}
else{
    while($row = mysqli_fetch_assoc($result)){
        ?>
<tr>
    <td><?php echo $row['id'];?> </td>
    <td><?php echo $row['marque'];?></td>
    <td><?php echo $row['immatricule'];?></td>
    <td><?php echo $row['numero_parc'];?></td>
    <td><?php echo $row['numero_chassis'];?></td>
    <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update </a></td>
    <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>

    
  </tr>
        <?php
    }
}


?>
 
</tbody>
  </table>


  <form action = "insertdata.php" method="post">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau Autocar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<div class="form-group">
        <label for="marque">Marque</label>  
       <input type="text" name= "marque" class="form-control">  
</div> 
<div class="form-group">
        <label for="immatricule">Immatricule</label>  
       <input type="text" name= "immatricule" class="form-control">  
</div> 
<div class="form-group">
        <label for="parc">Num de parc</label>  
       <input type="text" name= "parc" class="form-control">  
</div> 
<div class="form-group">
        <label for="chassis">Num de chassis</label>  
       <input type="text" name= "chassis" class="form-control">  
</div> 
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <input type="submit" class="btn btn-primary" name="ajouter" value="Ajouter">
      </div>
    </div>
  </div>
</div>
</form>

<?php include('footer.php') ?>
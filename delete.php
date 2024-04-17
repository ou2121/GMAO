<?php    include('dbconnection.php');?>
<?php 

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "delete from `listeautocar` where `id` = '$id'";
    $result = mysqli_query($connection,$query);
 if(!$result){

    die("query failed");
 }
else{
    header('location:index.php?delete_msq=deleted');

}}

?>
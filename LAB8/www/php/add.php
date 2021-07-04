<?php
require "conDB.php";

$id = $_POST['ID'];
$name = $_POST['name'];
$pre_name = $_POST['pre_name'];
$subject_id = $_POST['subject_id'];

try{
    $sql ="INSERT INTO tp_register
           VALUES('$id','$pre_name','$name','$subject_id')";
   $mysqli->query($sql);

    if($mysqli->error == null)
       header("Location:/add.php");
}
catch(Excaption $e){
    echo $e->getMassage();
}
?>
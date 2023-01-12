<?php

include_once "connexion.php";
$id= $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM martin WHERE id = $id");
header("Location:index.php")
?>
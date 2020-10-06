<?php

include "connection.php";

$update=$db->exec("update gunung set nama='".$_POST["nama"]."',letak='".$_POST["letak"]."'where id=".$_POST["id"]);

if ($update) {
    header("Location:index.php");
}
<?php

include "connection.php";

$input=$db->exec("insert into gunung(nama,letak) values('".$_POST["nama"]."','".$_POST["letak"]."')");
if ($input) {
    header("Location:index.php");
}


var_dump($_POST);


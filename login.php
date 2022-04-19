<?php
$user = $_POST ["user"];
$pass = $_POST ["pass"];

$usuario = "narautrera";
$contrasena = "backend2022";

if ($usuario == $user && $contrasena == $pass) {
  print ("Acceso Concedido");
} else {
  print ("Acceso Denegado");
}

 ?>

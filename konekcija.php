<?php


$servername = 'localhost';
$username = 'unidasco_project';
$password = 'malasnala10';
$database = 'unidasco_projects';


//kreiranje konekcije sa bazom
$konekcija = new mysqli ($servername, $username, $password, $database);


//provera konekcije sa bazom

if ($konekcija->connect_error) {
    die("Connection failed: " . $konekcija->connect_error);
}
return $konekcija;



?>
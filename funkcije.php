<?php
session_start();//posto se funkcije pokrecu pre svega, bolje je da pocetak sesije stoji u ovom fajlu gde su funkcije

// prikazuje sve greske PHPa u browseru
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
 function logovan(){//provera da li je neko logovan i mogu da koristim za prikaz imena korisnika, na primer

    if (isset($_SESSION['korisnickoIme'])) {
 
         return $_SESSION['korisnickoIme'];
  
    }
    else {
        return null;
    }
     }

function konekcija(){
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
}    
     
    


function getKategorije($konekcija){

    $kat=array();//smesti u varijablu niz

    $kategorije = mysqli_query($konekcija,"SELECT * FROM `kategorije`");//upit iz mysqla
    while ($row = mysqli_fetch_assoc($kategorije)) { //dok ima rezultata prema varijabli kategorije
     
    $kat[ $row['id']] = $row['naziv'];//smesti u kat od row-id naziv, kada pozoves kat od 1 dobijes naziv kategorije sa id 1
          }

    return $kat;// vrati rezultat niza kat

}

 
 
 
 
      
?>
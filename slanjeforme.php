<?php
session_start();
include('konekcija.php');

 
        

    $ime = mysqli_real_escape_string($konekcija, $_REQUEST['ime']);
    $prezime = mysqli_real_escape_string($konekcija, $_REQUEST['prezime']);
    $email = mysqli_real_escape_string($konekcija, $_REQUEST['email']);
    $lozinka = mysqli_real_escape_string($konekcija, $_REQUEST['lozinka']);
    
     
//unosenje podatka u bazu
    $forma = "INSERT INTO korisnik (ime, prezime, email, lozinka) VALUES ('$ime', '$prezime', '$email','$lozinka')";
    if(mysqli_query($konekcija, $forma)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($konekcija);
    }
    
    
    
    
    
    


 

?>
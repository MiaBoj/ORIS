<?php
 

 include_once('funkcije.php');
 
 $konekcija=konekcija();
 if (isset($_POST['logout'])) {//za logout sa stranice, kroz post se zna da li je odradjena akcija za logout klik na dugme
    
 session_unset();
 session_destroy();
}
  
 if (isset($_POST['korisnickoIme']) && isset($_POST['lozinka'])) {
 
    //provera korisnika
$ime = $_POST['korisnickoIme'];
$lozinka = $_POST['lozinka'];
 $sql = "SELECT *  FROM `korisnik` WHERE `korisnickoIme` LIKE '$ime' AND `lozinka` LIKE '$lozinka' ";//proverava da li postoje lozinka i korisnicko ime u bazi
$provera = mysqli_query($konekcija, $sql);
//echo $sql;  
//printf("Error message: %s\n", mysqli_error($konekcija));

 if($user=mysqli_fetch_assoc($provera)){//mysqli_fetch_assoc kupi niz od mysql upita iz baze, tj pokupi iz korisnik tabele podatke i uporedi sa onim sto je uneto iz polja za korisnicko ime
                             echo $_SESSION['korisnickoIme']=$user['korisnickoIme'];// zapamtiti u sesiji logovanog korisnika iliti na taj nacin se uloguje korisnik;
                             $_SESSION['id']=$user['id'];//cuva u sesiji id podatak
                             $_SESSION['isAdmin']=$user['isAdmin'];//user je varijabla za korisnickoIme, a koristi se za proveru posle da li je korisnik Admin;
                             $_SESSION['isKlub'] = $user['isKlub'];//proverava da li je user predstavnik kluba;
                              						 }  else {
                                                           echo'Neispravni podaci!';
                                                       }


      
}//dohvatanje podataka iz klijentovog unosenja u input polje i prikazivanje na stranici sa username
 
  





//echo 'trenutno logovan je ' . $_SESSION['korisnickoIme'];//sa ovim kodom prikazace uvek da je korisnik logovan cak iako zatvori web stranicu
function loginForm()
{
 if (logovan()) {// ako je korisnik logovan onda mu ne prikazuje login formu, nego mu prikazuje logout dugme
  echo '<h6>Cao ' .logovan(). '</h6>';
   // kad se doda na drugim stranicama login deo onda ukloniti ovu liniju koda
  echo '<form action="#" method="post"><input type="submit" name="logout" value="Logout" class="btn btn-primary btn-block"></form>';
  echo'<form action="korisnickint.php" method="post">
 <input type="submit" name="reg_button" value="Profil" class="btn btn-primary btn-block" /></form>
';
 }

 else {
     //ako korisnik nije logovan prikazuje mu login formu
     echo'    <form action="#" method="post">
     <div class="form-group" style="margin-bottom: 0;">
         <input type="text" id="korisnickoIme" name="korisnickoIme" placeholder="Korisnicko Ime" class="form-control form-control-sm"   required="">
     </div>
     <div class="form-group" style="margin-bottom: 0;">
         <input type="password" id="lozinka" name="lozinka" placeholder="Lozinka" class="form-control form-control-sm"   required="">
     </div>
      
     <div class="form-group">
         <input type="submit" value="Loguj se" class="btn btn-primary btn-block" style="
         width: 211px;
     "> 
         <a href="registracija_korisnika.php" style="font-size: 15px;">Registracija korisnika</a><br>
         <a href="#" style="font-size: 15px;">Zaboravljena lozinka?</a>

     </div>
     
 </form>'
    ;
 }
}
// kod za forgot password <div class="form-group text-center">
        // <small><a href="#" data-toggle="modal" data-target="#modalPassword">Forgot password?</a></small>
    
    // </div>
 

  

 ?>


  

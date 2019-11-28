<?php
include ('funkcije.php');
include ('header.php');


 ?>

<div class="row">
            <div class="col-md-4">
            <div class="card card-profile">
            <div class="detalji">    
            <div class="card-avatar">
           <?php if(logovan()){
//$result = "SELECT `naziv`,`skraceno`,`drzava` FROM `klubovi` "; za prikaz podataka iz klubova
// $prikaz=mysqli_query($konekcija,$result);
 
$result = "SELECT *, klubovi.id as prikazKlub FROM `korisnik`,`klubovi` where `korisnik`.`isKlub`=`klubovi`.`id` and korisnik.korisnickoIme like '".logovan()."'
";//upit za prikaz prema isKlub
 $prikaz = mysqli_query($konekcija,$result);
if($row = mysqli_fetch_assoc($prikaz))
{
 //if($row = mysqli_fetch_assoc($result1)){//upit za prikaz prema isKlub

        
       echo "<b>Naziv:</b> ". $row['naziv'];
       echo "<br /><b>Skraceni naziv:</b> ".$row['skraceno'];
       echo "<br /><b>Drzava:</b> ".$row['drzava'];
//}
      }
}
?>

                    <img class="img" name="logo"style="width: 200px;">
                  
                </div>
                <div class="card-body">
          
                  
                 </div>
 </div>
                 <a href="klubProfil.php" type="button"  class="buton btn btn-primary btn-round profilK">Izmeni profil</a>

                 <a href="korisnickint.php" type="button"   class="btn btn-primary btn-round profilK" >Povratak na Profil takmicara</a>

              </div>
              
            </div>
            <!--leva strana-->
            <div class="col-md-8">
     
    
                
     <div class="card">
    
                                 <div class="card-content">
                                     <div class="nav-tabs-navigation">
                                         
                                   <div class="podmeni">
                                             <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                 <li class="active" ><a href="#prijave" data-toggle="tab" aria-expanded="true">Takmicari</a></li>
                                                 <li class="link"><a href="#profile" data-toggle="tab" aria-expanded="false">Prijava takmicenja</a></li>
                                                  <li class="link"><a href="#poruka" data-toggle="tab" aria-expanded="false">Administracija</a></li>
 
                                   </ul>
 </div>
                                         
                                     </div>



                                     <div id="my-tab-content" class="tab-content text-center">
                                         <div class="tab-pane active" id="prijave">
                                         <!--pocetak koda za izmene-->
                                         <?php



$klub = "SELECT id FROM `klubovi` ";
$klubovi = mysqli_query($konekcija, $klub);
$row = mysqli_fetch_array($klubovi);

$idKLub = $row['id'];//id kluba







$takmicar = "SELECT * FROM takmicari WHERE idKLub=$idKLub";
 //$kategorijaT= "SELECT *, kategorije.naziv as nazivkategorije FROM `takmicari`,`kategorije` where `takmicari`.`idKategorije`=`kategorije`.`id`";
 
 $kat=getKategorije($konekcija);
$prikaz = mysqli_query( $konekcija, $takmicar );
//$prikaz1 = mysqli_query($konekcija, $kategorijaT);
echo "<table border='1' cellpadding='5'>";

echo '<tr>  <th>Ime</th> <th>Prezime</th><th>Kategorija</th><th>Registracioni Broj</th> <th>Broj cipa</th><th colspan="2">Akcije</th> </tr>';
 
while( $row = mysqli_fetch_array( $prikaz ) ) {
     
  echo '<tr>';
 
    echo '<td>' . $row['ime'] . '</td>';

    echo '<td>' . $row['prezime'] . '</td>';

    echo '<td>' . $kat[$row["idKategorije"]] . '</td>';

    echo '<td>' . $row['registracioniBroj'] . '</td>';

    echo '<td>' . $row['brojCipa'] . '</td>';

    echo '<td><a href="izmeni.php?id=' . $row['id'] . '">Izmeni</a></td>';

    echo '<td><a href="obrisi.php?id=' . $row['id'] . '">Ukloni</a></td>';
    echo '</tr>';


}

 echo '</table>';

 
?>
 
<p><a href = 'dodajt.php'>Dodaj novog takmicara</a></p>

<!--kraj koda za izmene-->               </div>
                                         <div class="tab-pane" id="profile">
                                            
       <hr>
        <a href="noviTakmicar.php" type="button" class="btn btn-primary btn-round" style="
    width: 40%;
display:inline;    margin-bottom: 15px;
">Kreiraj novog takmicara</a>
     </form>				                        </div>
                                         <div class="tab-pane" id="messages">
                                           
                                         <p>Dodavanje novog takmicara kluba</p>
       <a href="registracija_korisnika.php" type="button" class="btn btn-primary btn-round" style="
    width: 40%;
display:inline;    margin-bottom: 15px;
">Kreiraj novog takmicara</a>
<div>
  <?php
 if(isset($_POST["ime"])){
  						  
					 //unosenje podataka u bazu
                          $forma = "INSERT INTO `takmicari`(`ime`, `prezime`, `idKlub`, `brojCipa`, `idKategorije`) VALUES ('".$_POST["ime"]."', '".$_POST["prezime"]."', '".$_POST["idKlub"]."', '".$_POST["brojCipa"]."', '".$_POST["idKategorije"]."')";  
                        
                        
                         if(mysqli_query($konekcija, $forma)){
							 echo "Uspesno poslati podaci.";
						 } else{
							 echo "Ne moze se izvrsiti: $forma. " . mysqli_error($konekcija);
						 }
 			
}
else
{
echo '

<div class="card">
                
                <div class="card-body">
                  <form action="#" method="POST">
                    <div class="row">
                      <div class="col-md-5">
                           <label class="bmd-label-floating">Ime</label>
                          <input type="text" name="ime" class="form-control" >
                        </div>
                       
                      <div class="col-md-5">
                           <label class="bmd-label-floating">Prezime</label>
                          <input type="text" name="prezime" class="form-control">
                         
                      </div>
                       
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                           <label class="bmd-label-floating">Broj cipa</label>
                          <input type="text" name="brojCipa" class="form-control">
                        
                      </div>
                      <div class="col-md-5">
                      <label class="bmd-label-floating">Kategorija</label>
                      <br>
                      <select name="idKategorije" id="kategorije" class="form-control-label" >';
                      $kategorije = mysqli_query($konekcija,"SELECT * FROM `kategorije`");
while ($row = mysqli_fetch_assoc($kategorije)) {
echo '
<option class="opcije" value="'.$row["id"].'">'.$row["naziv"].'</option>';
}
echo' 

</select> 	

                      </div>
                       
                    </div>
                    <div class="row">
                    
					 
					 

                      <div class="col-md-5">
                         <label class="bmd-label-floating">Klub</label>
<br>
                       <select name="idKlub" id="idKlub" class="form-control-label" >';
    
$klubovi = mysqli_query($konekcija,"SELECT * FROM `klubovi`");
while ($row = mysqli_fetch_assoc($klubovi)) {
echo '
<option value="'.$row["id"].'">'.$row["naziv"].'</option>';
}
 echo' 
 
</select> 	 
                        
					  </div>
					  
                     </div>
                  <br>
                    <input type="submit" value="Registracija" class="btn btn-primary "></button>                 
                      
                 
                </div>
               
                </form>



 
        </div>
';}
?>
</div>
                                         </div>
                                         <div class="tab-pane" id="poruka">
                                             <p>Administracija</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                           </div>
           </div>
          
 <?php
include ('footer.php');

?>
 
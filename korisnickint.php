<?php
include ('funkcije.php');
 
include ('header.php');


 ?>

<div class="row">
            <div class="col-md-4">
            <div class="card card-profile">
            <div class="detalji">    
            <div class="card-avatar">
              
                 
                   
                </div>
                <div class="card-body">
<?php
 
 if(logovan()){
$result = "SELECT `korisnickoIme`,`ime`,`prezime`,`email` FROM `korisnik` WHERE korisnickoIme = '".$_SESSION['korisnickoIme']."'";
$prikaz=mysqli_query($konekcija,$result);
 $kat=getKategorije($konekcija);


while($row = mysqli_fetch_assoc($prikaz))
{



        
       echo "<b>Ime:</b> ". $row['ime'];
       echo "<br /><b>Prezime:</b> ".$row['prezime'];
       echo "<br /><b>Email:</b> ".$row['email'];
       echo "<br /><b>Korisnicko ime:</b> ".$row['korisnickoIme'];
}
}
 
?>
                  
                 </div>
 </div>
                 <a href="korisnikProfil.php" type="button"  class="buton btn btn-primary btn-round profilK">Izmeni profil</a>

                 <a href="registracija_klub.php" type="button"   class="btn btn-primary btn-round profilK" >Kreiraj novi klub</a>

              </div>
              
            </div>
            <!--leva strana-->
            <div class="col-md-8">
     
    
                
     <div class="card">
    
                                 <div class="card-content">
                                     <div class="nav-tabs-navigation">
                                         <div class="nav-tabs-wrapper">
                                   <div class="podmeni">
                                             <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                                                 <li class="active" ><a href="#prijave" data-toggle="tab" aria-expanded="true">Prijava takmicenja</a></li>
                                                 <li class="link"><a href="#profile" data-toggle="tab" aria-expanded="false">Povezivanje profila</a></li>
                                                
                                                 <?php
                                                 if(isset($_SESSION['isKlub'] )==$_SESSION['korisnickoIme']){//ako je admin onda ima prikaz ovog menija, u suprotnom nema pristup 
                                                  //tj opcija u meniju nije vidljiva

                                              
                                              
                                                 echo '<li class="link"><a href="#messages" data-toggle="tab" aria-expanded="false">Uredjivanje kluba</a></li>
                                                 ';
                                                
                                                
                                                
                                                
                                                }
 ?>
                                                
                                                
                                                
                                                
                                                
                                                
                                               
                                              
                                              <?php
                                                 if(isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']==1){//ako je admin onda ima prikaz ovog menija, u suprotnom nema pristup 
                                                  //tj opcija u meniju nije vidljiva

                                              
                                              
                                                 echo '<li class="link"><a href="#poruka" data-toggle="tab" aria-expanded="false">Administracija</a></li>';
                                                
                                                
                                                
                                                
                                                }
 ?>
                                   </ul>
 </div>
                                         </div>
                                     </div>



                                     <div id="my-tab-content" class="tab-content text-center">
                                         <div class="tab-pane active" id="prijave">
                                         <table class="table ">
                     <thead class="text-warning" >
                       <tr style="
     color: #f76d22;
 "> 
                       <th>Datum</th>
                       <th>Naziv</th>
                       <th>Mesto</th>
                     </tr></thead>
                     <tbody>
                       <tr>
                        
                         <td>17.07.2019</td>
                         <td>Kopaonik Open 2019 - Five-day six-stages orienteering challenge</td>
                         <td>Kopaonik</td>
                       </tr>
                       <tr>
                       
                       <td>17.07.2019</td>
                         <td>PTT Kup</td>
                         <td>Divcibare</td>
                       </tr>
                       <tr>
                         
                       <td>17.07.2019</td>
                         <td>Kopaonik Open 2019 - Five-day six-stages orienteering challenge</td>
                         <td>Kopaonik</td>
                       </tr>
                       
                     </tbody>
                   </table>				                        </div>
                   <div class="tab-pane" id="profile">                  
<?php
if (isset($_POST['button'])) {
 $id =  $_SESSION['id'];
$registracija = mysqli_real_escape_string( $konekcija,$_POST['registracioniBroj'] );
 
$sql="SELECT id FROM takmicari where registracioniBroj = $registracija";
$odgovor = mysqli_query($konekcija,$sql);
$row = mysqli_fetch_array($odgovor);
$idTakmicar = $row['id'];

 $update = "UPDATE korisnik SET korisnik.idTakmicara = $idTakmicar WHERE id=$id";
 $odgovor1 = mysqli_query($konekcija,$update);



$update1 = "UPDATE takmicari SET takmicari.idKorisnik = $id WHERE id=$idTakmicar";
$odgovor2 = mysqli_query($konekcija,$update1);
echo "Korisnik je povezan sa profilom takmicara! Mozete nastaviti sa daljom prijavom.";
}
else {
  echo '  
  <p>Unesite vas registracioni broj iz saveza kako biste izvrsili povezivanje sa takmicarskim profilom</p>
<form class="form-inline my-2 my-lg-0" method=post><input class="form-control mr-sm-2" type="text" name="registracioniBroj" placeholder="Povezivanje profila" aria-label="Search">
  <input name="button" class="btn btn-secondary my-2 my-sm-0" type="submit" value="Potvrdi "> 
  <hr>';
}
       ?>
        <p>Dodavanje novog takmicara kluba</p>
       <a href="noviTakmicar.php" type="button" class="btn btn-primary btn-round" style="
    width: 40%;
display:inline;    margin-bottom: 15px;
">Kreiraj novog takmicara</a>
     </form>				                        </div>
                                         <div class="tab-pane" id="messages">
                                                                                  <?php include('uredjivanjeKluba.php');
?>
                                         </div>
                                         <div class="tab-pane" id="poruka">
                                             <?php include('admin.php');
                                             
                                             
                                             
                                             ?>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                           </div>
           </div>
          
 <?php
include ('footer.php');

?>
 

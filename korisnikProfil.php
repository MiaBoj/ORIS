<?php
include ('funkcije.php');
 //  header( 'Location: korisnickint.php' );


 $korisnik =logovan();
 $konekcija=konekcija();

if(isset($_POST['ime']))
{
 
   //uzimanje podataka iz forme 
    $ime = $_POST['ime'];
 $prezime = $_POST['prezime'];
 $email = $_POST['email'];
 $lozinka = $_POST['lozinka'];
   // mysqli upit za uzimanje podataka iz unosa
   $updatek = "UPDATE `korisnik` SET `korisnickoIme`='".$korisnik."',`ime`='".$ime."', `prezime`='".$prezime."',`email`='".$email."',`lozinka`='".$lozinka."' WHERE  korisnickoIme  = '".$_SESSION['korisnickoIme']."'";
 
   
   $rezultat = mysqli_query($konekcija, $updatek);
   
   header( 'Location: korisnickint.php' );
 }else{ 
  include ('header.php');
 //upit za ubacivanje vrednosti u polja inputa iz baze, vrsi se preko selecta i prikazuje u input kako bi polja imala vrednosti definisane u bazi
            $result = mysqli_query( $konekcija, "SELECT * FROM korisnik WHERE korisnickoIme  = '".$_SESSION['korisnickoIme']."'" );//upit za prikazivanje podataka iz baze
            $row = mysqli_fetch_array( $result );

            if ( $row ) {

                $ime = $row['ime'];

                $prezime = $row['prezime'];
                $email = $row['email'];
                   
                $lozinka = $row['lozinka'];

            }  //prikazivanje vrednosti iz baze kroz value i definisane varijable iznad. Kako bi mogao da prikaze vrednost varijable ime neophodno je da je definisemo
            //prvo radimo select iz baze a zatim definisemo varijable kroz row i naziv kolone u bazi
  echo'
<div class="card">
                
                <div class="card-body">
                  <form action="#" method="POST">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Ime</label>
                          <input type="text" name="ime" class="form-control" value='.$ime.'  >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Prezime</label>
                          <input type="text" name="prezime" class="form-control" value='.$prezime.'>
                        </div>
                      </div>
                       
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" name="email" class="form-control" value='.$email.' >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Lozinka</label>
                          <input type="password" name="lozinka" class="form-control" value='.$lozinka.' >
                        </div>
                      </div>
                       
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                     
                   
       </div>
       

       <div class="col-md-5">
       <div class="form-group bmd-form-group">

       <label class="bmd-label-floating">Klub</label>
 
       <select name="klubovi" id="klubovi" class="form-control-label" >';

$klubovi = mysqli_query($konekcija,"SELECT * FROM `klubovi`");
while ($row = mysqli_fetch_assoc($klubovi)) {
echo '
<option value="'.$row["id"].'">'.$row["naziv"].'</option>';
}
echo' 

</select> 	 
</div>

</div>


                    </div>
                     <input type="submit" name="button" class="btn btn-primary" value="Izmeni profil">               
                    <a href="korisnickint.php" type="button"   class="btn btn-primary btn-round">Povratak na prethodnu stranu</a> 
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>'
              ;
              
              }?>
<?php
include ('footer.php');

?>
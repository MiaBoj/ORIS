<?php
include ('funkcije.php');
 //  header( 'Location: korisnickint.php' );


 $korisnik =logovan();
 $konekcija=konekcija();

if(isset($_POST['naziv']))
{
 
   //uzimanje podataka iz forme 
    $naziv = $_POST['naziv'];
 $skraceno = $_POST['skraceno'];
 $drzava = $_POST['drzava'];
    // mysqli upit za uzimanje podataka iz unosa
   $updatek = "UPDATE `klubovi` SET `naziv`='".$naziv."',`skraceno`='".$skraceno."', `drzava`='".$drzava."' WHERE korisnickoIme  = '".$_SESSION['korisnickoIme']."'";
 
   
   $rezultat = mysqli_query($konekcija, $updatek);
   
   header( 'Location: klubint.php' );
 }else{ 
  include ('header.php');
 //upit za ubacivanje vrednosti u polja inputa iz baze, vrsi se preko selecta i prikazuje u input kako bi polja imala vrednosti definisane u bazi
            $result = mysqli_query( $konekcija, "SELECT *, klubovi.id as prikazKlub FROM `korisnik`,`klubovi` where `korisnik`.`isKlub`=`klubovi`.`id` and korisnickoIme  = '".$_SESSION['korisnickoIme']."'" );//upit za prikazivanje podataka iz baze
            $row = mysqli_fetch_array( $result );

            

                $naziv = $row['naziv'];

                $skraceno = $row['skraceno'];
                    
                $drzava = $row['drzava'];

            //prikazivanje vrednosti iz baze kroz value i definisane varijable iznad. Kako bi mogao da prikaze vrednost varijable ime neophodno je da je definisemo
            //prvo radimo select iz baze a zatim definisemo varijable kroz row i naziv kolone u bazi
  echo'
<div class="card">
                
                <div class="card-body">
                  <form action="#" method="POST">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Naziv</label>
                          <input type="text" name="naziv" class="form-control" value='.$naziv.'  >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Skraceni Naziv</label>
                          <input type="text" name="skraceno" class="form-control" value='.$skraceno.'>
                        </div>
                      </div>
                       
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Drzava</label>
                          <input type="text" name="drzava" class="form-control" value='.$drzava.' >
                        </div>
                      </div>
                       
                       
                    </div>
                   
                    <input type="submit"    name="button" class="btn btn-primary" value="Izmeni profil">               
                    <a href="klubint.php" type="button"   class="btn btn-primary btn-round">Povratak na prethodnu stranu</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>'
              ;
              
              }?>
<?php
include ('footer.php');

?>
<?php
include ( 'funkcije.php' );

$konekcija=konekcija();

function renderForm( $id, $ime, $prezime, $lozinka, $email, $konekcija ) {
 
    if ( $error != '' ) {

        echo '';

    }

    
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
                          <input type="text" name="prezime" class="form-control" >
                        </div>
                      </div>
                       
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" name="email" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Lozinka</label>
                          <input type="text" name="lozinka" class="form-control" >
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
}

    if ( isset( $_POST['button'] ) ) {

        // provera da li je ID validan pre dobijanja forme
        if ( is_numeric( $_POST['id'] ) ) {

            $id = $_POST['id'];
            

            $ime = mysqli_real_escape_string( $konekcija,$_POST['ime'] );

            $prezime = mysqli_real_escape_string( $konekcija, $_POST['prezime'] );
            $brojCipa = mysqli_real_escape_string( $konekcija, $_POST['brojCipa'] );
            $kat = mysqli_real_escape_string( $konekcija, $_POST['idKategorije'] );


            if ( $ime == '' || $prezime == '' || $brojCipa == ''|| $kat== '' ) {

                $error = 'greska. popunite sva neophodna polja';

                include ( 'header.php' );//prebaceno iz gornjeg dela da se ucita pre bilo kog izvrsavanja
//izvrsava se pre echo komande

                renderForm( $id, $ime, $prezime,$brojCipa, $error,$konekcija );

            } else {

                // cuvanje podataka u bazu

                $sql="UPDATE takmicari SET ime='$ime', prezime='$prezime', brojCipa = '$brojCipa', idKategorije = '$kat' WHERE id='$id'";
                //die($sql);  
                mysqli_query( $konekcija, $sql )

                or die( mysql_error() );

                // redirekcija na prikaz sadrzaja

                header( 'Location: klubint.php' );

            }

        }    else {

            echo 'Error!';

        }

    } else {

        if ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) && $_GET['id'] > 0 ) {

            $id = $_GET['id'];

            $result = mysqli_query( $konekcija, "SELECT * FROM takmicari WHERE id=$id" )

            or die( mysql_error() );

            $row = mysqli_fetch_array( $result );

            if ( $row ) {

                $ime = $row['ime'];

                $prezime = $row['prezime'];
                $kat = $row['idKategorije'];
                $brojCipa = $row['brojCipa'];
                include ( 'header.php' );
                renderForm( $id, $ime, $prezime, $brojCipa,$kat, '', $konekcija );

            } else

            echo 'Nema rezultata';

        }

    }  

    ?>

    <?php
    include ( 'footer.php' );

    ?>

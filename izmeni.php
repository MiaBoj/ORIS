<?php
include ( 'funkcije.php' );

$konekcija=konekcija();

function renderForm( $id, $ime, $prezime, $brojCipa, $error, $kat, $konekcija ) {
    $kat=getKategorije($konekcija);

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
                           <input type="hidden" name="id" class="form-control" value = '.$id.'  >      
                           <strong>Ime: </strong> <input type = "text" name = "ime" class="form-control" value = '.$ime.'><br/>


                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                            <strong>Prezime: </strong> <input type = "text" name = "prezime" class="form-control" value = '.$prezime.'><br/>

                        </div>
                      </div>
                       
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                        <strong>Broj cipa: </strong> <input type = "text" name = "brojCipa" class="form-control" value = '.$brojCipa.'><br/>

                        </div>
                      </div>
                      <div class="col-md-5">
                       
                      </div>
                       
                    </div>
                    <div class="row">

                    <div class="col-md-5">
                    <div class="form-group bmd-form-group">
                    <strong>Kategorija </strong>  <select name="idKategorije" id="kategorije" class="form-control-label" >';
                    foreach($kat as $id => $naziv){
                     echo '<option class="opcije" value="'.$id.'">'.$naziv.'</option> ';
                    }
                  echo'</select>  <br/>
                   </div>
                  </div>



                    </div>
                     <input type = "submit" name = "button" "value = "Izmeni profil" class="btn btn-primary">

                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>';
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

                $sql="UPDATE takmicari SET ime='$ime', prezime='$prezime', brojCipa = '$brojCipa', idKategorije = '$kat' WHERE id='$id' and idKLub=$idKLub";
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

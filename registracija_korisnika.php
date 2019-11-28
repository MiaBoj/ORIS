<?php
include ('funkcije.php');
include ('header.php');


if(isset($_POST['ime']))
{
                         $ime = mysqli_real_escape_string($konekcija, $_REQUEST['ime']);
						 $prezime = mysqli_real_escape_string($konekcija, $_REQUEST['prezime']);
						 $email = mysqli_real_escape_string($konekcija, $_REQUEST['email']);
 						 $korisnickoIme = mysqli_real_escape_string($konekcija, $_REQUEST['korisnickoIme']);
						 $lozinka = mysqli_real_escape_string($konekcija, $_REQUEST['lozinka']);
 						  
					 //unosenje podataka u bazu
						 $forma = "INSERT INTO korisnik (ime, prezime, email, korisnickoIme, lozinka) VALUES ('$ime', '$prezime', '$email', '$korisnickoIme', '$lozinka')";
  						 if(mysqli_query($konekcija, $forma)){
							 echo "Uspesno poslati podaci.";
						 } else{
							 echo "Ne moze se izvrsiti: $sql. " . mysqli_error($konekcija);
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
                           <label class="bmd-label-floating">Email</label>
                          <input type="text" name="email" class="form-control">
                        
                      </div>
                      <div class="col-md-5">
                           <label class="bmd-label-floating">Korisnicko ime</label>
                          <input type="text" name="korisnickoIme" class="form-control">
                         
                      </div>
                       
                    </div>
                    <div class="row">
                    <div class="col-md-5">
                           <label class="bmd-label-floating">Lozinka</label>
                          <input type="password" name="lozinka" class="form-control">
                      
					  </div>
					   <div class="col-md-5">
					   <label class="bmd-label-floating">Kategorija</label>
					   <br>
					   <select name="kategorije" id="kategorije" class="form-control-label" >';
					   $kategorije = mysqli_query($konekcija,"SELECT * FROM `kategorije`");
while ($row = mysqli_fetch_assoc($kategorije)) {
echo '
<option class="opcije" value="'.$row["id"].'">'.$row["naziv"].'</option>';
}
echo' 
 
</select> 	

					   </div>
					 

                      
                     </div>
                     <input type="submit" value="Registracija" class="btn btn-primary "></button>                 
                      
                 
                </div>
               
                </form>



 
        </div>
';
}
include ('footer.php');

?>

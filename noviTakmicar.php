<?php
include ('funkcije.php');
include ('header.php');

 ?>
 <?php
 if(isset($_POST["ime"])){
  						  
					 //unosenje podataka u bazu
                          $forma = "INSERT INTO `takmicari`(`ime`, `prezime`, `idKlub`, `brojCipa`, `idKategorije`) VALUES ('".$_POST["ime"]."', '".$_POST["prezime"]."', '".$_POST["idKlub"]."', '".$_POST["brojCipa"]."', '".$_POST["idKategorije"]."')";  
                        
                        
                         if(mysqli_query($konekcija, $forma)){
                          echo "<h3 class='text-center'>Uspesno poslati podaci!</h3>";
                          echo '<h3 class="text-center"><a href="korisnickint.php" type="button"   class="btn btn-primary btn-round">Povratak na Profil</a>
                          </h3>';
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
<?php
include ('footer.php');

?>

<?php
include ('funkcije.php');
include ('header.php');


?>


<div class="card card-login">
<form action="#" method="post">
                <div class="card-header ">
                
                  <div class="card-header ">
                    <h3 class="header text-center">Logovanje</h3>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      
                    </div>
                    <input type="text" name="korisnickoIme" class="form-control" placeholder="Korisnicko Ime">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                     
                    </div>
                    <input type="password" name="lozinka" placeholder="Lozinka" class="form-control">
                  </div>
                  <br>
                   
                </div>
                <div class="card-footer ">
                <input type="submit" value="Loguj se" class="btn btn-primary btn-block"></button>

                </div>
                </form>
              </div>



<?php


include ('footer.php');



?>
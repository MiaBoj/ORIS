<?php
include ( 'funkcije.php' );
include ( 'header.php' );

?>
<hr>
<div class = 'takmicenjaForma'>
<div class = 'row'>
<div class = 'col-sm-12 col-lg-9'>
<div class = 'card' >
<h5 style = 'margin-left: 42px;color: #f76d22;margin-top: 7px;'><a href="kopaonik.php">KOPAONIK OPEN</a></h5>
</div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<?php if (logovan()) {
echo '<input type="submit" value="Prijava" class="btn btn-primary btn-block"> ';
} else{
  echo ' 
 <button value="Logujte se" class="btn btn-primary btn-block">Loguj se za prijavu!</button> ';
}
?></div>
</div>
<br>
<div class = 'row'>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Datum</code><br><code>17.08.2019.</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Mesto</code><br><code>Kopaonik</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Organizator</code><br><code>PSK Jasenica</code>
</div>
</div><!---->
</div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Distanca</code><br><code>Duga</code>
</div>
</div><!---->
</div>
</div>
</div>
<hr>

</div>
<!--drugi deo-->
<div class = 'takmicenjaForma'>
<div class = 'row'>
<div class = 'col-sm-12 col-lg-9'>
<div class = 'card' style = 'height: 106%;'>
<h5 style = 'margin-left: 42px;color: #f76d22;margin-top: 7px;'>PTT Kup</h5>
</div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<?php if (logovan()) {
echo '<input type="submit" value="Prijava" class="btn btn-primary btn-block"> ';
} else{
  echo ' 
 <button value="Logujte se" class="btn btn-primary btn-block">Loguj se za prijavu!</button> ';
}
?></div>
</div>
<br>
<div class = 'row'>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Datum</code><br><code>17.09.2019.</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Mesto</code><br><code>Divcibare</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Organizator</code><br><code>PD PTT</code>
</div>
</div><!---->
</div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Distanca</code><br><code>Duga</code>
</div>
</div><!---->
</div>
</div>
</div>
<hr>

</div>
<!--treci deo-->
<div class = 'takmicenjaForma'>
<div class = 'row'>
<div class = 'col-sm-12 col-lg-9'>
<div class = 'card' style = 'height: 106%;'>
<h5 style = 'margin-left: 42px;color: #f76d22;margin-top: 7px;'>Kup OK „DIF“</h5>
</div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<?php if (logovan()) {
echo '<input type="submit" value="Prijava" class="btn btn-primary btn-block"> ';
} else{
  echo ' 
 <button value="Logujte se" class="btn btn-primary btn-block">Loguj se za prijavu!</button> ';
}
?></div>
</div>
<br>
<div class = 'row'>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Datum</code><br><code>17.10.2019.</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Mesto</code><br><code>Bukulja</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Organizator</code><br><code>OK DIF</code>
</div>
</div><!---->
</div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Distanca</code><br><code>Duga</code>
</div>
</div><!---->
</div>
</div>
</div>
<hr>

</div>
<!--registracija i logovanje-->
<?php
if ( logovan() ) {
    echo'';} else {
        echo' 

 <div class="row">
        <div class="col-sm-2">
             <div class="well">
           
             
              </div>
        </div>
      
        <div class="col-sm-4">
        
             <div class="well">
               <span><a href="registracija_korisnika.php" class="email" >Registracija korisnika</a> </span>
                        
                          
            
            </div>
        </div>
        <div class="col-sm-4">
             <div class="well">
               <span><a href="logForma.php" class="email" >Logovanje</a> </span>
             </div>
        </div>
        <div class="col-sm-2">
             <div class="well">
            
             </div>
        </div>
      </div>';
    }

    ?>
    <span><img src = 'images/front1.png' class="pocetnaSlika" alt = '' ></span>
    <hr>

    <?php

    include ( 'footer.php' );

    ?>

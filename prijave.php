<?php

include ('funkcije.php');

include ('header.php');

 

 ?>                     
   <div class="takmicenjaForma">
<div class="row">
 <div class="col-sm-12 col-lg-9">
 <div class="card" style="height: 106%;">
<h5 style="margin-left: 42px;color: #f76d22;margin-top: 7px;">Naziv Takmicenja</h5>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<?php if (logovan()) {
echo '<input type="submit" value="Prijava" class="btn btn-primary btn-block"> ';
} else{
  echo ' 
 <button value="Logujte se" class="btn btn-primary btn-block">Loguj se za prijavu!</button> ';
}
?>
</div>
</div>
<br>
<div class="row">
   <div class="col-sm-6 col-lg-3">
     <div class="card"><!----><!---->
      <div class="card-body">
         <div class="text-center">
            <code>Datum</code><br><code>17.07.2019</code>
            </div>
            </div>
<!----></div>
</div>
<div class="col-sm-6 col-lg-3">
      <div class="card"><!----><!---->
        <div class="card-body">
                 <div class="text-center"><code>Mesto</code><br><code>Kopaonik</code>
                 </div>
                 </div>
<!----></div>
</div>
<div class="col-sm-6 col-lg-3">
     <div class="card"><!----><!---->
        <div class="card-body">
        <div class="text-center"><code>Organizator</code><br><code>PSK Jasenica</code>
        </div>
        </div><!---->
        </div>
        </div>
<div class="col-sm-6 col-lg-3">
<div class="card"><!----><!---->
<div class="card-body">
<div class="text-center"><code>Distanca</code><br><code>Duga</code>
</div>
</div><!---->
</div>
</div>
</div>
<hr>

</div>
<!--drugi deo-->
<div class="takmicenjaForma">
<div class="row">
 <div class="col-sm-12 col-lg-9">
 <div class="card" style="height: 106%;">
<h5 style="margin-left: 42px;color: #f76d22;margin-top: 7px;">PTT Kup</h5>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<?php if (logovan()) {
echo '<input type="submit" value="Prijava" class="btn btn-primary btn-block"> ';
} else{
  echo ' 
 <button value="Logujte se" class="btn btn-primary btn-block">Loguj se za prijavu!</button> ';
}
?></div>
</div>
<br>
<div class="row">
   <div class="col-sm-6 col-lg-3">
     <div class="card"><!----><!---->
      <div class="card-body">
         <div class="text-center">
            <code>Datum</code><br><code>17.07.2019</code>
            </div>
            </div>
<!----></div>
</div>
<div class="col-sm-6 col-lg-3">
      <div class="card"><!----><!---->
        <div class="card-body">
                 <div class="text-center"><code>Mesto</code><br><code>Divcibare</code>
                 </div>
                 </div>
<!----></div>
</div>
<div class="col-sm-6 col-lg-3">
     <div class="card"><!----><!---->
        <div class="card-body">
        <div class="text-center"><code>Organizator</code><br><code>PD PTT</code>
        </div>
        </div><!---->
        </div>
        </div>
<div class="col-sm-6 col-lg-3">
<div class="card"><!----><!---->
<div class="card-body">
<div class="text-center"><code>Distanca</code><br><code>Srednja</code>
</div>
</div><!---->
</div>
</div>
</div>
<hr>

</div>
<!--treci deo-->
<div class="takmicenjaForma">
<div class="row">
 <div class="col-sm-12 col-lg-9">
 <div class="card" style="height: 106%;">
<h5 style="margin-left: 42px;color: #f76d22;margin-top: 7px;">Naziv Takmicenja</h5>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<?php if (logovan()) {
echo '<input type="submit" value="Prijava" class="btn btn-primary btn-block"> ';
} else{
  echo ' 
 <button value="Logujte se" class="btn btn-primary btn-block">Loguj se za prijavu!</button> ';
}
?></div>
</div>
<br>
<div class="row">
   <div class="col-sm-6 col-lg-3">
     <div class="card"><!----><!---->
      <div class="card-body">
         <div class="text-center">
            <code>Datum</code><br><code>17.07.2019</code>
            </div>
            </div>
<!----></div>
</div>
<div class="col-sm-6 col-lg-3">
      <div class="card"><!----><!---->
        <div class="card-body">
                 <div class="text-center"><code>Mesto</code><br><code>Kopaonik</code>
                 </div>
                 </div>
<!----></div>
</div>
<div class="col-sm-6 col-lg-3">
     <div class="card"><!----><!---->
        <div class="card-body">
        <div class="text-center"><code>Organizator</code><br><code>PSK Jasenica</code>
        </div>
        </div><!---->
        </div>
        </div>
<div class="col-sm-6 col-lg-3">
<div class="card"><!----><!---->
<div class="card-body">
<div class="text-center"><code>Distanca</code><br><code>Duga</code>
</div>
</div><!---->
</div>
</div>
</div>
<hr>

</div>

 
</div>
<!--sedmi deo-->
 <?php

include('footer.php');

?>
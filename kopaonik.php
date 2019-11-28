<?php
include ( 'funkcije.php' );
include ( 'header.php' );


//prikaz podataka o takmicenju


$result = "SELECT `datum`,`naziv`,`mesto`,`organizator`,`distanca`,`bodovanje`,`cena` FROM `takmicenje`";
$prikaz=mysqli_query($konekcija,$result);
$row = mysqli_fetch_array($prikaz);

if($row){

echo"<div class = 'row'>

 <div class = 'col-sm-6 col-lg-3'>
 
<div class = 'card'><!----><!---->

<div class = 'desc'>

<div class = 'text-center'><code>Datum</code><br><code>". $row['datum']."</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Naziv</code><br><code>". $row['naziv']."</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Mesto</code><br><code>". $row['mesto']."</code>
</div>
</div><!---->
</div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Organizator</code><br><code>". $row['organizator']."</code>
</div>
</div><!---->
</div>
</div>
</div><br>";
echo"<div class = 'row'>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Distanca</code><br><code>". $row['distanca']."</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Bodovanje</code><br><code>". $row['bodovanje']."</code>
</div>
</div>
<!----></div>
</div>
<div class = 'col-sm-6 col-lg-3'>
<div class = 'card'><!----><!---->
<div class = 'desc'>
<div class = 'text-center'><code>Cena</code><br><code>". $row['cena']."</code>
</div>
</div><!---->
</div>
</div>
 
</div>
 
 ";

}
//end?>
 
 <?php
//prikaz prijavljenih takmicara
$konekcija=konekcija();

$kat=getKategorije($konekcija);

$klub = "SELECT id FROM `klubovi` ";
$klubovi = mysqli_query($konekcija, $klub);
$row = mysqli_fetch_array($klubovi);

$idKLub = $row['id'];//podaci o id kluba



$prikaz1 = "SELECT id FROM `takmicenje`";
$podaci=mysqli_query($konekcija,$prikaz1);
$row = mysqli_fetch_array($podaci);
$idTakmicenja=$row['id']; //podaci o id takmicenja
 
$prikaz2 = "SELECT idTakmicara FROM `prijave` WHERE idTakmicenja = $idTakmicenja";
$podaci=mysqli_query($konekcija,$prikaz2);
$row = mysqli_fetch_array($podaci);
$idTakmicar = $row['idTakmicara']; //podaci o id takmicara
  

$nazivK = "SELECT `naziv` FROM `klubovi` WHERE id = $idKLub";
$podaci = mysqli_query($konekcija,$nazivK);
$row = mysqli_fetch_array($podaci);
$nazivKlub = $row['naziv'];//podatak o nazivu kluba



 $prikaz3 = "SELECT * FROM `prijave`,`takmicari` where prijave.idTakmicara=takmicari.id  and idTakmicenja = $idTakmicenja ";//podaci takmicara prijavljenog za odredjeno takmicenje
 
 $takmicari=mysqli_query($konekcija,$prikaz3);
 echo '<br>';
 echo'<div class="card">
<h5 style="margin-left: 42px;color: #f76d22;margin-top: 7px;">Prijavljeni takmicari</h5>';
  echo "<table cellpadding='5'>";

echo '<tr>  <th>Ime</th> <th>Prezime</th><th>Kategorija</th><th>Klub</th> <th>Broj cipa</th></tr>';
 
while( $row = mysqli_fetch_array( $takmicari) ) {
     
  echo '<tr>';
 
    echo '<td>' . $row['ime'] . '</td>';

    echo '<td>' . $row['prezime'] . '</td>';

    echo '<td>' . $kat[$row["idKategorije"]] . '</td>';
    echo '<td>' . $nazivKlub . '</td>';

 
    echo '<td>' . $row['brojCipa'] . '</td>';

     
    echo '</tr>';


}


 echo "</table>";
 echo'</div>';
 
   ?>




   
 <?php
include ( 'footer.php' );

    ?>
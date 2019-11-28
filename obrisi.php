<?php
include ('funkcije.php');
 $konekcija=konekcija();

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

 
$id = $_GET['id'];


$takmicarid= mysqli_query($konekcija,"DELETE FROM prijave WHERE idTakmicara=$id" );
 
$result = mysqli_query($konekcija,"DELETE FROM takmicari WHERE id=$id")

or die(mysqli_error($konekcija));



 
header("Location: klubint.php");

}

else

 
{

header("Location: klubint.php");

}



?>
<?php
include ('footer.php');

?>

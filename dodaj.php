<?php
require ("connect.php");

$tytul = $_POST['Tytul'];
$gatunek = $_POST['Gatunek'];
$rok    = $_POST['Rok'];
$ocena  = $_POST['Ocena'];

$sql= "INSERT INTO filmy(id, tytul , gatunki_id , rok, ocena) VALUES ('','$tytul','$gatunek ','$rok','$ocena')";

$sql2 = "SELECT tytul from filmy";

$result = $dobazy->query($sql);
$result2 = $dobazy->query($sql2);

if($result2->num_rows>0){
while($row = $result2->fetch_assoc()){ echo"FILM: ".$row['tytul'].' '." zostal dodany do bazy".'<br>';    
} 
}
else{
echo "nie znaleziono nic ";
}
?>

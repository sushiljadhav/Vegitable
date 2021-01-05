

<?php
 session_start();
// $latitude=isset($_POST['$latitude']);
// echo ($latitude);

echo $lati = (isset($_POST['x']))?$_POST['x']:'';;
echo $long = (isset($_POST['y']))?$_POST['y']:'';


if(!empty ($lati) && !empty($long)){
   
    $_SESSION["latitude"] = $lati;   
    $_SESSION["longitude"] = $long;
    print_r($_SESSION);
}
?>

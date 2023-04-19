<?PHP
session_start();
$cnx=mysqli_connect("localhost","root","","projet_web");
$nom_process=$_SESSION["processeur"];
$nom_gpu=$_SESSION["gpu"];
$nom_RAM=$_SESSION["RAM"];
$nom_disque=$_SESSION["disque_dur"];
$nom_carte_mere=$_SESSION["carte_mere"];
$Id_Cli=$_COOKIE["compte"];
$dat_config=date("Y-m-d");

$prix_config=$_POST["prix"];

$query="INSERT INTO pc VALUES ('','$nom_process','$nom_gpu','$nom_RAM','$nom_disque','$nom_carte_mere','$prix_config','$dat_config','$Id_Cli')";
$res=mysqli_query($cnx,$query);

mysqli_close($cnx);



header("Location: ../Home_Produit/homeproduit.php");

?>
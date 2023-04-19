<?PHP
session_start();
$mdp=$_POST["mdp"];
$c_mdp=$_POST["Confirm_Password"];
$captcha=$_POST["captcha"];
$img=$_POST["image"];
$n=strlen($mdp);
$_SESSION["erreur1"]=false;
$_SESSION["erreur2"]=false;
$_SESSION["erreur3"]=false;

$_SESSION["prenom"]=$_POST['prenom'];
$_SESSION["nom"]=$_POST['nom'];
$_SESSION["email"]=$_POST['email'];



if($n<8){$_SESSION["erreur1"]=true;}
else{$_SESSION["mdp"]=$_POST['mdp'];}
if($mdp!=$c_mdp){$_SESSION["erreur2"]=true;}
if($captcha!=$img){$_SESSION["erreur3"]=true;}
if($_SESSION["erreur1"] || $_SESSION["erreur2"] || $_SESSION["erreur3"]){header("Location: Form_error.php");}
else{
	header("Location: email.php");
    }

?>
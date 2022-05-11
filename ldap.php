<?php
 
$ldapServer = "ldap://192.168.108.171:389";
$ldapServerPort = 389;
$dn="RESILIENCE340\caprice";
$mdp="Hbzd.34070";
//echo "Connexion au serveur ... <br />";
//echo '<script type="text/javascript">window.alert("Connexion au serveur ... <br />");</script>';
$conn=ldap_connect($ldapServer);
 
if ($conn)
{
	ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION, 3); 

	// Connexion authentifiée
	$bindServerLDAP=ldap_bind($conn,$dn,$mdp);
 
	// en cas de succès de la liaison, renvoie Vrai
	if ($bindServerLDAP)
	{
	  //echo "LDAP connecté avec Succès <br />";
	  echo '<script type="text/javascript">window.alert("LDAP connecté avec Succès, Veuillez effectué la double authentification");</script>';
	}
	else
	{
		echo '<script type="text/javascript">window.alert("Liaison impossible au serveur ldap ...<br />");</script>';
	}
 
	//cloture de la session
	//echo '<script type="text/javascript">window.alert("Fermeture de la connexion");</script>';
	ldap_close($conn);
	
}
else
{
	//header('Location: http://resilience34:8181/connexion.php');
	echo '<script type="text/javascript">window.alert("connexion impossible au serveur LDAP");</script>';
}


// connexion bdd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=resilience34;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>
<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location:main_login.php");
    exit(0);
}

require(dirname(__DIR__).'/common/includes/class_user.php');
require(dirname(__DIR__) . '/common/includes/userinfo.php');

// récupérer la liste des utilisateurs en LDAP

?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Trombinoscope</title>
</head>
<body>

<p>Liste des utilisateurs: </p>
<ul>
<?php

//ldapGet avec un compte d'application
$userList = ldapGet();

foreach($userList as $user) {
?>
<li><?php echo $user['username'] ?></li>
<?php } ?>
</ul>

</body>
<footer>

</footer>

</html>
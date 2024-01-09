
<?php 

setcookie('user', $username, time() + (-3600000), '/');
header('Location: pageaccueil.php');
exit;

?>


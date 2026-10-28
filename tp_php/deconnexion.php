
<?php
session_start();

session_unset();   
session_destroy(); 

header("Location: login.php");
exit;
/*
- Si je saisis un login, je suis redirigé vers profil.php.et  Après la déconnexion, la session est détruite et je suis redirigé vers login.php.
- Si j'accède directement à profil.php sans être connecté,
  je suis automatiquement redirigé vers login.php.
- Donc, la page profil.php est accessible uniquement si l'utilisateur est connecté.
*/
?>

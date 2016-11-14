<?php

$good_username = "bob";
$good_password = "super-secret";
// Remplacer False par une expression booléenne pour tester les paramètres reçus
if ($good_username == $_POST["username"] && $good_password == $_POST["password"])
{
  echo "Vous etes connecté !";
}
else {
  echo "Mauvais nom d'utilisateur ou mot de passe.";
}

?>

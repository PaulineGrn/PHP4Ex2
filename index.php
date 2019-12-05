<?php
// Déclaration de la fonction chains avec 2 paramètres name et name2
function chains($name, $name2){
  // return pour demander de garder le résultat et pouvoir l'afficher dans le body après
  return $name . $name2;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP4Ex2</title>
</head>
<body>
  <!-- Affichage de la fonction avec les 2 paramètres à lintérieur (concaténation) -->
  <p><?php echo chains('Igor', ' Grichka') ?></p>
</body>
</html>

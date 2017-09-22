<?php
// petit script pour récupérer le contenu du champ de recherche
// et revenir à la page permettant d'afficher le résultat
$arg = 'location:../begin.php?choix=recherche&search='.$_POST['search'].'&nav=1';

header($arg);
?>

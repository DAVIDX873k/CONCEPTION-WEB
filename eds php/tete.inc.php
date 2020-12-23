<!DOCTYPE html>
<?php
$variable1=" PHP 7";
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
echo "<title>Une page pleine d'inclusions $variable1</title>";
?>
<?php
echo "<h3> Aujourd'hui le ". date('d / M / Y H:m:s ')."</ h3><hr />";
echo "<h2>Bienvenue sur le site PHP 7</h2>";
?>

</head>
<body>
<?php
$variableext="Sur cette page vous trouverez une présentation de l'école du sabbat pour aider à préparer et présenté la leçon de cette semaine.
Vous pouvez également consulter les leçons précédentes sur le lien suivant :";
echo "<div><h1 style=\"border-width:5;border-style:double;backgroundcolor:#ffcc99;\">
BIENVENUE A L'ECOLE DU SABBAT $variable1 </h1>";
echo "<h3> $variableext</h3>";
echo "Nom du fichier ex&#233;cut&#233;: ", $_SERVER['PHP_SELF'],"&nbsp;&nbsp;&nbsp;";
echo " Nom du fichier inclus : ", __FILE__ ,"</div> ";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>

<body>
    <h1>Bonjour djasan</h1>
  <?php
            echo "Ceci est du texte"; ?>


    <?php 
            echo ("Ceci est du texte"); ?>
<?php echo ",  Cette ligne a été écrite \"uniquement\" en PHP."; ?>

        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <?php
echo "J'habite en Chine."; // Cette ligne indique où j'habite

// La ligne suivante indique mon âge
echo " J'ai 92 ans.";
?>
 <?php
  $userAge = 17;
  echo $userAge;

  $userAge = 17; // La variable est créée et vaut 17
  $userAge = 23; // La variable est modifiée et vaut 23
  $userAge = 55; // La variable est modifiée et vaut 55


?>


<?php
$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5

// Allez on rajoute un peu de difficulté
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6
?>
<?php
$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150
?>
<?php
$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
$number = 10 % 3; // $number prend la valeur 1 car il reste 1
?>
Une recette, c'est :

un titre ;

un auteur ;

un statut activé ;

et des instructions (la recette à suivre).

Le code de votre application à ce stade pourrait être le suivant (avec des recettes d'exemple, bien sûr) :
</body>

</html>
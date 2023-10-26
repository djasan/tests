

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables « composées »</title>
</head>
<body>
<?php
$recipeTitle = 'Cassoulet';
echo "La recette du " . $recipeTitle;
// Cela affichera : La recette du Cassoulet
?> 
</body>
</html>

/Nom
*$recipeTitle

//Valeur

*Cassoulet


Les tableaux numérotés.

Et les tableaux associatifs.

Ces tableaux sont très simples à imaginer.
 Regardez par exemple celui-ci, contenu de la variable
 $recipes :

Clé         Valeur
0	        Cassoulet
1           Couscous
2           Escalope milanaise
3           Salade César
4           Bo bun



$recipes    est un array : c'est ce qu'on appelle une variable « tableau ». Elle n'a pas qu'une valeur,
 mais plusieurs (vous pouvez d'ailleurs en mettre autant que vous voulez).

Dans un array, les valeurs sont rangées dans des « cases » différentes.

Ici, nous travaillons sur un array numéroté, 
c'est-à-dire que chaque case est identifiée par un numéro. Ce numéro est appelé clé.
	
//**Attention ! Un array numéroté commence toujours à la case n° 0 ! 
Ne l'oubliez jamais, ou vous risquez de faire des erreurs par la suite…


/*********************************************************** */

Pour créer un tableau numéroté en PHP, on liste ses valeurs entre crochets[]  .

Cet exemple vous montre comment créer l'array $recipes :

/************************************************************** */
	

<?php

$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

// La fonction array permet aussi de créer un array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');
?>

L'ordre a beaucoup d'importance :

Le premier élément (« Cassoulet») aura le n° 0.

Ensuite Couscous le n° 1.

Etc.

Vous pouvez aussi créer manuellement le tableau, case par case :

    <?php
$recipes[0] = 'Cassoulet';
$recipes[1] = 'Couscous';
$recipes[2] = 'Escalope Milanaise';
?>

	
/*/Si vous ne voulez pas avoir à écrire vous-même le numéro de la case que vous créez,
 vous pouvez laisser PHP le sélectionner automatiquement en laissant les crochets vides :/*/

 <?php
$recipes[] = 'Cassoulet'; // Créera $recipes[0]
$recipes[] = 'Couscous'; // Créera $recipes[1]
$recipes[] = 'Escalope Milanaise'; // Créera $recipes[2]
?>
Pour afficher un élément, il faut donner sa position entre crochets après  $recipes    .
Cela revient à dire à PHP :

« Affiche-moi le contenu de la case n° 1 de $recipes »
Pour faire cela en PHP, il faut écrire le nom de la variable,
 suivi du numéro entre crochets.

Pour afficher « Couscous », on doit donc écrire :

<?php
echo $recipes[1]; // Cela affichera : Couscous
?>
	Couscous est en seconde position et donc qu'il a le numéro 1 
    (étant donné qu'on commence à compter à partir de 0).

    Si vous oubliez de mettre les crochets, ça ne marchera pas : cela affichera juste « Array ».

Dès que vous travaillez sur des tableaux, 
vous êtes obligé d'utiliser les crochets 
pour indiquer dans quelle « case » 
on doit aller chercher l'information ; 
sinon PHP ne sait pas quoi récupérer.
jj
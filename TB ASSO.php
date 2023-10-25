<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux associatifs</title>
</head>
<body>
    <h1>Les tableaux associatifs</h1>
//Les tableaux associatifs fonctionnent sur le même principe, sauf qu'au lieu de numéroter les cases, 
on va les étiqueter en leur donnant à chacune un nom différent.//
<?php
// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];
//il n'y a ici qu'une seule instruction (un seul point-virgule).
// J'aurais pu tout mettre sur la même ligne, mais rien ne m'empêche de séparer ça sur plusieurs
 //lignes pour que ce soit plus facile à lire.Vous remarquez qu'on écrit une flèche ( =>  )
 // pour dire « associé à ».
 //la propriété « title » du tableau$recipe a pour valeur « Cassoulet ».

//Il est aussi possible de créer le tableau case par case, comme ceci :

   
    $recipe['title'] = 'Cassoulet';
    $recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
    $recipe['author'] = 'john.doe@exemple.com';
    $recipe['enable'] = true;


     //Pour afficher un élément, il suffit d'indiquer le nom de cet élément entre crochets, ainsi qu'entre guillemets ou apostrophes,
     //puisque l'étiquette du tableau associatif est un texte.

     //pour extraire le titre de la recette, on devra taper :
 
     echo $recipe['title'];
     ?>
//Ce code affiche : « Cassoulet ».//
Les tableaux numérotés permettent de stocker une série d'éléments du même type, 
comme des prénoms. 
Chaque élément du tableau contiendra alors un prénom.

Les tableaux associatifs permettent de découper une donnée en plusieurs sous-éléments.
 Par exemple, une adresse peut être découpée en nom, prénom, nom de rue, ville…

 //*********************************************************************** */

 trois moyens d'explorer un tableau :
 La boucle  for  .

La boucle  foreach  .

La fonction print_r (utilisée principalement pour le déboggage).//
//Avec la boucle for//

Il est très simple de parcourir un tableau numéroté avec une boucle  for  .

<?php

/**
 * Déclaration du tableau des recettes
 * Chaque élément du tableau est un tableau numéroté (une recette)
 */
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

for ($lines = 0; $lines <= 1; $lines++) {
    echo $recipes[$lines][0];
}

//Quand on écrit $recipes[$lines], la variable $lines est d'abord remplacée par sa valeur.
//Si $lines vaut 1, 
//cela signifie qu'on cherche ce que contient $recipes[1][0] , 
//c'est-à-dire : Couscous.

//Avec la boucle foreach

//La boucle for  a beau fonctionner, on peut utiliser un autre type de boucle –
// plus adapté aux tableaux – qu'on n'a pas encore vu jusqu'ici :  foreach  .

//foreach passe en revue chaque ligne du tableau. 
//Lors de chaque passage, elle met la valeur de cette ligne 
//dans une variable temporaire (par exemple $element  ).//



// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0]; // Affichera Cassoulet, puis Couscous
}
//C'est le même code que tout à l'heure, mais cette fois basé sur une boucle  foreach
//À chaque tour de boucle, la valeur de l'élément suivant est mise dans la variable  $recipe  .

//On peut donc utiliser $recipe uniquement à l'intérieur de la boucle,
// pour afficher l'élément en cours.

//L'avantage de foreach , c'est qu'il permet aussi de parcourir les tableaux associatifs.

$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
];

foreach ($recipe as $value) {
    echo $value;
}

/**
 * AFFICHE
 * CassouletEtape 1 : des flageolets, Etape 2 : ...mickael.andrieu@exemple.com1
 */
//foreach va mettre tour à tour dans la variable $value  :

    //le titre de la recette ;

    //les étapes de la recette ;

   // l'auteur ;

    //et la réponse à "enabled"...

//… contenus dans le tableau $recipe 

//On met donc entre parenthèses :

 //   D'abord le nom du tableau, ici $recipe  .

  //  Ensuite le mot-clé as  (qui signifie « en tant que »).

   // Enfin, le nom d'une variable que vous choisissez,
   // et qui va contenir tour à tour chacune des valeurs du tableau, ici $value  .

  // Entre les accolades, on n'utilise donc que la variable  $recipe  .

//La boucle s'arrête lorsqu'on a parcouru tous les éléments de l'array.

//L'intérêt devient encore plus flagrant quand nous utilisons un tableau de tableaux :



$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

foreach($recipes as $recipe) {
    echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL; 
}

/*Qui produit le résultat suivant :

$ php exemple.php 
Cassoulet contribué(e) par : mickael.andrieu@exemple.com
Couscous contribué(e) par : mickael.andrieu@exemple.com
Escalope milanaise contribué(e) par : mathieu.nebra@exemple.com
Salade Romaine contribué(e) par : laurene.castor@exemple.com
*/

//Nous n'en avions pas tellement parlé jusque-là 
//puisque nous nous concentrons sur la réalisation d'un site web dans ce cours… 
//Mais PHP est capable d'exécuter des scripts en ligne de commande, 
//un peu sur le même modèle que le démarrage du serveur web interne.

//Pratique quand vous souhaitez tester rapidement les exemples de ce cours,
//Toutefois, avec cet exemple, on ne récupère que la valeur. Or, on peut aussi récupérer la clé de l'élément.
// On doit dans ce cas écrire foreach  , comme ceci :
?>
    <?php foreach($recipe as $property => $propertyValue) ?>

   // À chaque tour de boucle, on disposera non pas d'une, mais de deux variables :

$property qui contiendra la clé de l'élément en cours d'analyse 
(« title », « author », etc.).

$propertyValue qui contiendra la valeur de l'élément en cours
 (« Cassoulet », « laurene.castor@exemple.com », etc.).//
 <?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue)
{
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
}
?>
Qui aura le résultat suivant :

$ php exemple.php 
[title] vaut Salade Romaine
[recipe] vaut Etape 1 : Lavez la salade ; Etape 2 : euh ...
[author] vaut laurene.castor@exemple.com
Avec cette façon de procéder, vous avez maintenant dans
 la boucle la clé ET la valeur.

 /*********************************************** */
 Affichez rapidement un tableau avec print_r

Parfois, en codant votre site en PHP, vous aurez sur les bras un tableau 
et vous voudrez savoir ce qu'il contient, juste pour votre information.
Vous pourriez utiliser une boucle for  ou mieux, une boucle  foreach  .

Mais si vous n'avez pas besoin d'une mise en forme spéciale et
 que vous voulez juste savoir ce que contient le tableau,
  vous pouvez faire appel à la fonction print_r  .
 C'est une sorte de echo  spécialisé dans les tableaux.

 *****Cette commande a toutefois un défaut : 
  //elle ne renvoie pas de code HTML comme <br />//
  pour les retours à la ligne. Pour bien les voir, 
 // il faut donc utiliser la balise HTML <pre>  //
  qui nous permet d'avoir un affichage plus correct.
  <?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
];

echo '<pre>';
print_r($recipes);
echo '</pre>';
?>
facile à utiliser :
 //du moment qu'on n'oublie pas la balise <pre> //
 pour avoir un affichage correct.

 
</body>
</html>
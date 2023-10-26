<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recherches dans array</title>
</head>

<body>
    <h1>recherches dans array <p>Nous allons voir trois types de recherches, basées sur des fonctions PHP :

            array_key_exists pour vérifier si une clé existe dans le tableau.

            in_array pour vérifier si une valeur existe dans le tableau.

            array_search pour récupérer la clé d'une valeur dans le tableau.</p>
    </h1>
    <h2>Vérifiez si une clé existe dans un tableau avec array_key_exists</h2>
    <p>Voici notre problème : on a un array, mais on ne sait pas si la clé qu'on cherche s'y trouve.
        Pour vérifier ça, on va utiliser la fonction array_key_exists qui va parcourir le tableau pour nous, et nous dire s'il contient cette clé.

        On doit lui donner :

        Le nom de la clé à rechercher.

        Puis le nom du tableau dans lequel on fait la recherche
    </p>

    <?php array_key_exists('cle', $array); ?>
    <p>La fonction renvoie un booléen :

        true (vrai) si la clé est dans le tableau ;

        false (faux) si la clé ne s'y trouve pas.
        Ça nous permet de faire un test facilement avec un if :</p>



    <?php

    $recipe = [
        'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
        'author' => 'laurene.castor@exemple.com',
    ];

    if (array_key_exists('title', $recipe)) {
        echo 'La clé "title" se trouve dans la recette !';
    }

    if (array_key_exists('commentaires', $recipe)) {
        echo 'La clé "commentaires" se trouve dans la recette !';
    }


    ?>

    //en ligne de commande //

    $ php exemple.php
    La clé "title" se trouve dans la recette !

    // On ne trouvera que « title », et pas « commentaires ».
    C'est logique : seule la première condition sera donc exécutée.//

/******************************************************************* */
Vérifiez si une valeur existe dans un tableau avec in_array
/***************************************************************/ */
Le principe est le même que array_key_exists
 mais cette fois on recherche dans les valeurs. 

/////in_array renvoie : 

   / true si la valeur se trouve dans le tableau ;

    //false si elle ne s'y trouve pas.

    <?php





    ?>
</body>

</html>Vérifiez si une valeur existe dans un tableau avec in_array

Le principe est le même que array_key_exists mais cette fois on recherche dans les valeurs. 

in_array renvoie : 

    true si la valeur se trouve dans le tableau ;

    false si elle ne s'y trouve pas.

Pour changer un peu de notre tableau $recipes  , je vais créer un tableau qui contient le nom des utilisateurs du site :

<?php

$users = [

    'Mathieu Nebra',

    'Mickaël Andrieu',

    'Laurène Castor',

];


if (in_array('Mathieu Nebra', $users))

{

    echo 'Mathieu fait bien partie des utilisateurs enregistrés !';

}


if (in_array('Arlette Chabot', $users))

{

    echo 'Arlette fait bien partie des utilisateurs enregistrés !';

}
//
///$ php exemple.php 
////Mathieu fait bien partie des utilisateurs enregistrés !

////On ne voit que le message pour Mathieu, car Arlette ne fait pas partie des utilisateurs enregistrés.
//Récupérez la clé d'une valeur dans un tableau avec array_search

//array_search fonctionne comme in_array : il travaille sur les valeurs d'un tableau.

//Voici ce que renvoie la fonction :

    /*Si elle a trouvé la valeur, array_search renvoie la clé correspondante (dans le cas d'un tableau numéroté, la clé sera un numéro ; dans le cas d'un tableau associatif, la clé sera un nom).

    Si elle n'a pas trouvé la valeur, array_search renvoie false  .

On reprend le tableau numéroté :

<?php

$users = [

    'Mathieu Nebra',

    'Mickaël Andrieu',

    'Laurène Castor',

];


$positionMathieu = array_search('Mathieu Nebra', $users);

echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;


$positionLaurène = array_search('Laurène Castor', $users);

echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;

Je sais que je me répète, mais n'oubliez pas qu'un tableau numéroté commence à 0 !

Cela explique donc pourquoi on nous répond que Mathieu se trouve en position 0 :

$ php exemple.php 
"Mathieu" se trouve en position 0
"Laurène" se trouve en position 2

Voilà les fonctions qu'il fallait connaître pour faire une recherche dans un tableau. Il y en a d'autres, mais vous connaissez maintenant les principales.
Affichez des recettes (version 2 !)

Avec tout ce que nous avons appris dans ce chapitre, nous pouvons améliorer le code d'affichage des recettes :

    Passer des recettes en tableaux associatifs.

    Contrôler la clé enabled  .

    Afficher des recettes seulement si enabled est égal à true :

<?php


$recipes = [

    [

        'title' => 'Cassoulet',

        'recipe' => 'Etape 1 : des flageolets !',

        'author' => 'mickael.andrieu@exemple.com',

        'is_enabled' => true,

    ],

    [

        'title' => 'Couscous',

        'recipe' => 'Etape 1 : de la semoule',

        'author' => 'mickael.andrieu@exemple.com',

        'is_enabled' => false,

    ],

    [

        'title' => 'Escalope milanaise',

        'recipe' => 'Etape 1 : prenez une belle escalope',

        'author' => 'mathieu.nebra@exemple.com',

        'is_enabled' => true,

    ],

];

?>

<!DOCTYPE html>

<html>

<head>

    <title>Affichage des recettes</title>

    <link

        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 

        rel="stylesheet"

    >

</head>

<body>

    <div class="container">

        <h1>Affichage des recettes</h1>

        <!-- Boucle sur les recettes -->

        <?php foreach($recipes as $recipe) : ?>

            <!-- si la clé existe et a pour valeur "vrai", on affiche -->

            <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true): ?>


                <article>

                    <h3><?php echo $recipe['title']; ?></h3>

                    <div><?php echo $recipe['recipe']; ?></div>

                    <i><?php echo $recipe['author']; ?></i>

                </article>


            <?php endif; ?>

        <?php endforeach ?>

    </div>   

</body>

</html>


///Cette capture d'écran montre l'affichage de la liste des recettes en fonction du statut is_enabled sur la page web. On peut voir par exemple les recettes Cassoulet et Escalope milanaise car leur statut est sur
//Affichage de la liste des recettes en fonction du statut "is_enabled" 
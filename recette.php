<?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true,],
    ['Couscous', '[...]', 'mickael.andrieu@exemple.com', false,],
];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Affichage des recettes</title>
</head>

<body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++) : ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>

</html>

Ah ! En HTML, on peut utiliser la boucle for comme une boucle if : je reconnais l'astuce avec endif; et endfor; , c'est bien ça ?

Tout à fait, comme vous pouvez le voir, c'est assez pratique !

On peut combiner les boucles et les conditions ? Au final, on a affiché aussi la recette "Couscous" alors que le statut d'affichage est à "faux"
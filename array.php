<?php

// Premier utilisateur
$userName1 = 'Mickaël Andrieu';
$userEmail1 = 'mickael.andrieu@exemple.com';
$userPassword1 = 'S3cr3t';
$userAge1 = 34;

// Deuxième utilisatrice
$userName2 = 'Laurène Castor';
$userEmail2 = 'laurene.castor@exemple.com';
$userPassword2 = 'P4ssW0rD';
$userAge2 = 28;

// ... et ainsi de suite pour les autres utilisateurs.



$user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];

echo $user1[0]; // "Mickaël Andrieu"
echo $user1[1]; // "email"
echo $user1[3]; // 34

//un tableau se déclare entre crochets : [ ] ;

//il possède des indices : 0, 1, 2, … ;

 //on accéder à un élément du tableau à partir de ces clés.


 

 $mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
 $mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
 $laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];
 
 $users = [$mickael, $mathieu, $laurene];
 
 echo $users[1][1]; // "mathieu.nebra@exemple.com"










 //Utilisez une boucle simple :  while

 //Voilà ce qui se passe dans une boucle :

 //Comme d'habitude, les instructions sont d'abord exécutées dans l'ordre, de haut en bas.//

 //À la fin des instructions, on retourne à la première.//

 //On recommence à lire les instructions dans l'ordre.//

 //Et on retourne à la première, etc.//


 while ($isValid) {
     // instructions à exécuter dans la boucle
 }
 //TANT QUE $isValid est vrai, exécuter ces instructions.

 //Les instructions qui sont répétées en boucle se trouvent entre les accolades {  et  }

 //« Je ne dois pas regarder les mouches voler quand j'apprends le PHP ».


 $lines = 1;
 
 while ($lines <= 100) {
     echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
     $lines++; // $lines = $lines + 1
 }

 //La boucle pose la condition :

 //TANT QUE $lines est inférieur ou égal à 100.

//Dans cette boucle, il y a deux instructions :

 //echo permet d'afficher du texte en PHP. À noter qu'il y a une balise HTML <br />  à la fin : cela permet d'aller à la ligne (vu que vous connaissez le HTML, ça n'a rien de surprenant : chaque phrase sera écrite sur une seule ligne).

// $lines++; est une façon plus courte d'ajouter 1 à la variable. On appelle cela l'incrémentation (ce nom barbare signifie tout simplement que l'on a ajouté 1 à la variable).

//Chaque fois qu'on fait une boucle, la valeur de la variable augmente : 1, 2, 3, 4… 99, 100…

//Dès que la variable atteint 101, on arrête la boucle.

//Et voilà, on a écrit 100 lignes en un clin d'œil.//

//Si la punition avait été plus grosse, pas de problème ! Il aurait suffi de changer la condition, par exemple : mettre « TANT QUE c'est inférieur ou égal à 500 » pour l'écrire 500 fois.


$lines = 1;

while ($lines <= 100)
{
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++;
}
?>

<!--

Ceci est la ligne n°1
Ceci est la ligne n°2
...
-->
cet exemple ressemble beaucoup au précédent.

La particularité, là, c'est qu'on affiche à chaque fois la valeur de  $lines  .

Cela vous permet de voir que sa valeur augmente petit à petit.
Pour information, l'astuce que je vous avais donnée dans le chapitre sur les conditions marche aussi ici :

Vous pouvez fermer la balise PHP  ?>  .

Écrire du texte en HTML.

Puis rouvrir la balise PHP   .

Cela vous évite d'utiliser une ou plusieurs instructions echo au milieu.

On aura l'occasion d'utiliser cette astuce de nombreuses fois dans la suite du cours.


<?php

$lines = 3; // nombre d'utilisateurs dans le tableau
$counter = 0;

while ($counter < $lines) {
    echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
    $counter++; // Ne surtout pas oublier la condition de sortie !
}

?>
Alors, comment ça marche un for ?

Ça ressemble beaucoup au while mais c'est la première ligne qui est un peu particulière.

Pour voir la différence avec le while , reprenons l'exemple précédent, cette fois avec un for :

    <?php
for ($lines = 0; $lines <= 2; $lines++)
{
    echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
}

?>

<?php






<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            echo "<h2>Première instruction PHP avec echo</h2>";
            echo 'Bonjour à tous !<br>';
            echo  29;
            echo "<br>J'ai ", 29, " ans.<br>";
            print "<h2>Première instruction PHP avec print</h2>";
            print 'Bonjour à tous !<br>';
            print  29;

            echo "<br>voici mon premier test d'écriture il y as 26 lignes dans ce code";
            print "<br><p>je test un paragraphe</p>" ;
            print "attention" ;

            echo 'Je m\'appelle Florian mais tout le monde m\'appelle "Flo"<br>';
            echo "Je m'appelle Florian mais tout le monde m'appelle \"Flo\"<br>";
            print 'Je m\'appelle Florian mais tout le monde m\'appelle "Flo"<br>';
            print "Je m'appelle Florian mais tout le monde m'appelle \"Flo\"<br>";

            $prenom = "stef" ;
            $age = 39 ;
            $nom = "dufour" ;

            echo "<br><br>mon prenom est ", $prenom ;

            echo "<br>la variable \$age : ", $age ;

            $age = 40 ;
            echo "<br>la variable \$age: ", $age ;

            echo "<br>\$nom est $nom" ;

            $variable = '3' ;

            echo "<br> la variable : $variable" ;

            echo "<br><br>type de la variable prenom : ", gettype($prenom) ;
            echo "<br>type de la variable age : ", gettype($age) ;
            echo "<br>type de la variable nom : ", gettype($nom) ;

            $nombre = 2.84 ;

            echo "<br>type de la variable nombre : ", gettype($nombre);

            $vrai = true ;
            $faux = false ;

            echo "<br><br>vrai : $vrai et son type est : ", gettype($vrai) ,"<br>faux : $faux et son type est : ", gettype($faux) ;

            $vide = NULL ;
            $vide2 = null ;
            $vide3 ;

            echo "<br><br>vide : $vide et le type est : ", gettype($vide) , "<br>vide : $vide2 et le type est : ", gettype($vide2), "<br> vide : $vide3 et le type est : ", gettype($vide3) ;

            echo "<br><br>nouvelle exemple :<br>" ;

            echo "<br>Je m'appelle $prenom et j'ai $age ans <br>";
            echo "Je m'appelle {$prenom} et j'ai {$age} ans <br>";
            echo 'Je m\'appelle $prenom et j\'ai $age ans <br>';
            
            $phrase = "<br>Je suis $prenom $nom, j'ai $age ans <br>";
            $phrase2 = "Je suis {$prenom} {$nom}, j'ai {$age} ans <br>";
            $phrase3 = 'Je suis $prenom $nom, j\'ai $age ans<br><br>';

            echo $phrase ;
            echo $phrase2 ;
            echo $phrase3 ;


            $phrase = "Je suis " .$prenom. " " .$nom. ", j'ai " .$age. " ans<br>";
            $phrase2 = 'Je suis ' .$prenom. ' ' .$nom. ', j\'ai '.$age. ' ans<br>';
            
            
            echo "<br>Je m'appelle " .$prenom. " et j'ai " .$age. " ans <br>";
            echo 'Je m\'appelle ' .$prenom. ' et j\'ai ' .$age. ' ans <br>';

            $test = "attention" ;

            echo '<br>petit test pour comprendre : $test' ;
            echo '<br>petit test pour comprendre : {$test}';
            echo "<br>petit test pour comprendre : $test"  ;
            
            echo '<br><br>phrase : ' .$phrase. '<br>phrase : ' .$phrase2 ;

            $x = 2;
            $y = 3;
            $z = 4;
            echo '<br><br>$x stocke ' .$x. ', $y stocke ' .$y. ', $z stocke ' .$z. '<br>';
            
            $a = $x + 1; //$a stocke 2 + 1 = 3
            $b = $x + $y; //$b stocke 2 + 3 = 5
            $c = $x - $y; //$c stocke 2 - 3 = -1
            echo '$a stocke ' .$a. ', $b stocke ' .$b. ', $c stocke ' .$c. '<br>';
            
            $x = $x * $y; //$x stocke désormais 2 * 3 = 6
            echo 'La variable $x stocke désormais : ' .$x. '<br>';
            
            $z = $x / $y; //$z stocke désormais 6 / 3 = 2
            echo 'La variable $z stocke désormais : ' .$z. '<br>';
            
            $m = 5 % 3; //$m stocke le reste de la division euclidienne de 5 par 3
            echo 'Le reste de la division euclidienne de 5 par 3 est ' .$m. '<br>';
            
            $p = $z ** 4; //$p stocke 2^4 = 2 * 2 * 2 * 2 = 16
            echo 'La variable $p stocke le résultat de 2 puissance 4 = ' .$p. "<br><br>";

            $x = "2";
            $y = "3.14";
            
            echo '$x stocke la valeur ' .$x. ' de type ' .gettype($x). '<br>';
            echo '$y stocke la valeur ' .$y. ' de type ' .gettype($y). '<br>';
            
            $x = +$x;
            $y = -$y;
            $z = +"3";
            
            echo '$x stocke la valeur ' .$x. ' de type ' .gettype($x). '<br>';
            echo '$y stocke la valeur ' .$y. ' de type ' .gettype($y). '<br>';
            echo '$z stocke la valeur ' .$z. ' de type ' .gettype($z). '<br>';


            $mot = "Bonjour";
            $mot .= " le monde"; //$a stocke "Bonjour le monde"
            echo '<br>$mot stocke : ' .$mot. '<br>';
            
            $x = 5;
            $x -= 3; //$x stocke désormais 2
            echo '$x stocke : ' .$x. '<br>';
            
            $y = 3;
            $y **= $x; //$y stocke 3^2 = 3 * 3 = 9
            echo '$y stocke : ' .$y;


            $x = 1;
            $y = 2;
            $z = 3;
            $a = 5;
            
            $x = $z += 2; //$z stocke 5 et $x stocke 5
            echo '<br><br>$x stocke : ' .$x. ' et $z stocke : ' .$z. '<br>';
            
            $y += $z -= 2; //$z stocke 5 - 2 = 3 et $y stocke 2 + 3 = 5
            echo '$y stocke : ' .$y. ' et $z stocke : ' .$z. '<br>';
           
            $y /= $z -= 2; //$z stocke 1 et $y stocke 5
            echo '$y stocke : ' .$y. ' et $z stocke : ' .$z. '<br>';
            
            $a *= 4 + 2; //$a stocke 30
            echo '$a stocke : ' .$a;


            $x = 4; //On affecte la valeur 4 à $x
            
            /*On compare la valeur contenue dans $x à 4 en valeur.
             *On renvoie le résultat de la comparaison grâce à var_dump()*/
            var_dump($x == 4);
            echo '<br>';
            
            var_dump($x > 7);
            echo '<br>';
            
            /*On compare la valeur de $x à la chaine de caractères "4" en
             *valeur simplement*/
            var_dump($x == "4");
            echo '<br>';
            
            /*On compare la valeur de $x à la chaine de caractères "4" en
             *termes de valeur et de type*/
            var_dump($x === "4");
            echo '<br>';
            
            var_dump($x != "4");
            echo '<br>';
            
            var_dump($x !== "4");
            echo '<br>';


            echo "<br>nouvelle exemple d'utilisation du php" ;

            $x = 8 ; // on met la valeur 8 dans la variable x
            $y = 7 ; // on met la valeur 7 dans la variable y

            /* les conditions simples */
            if($x > 1){
                echo "<br>la valeur de la variable $x est superieur a 1" ;
            }

            if($y == $x){
                echo "<br>$x et $y contiennent la meme valeur" ;
            }

            if(($x <= 1) == false){
                echo '<br>$x contient une valeur supérieur a 1' ;
            }

            if(($x != $y) == false){
                echo '<br>$x et $y contiennent la meme valeur' ;
            }
            

            /* les contidions si ... sinon ... */
            if($x < 9){
                echo '<br>$x est superieur a 9' ;
            }else{
                echo '<br>$x est inferieur a 9' ;
            }

            if($x == $y){
                echo '<br>$x et $y contiennent les memes valeurs' ;
            }else{
                echo '<br>$x et $y contiennent des valeurs differentes' ;
            }

            /* les conditions si ... sinon si ... */
            if($x > 10){
                echo '<br>$x est superieur strict a 10' ;
            }elseif($x == 9){
                echo '<br>$x est égale a 9' ;
            }else{
                echo '<br>$x est inferieur stric a 9' ;
            }

            /* les conditions imbriquées */
            $utilisateur = true ;
            $age = 19 ;

            if($utilisateur == true){
                if($age<=18){
                    echo '<br>l\'utilisateur est inscrit mais n\'as pas l\'age de rentrer' ;
                }else{
                    echo "<br>l'utilisateur est inscrit et a l'age pour entrer" ;
                }
            }else{
                echo "<br>l'utilisateur n'est pas inscrit !!" ;
            }
        ?>
        <p>Un paragraphe</p>
        
    </body>
</html>
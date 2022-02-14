<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 
$paragraph ="Nazareth è famosa universalmente come la città di origine di Gesù, che secondo i Vangeli, pur essendo nato a Betlemme, vi abitò durante la sua infanzia e giovinezza. A Nazareth inoltre, sempre secondo i Vangeli, avvenne l'Annunciazione, cioè l'annuncio della sua prossima nascita, che venne fatto a sua madre Maria dall'arcangelo Gabriele. Nazareth città";
$paragraphLength = strlen($paragraph);
$wordReplace = $_GET["word"];
$paragraphNew = str_ireplace($wordReplace, "*****", $paragraph); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $paragraph?></p>
    <p><?php echo $paragraphNew?></p>
    <p><?php echo $paragraphLength?></p>
    
</body>
</html>
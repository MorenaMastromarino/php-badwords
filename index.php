<?php

  $paragrafo = 'E il cuore mi va in pezzi, certo, in ogni momento di ogni giorno, in più pezzi di quanti compongano il mio cuore, non mi ero mai considerato di poche parole, tanto meno taciturno, anzi non avevo proprio mai pensato a tante cose, ed è cambiato tutto, la distanza che si è incuneata fra me e la mia felicità non era il mondo, non erano le bombe e le case in fiamme, ero io, il mio pensiero, il cancro di non lasciare mai la presa, l\'ignoranza è forse una benedizione, non lo so, ma a pensare si soffre tanto, e ditemi, a cosa mi è servito pensare, in che grandioso luogo mi ha condotto il pensiero? Io penso, penso, penso, pensando sono uscito dalla felicità un milione di volte, e mai una volta che vi sia entrato.';

  $parolaCensurata = $_GET['parolaDaCensurare'];

  $paragrafoCensurato = str_replace($parolaCensurata, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

  <h2>Paragrafo originale:</h2>
  <p><?php echo $paragrafo ?></p>
  <h3>Il paragrafo originale è lungo <?php echo strlen($paragrafo) ?> caratteri.</h3>

  <h2>Paragrafo censurato:</h2>
  <p><?php echo $paragrafoCensurato ?></p>
  <h3>Il paragrafo censurato è lungo <?php echo strlen($paragrafoCensurato) ?> caratteri.</h3>

</body>
</html>
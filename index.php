<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exos php</h1>
    <h2>exo 1</h2>
    <?php
    $mois = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout");
     ?>

    <h2>exo2</h2>
    <?php
    echo $mois[2];
     ?>

     <h2>exo 3</h2>
     <?php
     echo $mois[5];
      ?>

      <h2>exo 4</h2>
      <?php
      $mois[7] = "août";
       ?>

      <h2>exo 5</h2>
      <?php
      $departements = array(
      "9"=>"Ariege",
      "11"=>"Aude",
      "12"=>"Aveyron",
      "30"=>"Gard",
      "31"=>"Haute-garonne",
      "32"=>"Gers",
      "34"=>"Hérault",
      "46"=>"Lot",
      "48"=>"Lozère",
      "65"=>"Hautes-Pyrénées",
      "66"=>"PO",
      "81"=>"Tarn",
      "82"=>"Tarn-et-garonne");
       ?>

       <h2>exo 6</h2>
       <?php
       echo $departements["30"];
        ?>

        <h2>exo 7</h2>
        <?php
        $departements["11100"] = "Narbonne";
        echo $departements["11100"];
         ?>

        <h2>exo 8</h2>
        <?php
        foreach ($mois as $value) {
          echo $value . "<br>";
        }
         ?>
         <h2>exo 9</h2>
         <?php
         foreach ($departements as $value) {
             echo $value . "<br>";
         }
          ?>
        <h2>exo 10</h2>
        <?php
        foreach ($departements as $key => $value) {
            echo $key . " : " .$value . "<br>";
        }
         ?>
  </body>
</html>

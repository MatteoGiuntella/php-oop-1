<?php
require __DIR__ . '/class.php';
$jsonarchivio = file_get_contents('./db.json');
$archivio = json_decode($jsonarchivio, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 0; $i < count($archivio); $i++) {
        $titolo = $archivio[$i]['title'];
        $genere = $archivio[$i]['genre'];
        $produzione = $archivio[$i]['production'];
        $durata = $archivio[$i]['duration'];
        $statuettaoro = $archivio[$i]['oscar'];
        $globo = $archivio[$i]['goldenGlobes'];
        $movie[$i] = new Movie($titolo, $produzione, $durata, $genere, $statuettaoro, $globo)

    ?>
        <ul>
            <li>
                <?php
                echo $titolo;
                ?>
            </li>
            <li>
                <?php
                echo implode(', ' , $genere);
                ?>
            </li>
            <li>
                <?php
                echo $produzione;
                ?>
            </li>
            <li>
                <?php
                echo $durata;
                ?>
            </li>
            <li>
                <?php
                echo $statuettaoro;
                ?>
            </li>
            <li>
                <?php
                echo $globo;
                ?>
            </li>
            <li>
                <?php
                echo $movie[$i]->setPrizes($statuettaoro, $globo);
                ?>
            </li>

        </ul>
    <?php
    }
    ?>
</body>

</html>
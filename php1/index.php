<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr {
            height: 40px;
            text-align: center;
        }
        td {
            width: 60px;
        }
    </style>
</head>
<body>
    <?php
    $metai = 2017;
    if ($metai >= 2017) {
        echo "nauji laikai";
    } else {
        echo "seni laikai";
    }
    ?>
    <p>&copy; <?php echo date("Y"); ?></p>

    <?php
    $country = 'Lietuva';
    $city = 'Vilnius';
    $population = 574221;
    ?>
    <p>Pirma užduotis:</p>
    <ul>
        <li><?php echo $country; ?></li>
        <li><?php echo $city; ?></li>
        <li><?php echo $population; ?></li>
    </ul>

    <p>Antra užduotis:</p>
    <p><?php echo $city . ' - Lietuvos sostinė'; ?></p>
    <p><?php echo "$city ir $country sparčiai auga"; ?></p>

    <?php
    $largest_population = true;
    ?>

    <p>Trečia užduotis:</p>
    <?php
    $x = 10;
    $y = 7;
    $a = $x + $y;
    echo "$x + $y = $a <br>"; 

    $a = $x - $y;
    echo "$x - $y = $a <br>";

    $a = $x * $y;
    echo "$x * $y = $a <br>";

    $a = $x / $y;
    echo "$x / $y = $a <br>";

    $a = $x % $y;
    echo "$x % $y = $a <br>";
    ?>

    <?php
    echo "<table border=\"1\">";
    for ($row = 1; $row <=10; $row++) {
        for ($col = 1; $col <= 10; $col++) {
            $x = $col * $row;
            echo "<td>$x</td>\n";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <p>Ketvirta užduotis:</p>
    <?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    $cities[] = 'Tokijas';
    print_r($cities);
    ?>

    <ul>
        <li><?php print_r($cities[1]); ?></li>
    </ul>

    <?php 
    $cities2 = [
        'tokijas' => 13.6,
        'vasingtonas' => 0.6,
        'maskva' => 11.5
    ];
    $cities2['londonas'] = 8.6;
    print_r($cities2);
    
    ?>
    <ul>
        <li><?php echo 'Gyventojų skaičius: ' .  $cities2['tokijas'] . ' mln.'; ?></li>
    </ul>
    
    <p>Penkta užduotis:</p>
    <?php
    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusija']
    ];
    $cities3['Londonas'] = [8.6, 43, 'Anglija'];
    print_r($cities3);
    ?>
    <ul>
        <li><?php echo 'Gyventojų skaičius: ' .  $cities3['Londonas'][0] . ' mln.'; ?></li>
        <li><?php echo 'Įkurtas: ' .  $cities3['Londonas'][1] . ' m.'; ?></li>
        <li><?php echo 'Šalis: ' .  $cities3['Londonas'][2]; ?></li>
    </ul>

    <p>Šešta užduotis:</p>
    <?php
    $metai = 1774;
    $metaiLiko = $cities3['Vasingtonas'][1] - $metai;
    if ($metai >= $cities3['Vasingtonas'][1]) {
        echo "Vašingtonas yra JAV sostinė";
    }elseif ($metai == 1774) {
        echo "JAV sostinė vis dar Filadelfijoje.";
    } else {
        echo 'Liko ' . $metaiLiko . ' metai (-ų) iki
        Vašingtono įkūrimo.';
    }
    ?>

<p>Septinta užduotis:</p>
    <?php
    $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
    print_r($cities4);

    echo '<ul>'; 
    for ($i = 0; $i < count($cities4); $i++) {
            echo '<li>' . $cities4[$i] . '</li>';
        }
    echo '</ul>';
    ?>

<p>Aštunta užduotis:</p>
    <?php
    $temp = [- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    print_r($temp);?>
<p></p>
    <?php
    $suma = 0;

    foreach ($temp as $reiksme) {
        $suma = $suma + $reiksme;
    }
    $vidurkis = $suma / count($temp);
    echo "Vidutinė temperatūra " . round($vidurkis);
    ?>
    <p></p>
    <?php
    rsort($temp);
    print_r($temp);
    ?>
    <p></p>
    <?php
    $penkiosPirmos = array_slice($temp, 0,5);
    print_r($penkiosPirmos);
    ?>
    <p></p>
    <?php
    $penkiosPaskutines = array_slice($temp, -5,5);
    print_r($penkiosPaskutines);
    ?>

</body>
</html>

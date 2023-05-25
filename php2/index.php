<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failo skaitymas su PHP</title>
</head>
<body>
    <?php
        $filename = 'text.txt';
        $file = fopen($filename, "r"); //sukuriame failą

        $filesize = filesize($filename); //filesize() nuskaito failo dydį
        $filetext = fread($file, $filesize); //fread() skaito failo turinį
        fclose($file); // fclose() uždaro failą, parametras - pointeris į failą

        echo "Failo dydis: $filesize B";
        echo "<pre>$filetext</pre>";
        /* Turinio nematysime, kol nepakeisime w+ į r
            Taip pat turime įkelti kokį nors tekstą į naujai sukurtą failą ir išsaugoti.
            */
        ?>


    <p>10 užduotis:</p>
    <?php 
        function plotas($a, $b){
            $skaiciavimas = $a * $b;
            echo "Stačiakampio, kurio kraštinių ilgiai yra $a ir $b, plotas yra $skaiciavimas";
        }

        //plotas(2, 5);
    ?>

<p>11 užduotis:</p>
    
    <!-- <form action="<//?php $_PHP_SELF; ?>" method="POST">
        Vienos stačiakampio kraštinės ilgis: <input type="number" name="a" /><br><br>
        Kitos stačiakampio kraštinės ilgis: <input type="number" name="b" />
        <input type="submit">
    </form> -->

    <?php
        if($_POST['a'] && $_POST['b']) { 
            plotas($_POST['a'], $_POST['b']);
             ?>
            <?php } else { ?>
            <form action="<?php $_PHP_SELF; ?>" method="POST">
                Vienos stačiakampio kraštinės ilgis:    <input type="number" name="a" /><br><br>
                Kitos stačiakampio kraštinės ilgis: <input type="number" name="b" />
                <input type="submit">
            </form> <?php
             }    
    ?>

<p>12 užduotis:</p>
    <?php
        if($_POST['vardas'] && $_POST['pavarde']) { 
            echo $_POST['vardas'] . ' ' . $_POST['pavarde'];
             ?>
            <?php } else { ?>
            <form action="<?php $_PHP_SELF; ?>" method="POST">
                Vardas:    <input required type="name" name="vardas" /><br><br>
                Pavardė: <input required type="name" name="pavarde" />
                <input type="submit">
            </form> <?php
             }   
    ?>





</body>
</html>
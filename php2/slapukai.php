<!DOCTYPE html>
<html lang="en">
<?php
    setcookie("name", "Valdas Adamkus", time()+3600, "/","", 0);
    setcookie("age", "92", time()+3600, "/", "", 0);
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuriame ir pasiekiame Cookies</title>
    
</head>
<body>
    <?php
        if(isset($_COOKIE["name"])) {
            echo 'Welcome, ' . $_COOKIE["name"] . '<br>';
            echo 'You are, ' . $_COOKIE["age"] . ' years old.';
        } else {
            echo "Who are you?";
        }
    ?>
    
    <?php
    class Car {
        public $bakas;

        // pridedame litrus į degalų baką
        public function degaluKiekis($litrai) {
            $this -> bakas += $litrai;
            return $this;
        }

        // atimame degalų litrus iš bako, priklausomai nuo nuvažiuoto atstumo
        public function atstumas($distancija) {
            $km = $distancija;
            $litrai = $km * 0.05;
            $this -> bakas -= $litrai;
            return $this;
        }
    }

    $bmv = new Car();

    // kiek turėsime degalų bake, jei įpylėme 10L, o nuvažiavome 40 km?
    $bakas = $bmv -> degaluKiekis(10) -> atstumas (40) -> bakas;
    echo 'Bakas bus likę: ' . $bakas . ' L.';


$data1 = new DateTime();
$data2 = new DateTime();
$data3 = new DateTime();

$losangeles = new DateTimeZone('America/Los_Angeles');
$vilnius = new DateTimeZone('Europe/Vilnius');
$manila = new DateTimeZone('Asia/Manila');

$data1 -> setTimezone($losangeles);
$data2 -> setTimezone($vilnius);
$data3 -> setTimezone($manila);

echo 'Laikas Los Andžele: ' . $data1 -> format('g:ia, l, F j, Y') . '<br>';
echo 'Laikas Vilniuje: ' . $data2 -> format('g:ia, l, F j, Y') . '<br>';
echo 'Laikas Maniloje: ' . $data3 -> format('g:ia, l, F j, Y') . '<br>';

?>
<?php
    class Zmogus {
        public $vardas;
        public $pavarde;

        public function labas() {
            return 'Labukas, esu ' . $this -> vardas . ' ' . $this -> pavarde . '<br>';
        }
    }
    
    $aZmogus = new Zmogus();
    $bZmogus = new Zmogus();

    $aZmogus -> vardas = 'Vardenis';
    $aZmogus -> pavarde = 'Pavardenis';

    $bZmogus -> vardas = 'Vardukas';
    $bZmogus -> pavarde = 'Pavardukas'; 

    echo $aZmogus -> labas();
    echo $bZmogus -> labas();
?>

<?php
    function metai($y) {
        if($y < date("Y")) {
            echo '&copy; ' . $y . '-' . date("Y");
        } else {
            echo '&copy; ' . date("Y");
        }
    }
    metai(2012);
?>


</body>
</html>
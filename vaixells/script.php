<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vaixells i Propietaris</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?php

    include 'ships.php';
    include 'owner.php';

    $vaix1 = new ships(33, "veler", "1234UUU", 2002);
    $vaix2 = new ships(3, "lanxa", "3456KKK", 2002);
    $vaix3 = new ships(42, "llaut", "5678PRS", 2002);
    $vaix4 = new ships(500, "creuer", "9012KAS", 2002);

    $prop1 = new owner("Pep", "PER", $vaix1);
    $prop2 = new owner("Joan", "PNB", $vaix2);
    $prop3 = new owner("Pere", "PdY", $vaix3);
    $prop4 = new owner("Toni", "CdY", $vaix4);

    $vaixArr = array($vaix1, $vaix2, $vaix3, $vaix4);
    $propArr = array($prop1, $prop2, $prop3, $prop4);

    function showShips()
    {
        global $vaixArr;

        for ($i = 0; $i < count($vaixArr); $i++) {
            echo "<li>" . $vaixArr[$i] . "</li>";
        }
    }

    function showOwners()
    {
        global $propArr;

        for ($i = 0; $i < count($propArr); $i++) {
            echo "<li>" . $propArr[$i] . "</li>";
        }
    }

    function introOwnerBoat()
    {
        global $propArr;
        global $vaixArr;
        if (isset($_GET["eslora"], $_GET["tipus"], $_GET["matricula"], $_GET["any"])) {
            $vaix = new ships($_GET["eslora"], $_GET["tipus"], $_GET["matricula"], $_GET["any"]);
            $prop = new owner($_GET["nom"], $_GET["llicencia"], $vaix);
            array_push($propArr, $prop);
            array_push($vaixArr, $vaix);
        }
    }

    ?>

</head>

<body>

    <ol>
        <li>Mostra els vaixells</li>
        <li>Mostra els propietaris</li>
    </ol>

    <ul>
        <?php
        if (isset($_GET["option"])) {
            if ($_GET["option"] == 1) {
                showShips();
            } else if ($_GET["option"] == 2) {
                showOwners();
            } else {
                echo "<p>Not a valid option</p>";
            }
        }
        ?>
    </ul>

    <form method="GET">
        Option: <input type="text" name="option" />
        <input type="submit" />
    </form>

    <h4>Introdueix vaixell i propietari</h4>
    <form method="get">
        Nom propietari: <input type="text" name="nom" />
        </br>
        Tipus de Llicencia: <input type="text" name="llicencia" />
        </br>
        Eslora del vaixell: <input type="text" name="eslora" />
        </br>
        Tipus de vaixell: <input type="text" name="tipus" />
        </br>
        Matricula de vaixell: <input type="text" name="matricula" />
        </br>
        Any del vaixell: <input type="text" name="eslora" />
        </br>
        <input type="submit" />
    </form>

</body>

</html>
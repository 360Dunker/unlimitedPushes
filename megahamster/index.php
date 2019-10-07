<!DOCTYPE HTML>
<head>
    <title>Megahamster</title>
    <link rel="stylesheet" href="">

    <style type="text/css">
        td, th {
            boder: 1px solid #0b495c;
            padding: 8px;
        }
    </style>
</head>
<body>
<?php
require("classes/Room.php");
require("classes/Square.php");
require("classes/Octagon.php");

$rooms[] = new Square("The Room", 1, 49.00, array(""), 80.00, 50.00, 50.00);
$rooms[] = new Square("The Flat", 1, 149.00, array("Food jars"), 120.00, 80.00, 80.00);
$rooms[] = new Octagon("The Pit", 2, 69.00, array("Hamster training gloves", "Hamster punching sack"), 20.00);
$rooms[] = new Octagon("The Pit2", 2, 69.00, ["Hamster training gloves", "Hamster punching sack"], 20.00);

?>

<div class="container">
    <h1>Megahamster</h1>
    <table style="">
        <tr>
            <th>Produkt</th>
            <th>Preis</th>
            <th>Seitenlängen</th>
            <th>Fläche</th>
            <th>Zusatzausstattung</th>

        </tr>
        <?php
        foreach ($rooms as $room) {

            echo <<<ENDE
        <tr>         
            <td>
                {$room->getBezeichnung()}
            </td>
            <td>
                {$room->getPreis()}€
            </td>
             <td>
              {$room->getGroessen()}
            </td>
            <td>
                {$room->getGrundflaeche()}cm<sup>2</sup>
            </td>
            <td>
ENDE;
             $array = $room->getZusatzausstattung();
            foreach ($array as $Ausstattung) {
                echo $Ausstattung." ";
            }
                    echo <<<ENDE
            </td>
           
        </tr>
ENDE;


        }
        ?>
    </table>
</div>

</body>


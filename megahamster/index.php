<?php
require "vendor/autoload.php";


$rooms[] = new \The360Dunker\megahamster\Living\Square("The Room", 1, 49.00, 80.00, 50.00, 50.00);
$rooms[] = new \The360Dunker\megahamster\Living\Square("The Flat", 1, 149.00, 120.00, 80.00, 80.00, "Food jars");
$rooms[] = new \The360Dunker\megahamster\Living\Octagon("The Pit", 2, 69.00, 20.00, "Hamster training gloves", "Hamster punching sack");
$rooms[] = new \The360Dunker\megahamster\Living\Octagon("The Pit2", 2, 69.00, 20.00, "Hamster training gloves", "Hamster punching sack");
if (isset($_GET['format']) && $_GET['format'] === 'json') {
    header('Content-Type: application/json');
    echo json_encode($rooms);
} else {
   ?>
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
        $room->toList();
    }
    ?>
        </tr>
  </table>
</div>

</body>

<?php

}





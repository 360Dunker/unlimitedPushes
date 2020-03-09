<?php
// show_bug.php <id>
require_once "bootstrap.php";

$theBugId = $argv[1];

$bugs = $entityManager->getRepository('Bug')
    ->findBy(array('status' => 'CLOSED'));

foreach ($bugs as $bug) {
    // do stuff
}
echo "Bug: ".$bug->getDescription()."\n";
echo "Engineer: ".$bug->getEngineer()->getName()."\n";
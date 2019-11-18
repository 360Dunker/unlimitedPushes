<?php

use Endroid\QrCode\QrCode;

require_once "vendor/autoload.php";

$qrCode = new QrCode('Wer das liest ist doof!');

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
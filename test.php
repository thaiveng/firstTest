<?php
use Endroid\QrCode\QrCode;
require_once('vendor/autoload.php');
$qrCode = new QrCode('Life is too short  QR codes First');

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
?>
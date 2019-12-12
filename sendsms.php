<?php
require('textlocal.class.php');

$textlocal = new Textlocal('demo@txtlocal.com', 'apidemo123');

$numbers = array(917667801811);
$sender = 'Textlocal';
$message = 'Hello!';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>
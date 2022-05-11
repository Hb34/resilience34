<?php
require_once __DIR__.'/vendor/autoload.php';

use OTPHP\TOTP;

$otp = TOTP::create('ZKYTXDAQFL66CCVJ63ST344XGQLOHJ4X6NYZE2S5AAWLKNXWWDMXECWBUGZL3RGAPZZWVX5ZDJHJTAFDYRDFG5NW3NNOCQYK4UWZAKQ');

if(!empty($_POST['code'])) {
    if ($otp->verify(htmlentities($_POST['code']))) {
        //echo ' Vérification de la double authentification réussi !';
        echo '<script type="text/javascript">window.alert("Vérification de la double authentification réussi !");</script>';
    } else {
       // echo ' Erreur de vérification du code !';
        echo '<script type="text/javascript">window.alert("Erreur de vérification du code !");</script>';
    }
}
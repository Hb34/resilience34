<?php
require_once __DIR__.'/vendor/autoload.php';
include "ldap.php";
use OTPHP\TOTP;

$otp = TOTP::create('ZKYTXDAQFL66CCVJ63ST344XGQLOHJ4X6NYZE2S5AAWLKNXWWDMXECWBUGZL3RGAPZZWVX5ZDJHJTAFDYRDFG5NW3NNOCQYK4UWZAKQ');

$otp->setLabel('Résilience34');
$chl = $otp->getProvisioningUri();

$link = "https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=".$chl;
//echo  $otp->now();
?>
<!doctype html>
<html lang="fr">
    <head>
        <title>Résilience 34</title>
        <meta charset="utf_8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

    
    <div class="container">
        <div class="col-12">
            <div class="text-center">
                <!-- <h1>Double authentification avec Google Authenticator</h1> -->
                <br/>
                <h2>Scanner le QR Code pour effectuer la double authentification</h2>
                <img src="<?php echo $link; ?>"/>
                <br />
                <br />
                <form action="index.php" method="POST">
                    <input type="text" name="code" class="form-control">
                    <br />
                    <button type="submit" class="btn btn-success"> Verifier</button>
                </form>

            </div>
        </div>
    </div>

</body>
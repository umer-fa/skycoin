<?php
require_once realpath('vendor/autoload.php');

use SkyCoin\SkyCoin;

$testServerUrl = "https://explorer.skycoin.com/api";
//$localUrl = "http://192.168.100.16:6420/api/v1";
$localUrl = "http://185.244.248.35:6420/api";

$skycoin = new SkyCoin($localUrl);

//$data = $skycoin->generic()->csrfToken();


//Wallets Endpoints
//$wallet = $skycoin->wallet()->getWallet("id=2020_09_03_886f.wlt");

$params =
    [
        "type" => "deterministic",
        "seed" => "xyz123",
        "label" => "xyz123",
        "password" => "nopass#123",
        "encrypt" => "true"
    ];
$headers = ["Content-Type" => "application/x-www-form-urlencoded"];
$transactionPayload = array(
    'hours_selection' =>
        array(
            'type' => 'manual',
        ),
    'wallet_id' => '2020_09_08_da78.wlt',
    'password'=>"nopass#123",
    'change_address' => 'nu7eSpT6hr5P21uzw7bnbxm83B6ywSjHdq',
    'to' =>
        array(
            0 =>
                array(
                    'address' => 'fznGedkc87a8SsW94dBowEv6J7zLGAjT17',
                    'coins' => '1.032',
                    'hours' => '7',
                ),
            1 =>
                array(
                    'address' => '7cpQ7t3PZZXvjTst8G7Uvs7XH4LeM8fBPD',
                    'coins' => '99.2',
                    'hours' => '0',
                ),
        ),
    'unsigned' => false,
    'ignore_unconfirmed' => false,
);
try {


    $wallets= $skycoin->walletFactory()->createWallet("qwe51253","qwe55123","nopass#123","deterministic",1);
//$wallets= $skycoin->walletFactory()->getWallet();
//$wallets=$wallets->createAddress();
//$wallets = $skycoin->wallet()->createWallet($params, $headers);
//$wallets = $skycoin->wallet()->wallets();
//$wallets = $skycoin->wallet()->generateSeed();
//$wallets = $skycoin->wallet()->folderName();
//$wallets = $skycoin->wallet()->newAddress(["id" => "2020_09_08_6076.wlt", "num" => 1,"password"=>"nopass#123"], $headers);
//$wallets = $skycoin->wallet()->scanAddress(["id" => "2020_09_08_da78.wlt", "num" => "0","password"=>"nopass#123"],$headers);
//$wallets = $skycoin->wallet()->walletBalance("id=2020_09_08_6076.wlt");
//$wallets = $skycoin->wallet()->changeWalletLabel(["id" => "2020_09_08_da78.wlt", "label" => "srmd"],$headers);
// $wallets = $skycoin->wallet()->createTransaction($transactionPayload);
// $wallets = $skycoin->wallet()->signTransaction(["wallet_id" => "2020_09_03_e1b0.wlt", "password" => "nopass#123", "encoded_transaction" => "010100000097dd062820314c46da0fc18c8c6c10bfab1d5da80c30adc79bbe72e90bfab11d010000006120acebfa61ba4d3970dec5665c3c952374f5d9bbf327674a0b240de62b202b319f61182e2a262b2ca5ef5a592084299504689db5448cd64c04b1f26eb01d9100010000007068bfd0f0f914ea3682d0e5cb3231b75cb9f0776bf9013d79b998d96c93ce2b0300000000ba2a4ac4a5ce4e03a82d2240ae3661419f7081b140420f0000000000ed5600000000000000ba2a4ac4a5ce4e03a82d2240ae3661419f7081b1302d8900000000006e0d0300000000000083874350e65e84aa6e06192408951d7aaac7809e10270000000000005c64030000000000"]);
//$wallets = $skycoin->wallet()->unloadWallet(["id"=>"2020_09_08_da78.wlt"],$headers);
//$wallets = $skycoin->wallet()->encryptWallet(["id"=>"2020_09_08_da78.wlt","password"=>"nopass#123"],$headers);
//$wallets = $skycoin->wallet()->walletSeed(["id"=>"2020_09_03_e1b0.wlt","password"=>"nopass#123"],$headers);

// $wallets = $skycoin->wallet()->decryptWallet(["id" => "2020_09_08_da78.wlt", "password" => "nopass#123"], $headers);
//$wallets = $skycoin->wallet()->scanAddress(["id" => "2020_09_08_da78.wlt", "label" => "srmd"],$headers);
//$wallets = $skycoin->wallet()->verifySeed(["seed"=>"nut wife logic sample addict shop before tobacco crisp bleak lawsuit affair"]);

//$uncofrimedTransaction = $skycoin->wallet()->unconfirmedTransactions("id=2020_09_03_886f.wlt");
} catch (Exception $exception) {
    echo "<pre>";
    print_r($exception->getMessage());
}
echo "<pre>";
print_r($wallets);

//Network

//$networks = $skycoin->network()->networkConnection("addr=139.162.122.63:6000");
//$networks = $skycoin->network()->networkConnections();
//$networks = $skycoin->network()->defaultConnections();
//$networks = $skycoin->network()->trustedConnections();
//$networks = $skycoin->network()->networkByPeerExchange();
//$networks = $skycoin->network()->disconnectNetwork("id=99");
//echo "<pre>";
//print_r($networks);


//Blocks
//$blocks = $skycoin->blocks()->blockMetaData();
//$blocks= $skycoin->blocks()->lastnBlocks("num=10");
//$blocks=$skycoin->blocks()->getBlock("hash=6eafd13ab6823223b714246b32c984b56e0043412950faf17defdbb2cbf3fe30");
//echo "<pre>";
//print_r($blocks);
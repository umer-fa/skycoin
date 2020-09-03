<?php
declare(strict_types=1);
require_once realpath('../vendor/autoload.php');

use SkyCoin\SkyCoin;

$serverUrl = "https://explorer.skycoin.com/api";
$localUrl = "http://192.168.100.16:6420/api/v1";
//$localUrl = "http://192.168.100.16:6420/api/v2";

$skycoin = new SkyCoin($localUrl);
echo "<pre>";

//$data = $skycoin->generic()->csrfToken();
//print_r($data);exit;
//$checks = $skycoin->genralsystem()->healthCheck();
//$version = $skycoin->genralsystem()->versionInfo();
//$result = $skycoin->simpleQuery()->getBalance('addrs=7cpQ7t3PZZXvjTst8G7Uvs7XH4LeM8fBPD,nu7eSpT6hr5P21uzw7bnbxm83B6ywSjHdq');
//$result = $skycoin->simpleQuery()->getUnspent('addrs=7cpQ7t3PZZXvjTst8G7Uvs7XH4LeM8fBPD,nu7eSpT6hr5P21uzw7bnbxm83B6ywSjHdq');
//$result = $skycoin->keyvalueStorage()->getAllStorage('type=txid&key=key1');//not working belong to v2
//$result = $skycoin->tranaction()->pendingTxs('verbose=1');
//$result = $skycoin->tranaction()->getRawTransaction('addrs=7cpQ7t3PZZXvjTst8G7Uvs7XH4LeM8fBPD,6dkVxyKFbFKg9Vdg6HPg1UANLByYRqkrdY');
//$result = $skycoin->blocks()->getBlocks('start=101&end=102');
//$result = $skycoin->blocks()->getblockchain('metadata');
//$result = $skycoin->blocks()->getblockchain('progress');
//$result = $skycoin->blocks()->getBlock('hash=6eafd13ab6823223b714246b32c984b56e0043412950faf17defdbb2cbf3fe30');
//$result = $skycoin->blocks()->getBlock('seq=2760');
//$result = $skycoin->blocks()->getBlocks('seqs=3,5,7');
//$result = $skycoin->blocks()->lastnBlocks('num=2');
//$result = $skycoin->uxout()->uxout('uxid=8b64d9b058e10472b9457fd2d05a1d89cbbbd78ce1d97b16587d43379271bed1');
//$result = $skycoin->uxout()->address_uxouts('address=6dkVxyKFbFKg9Vdg6HPg1UANLByYRqkrdY');
//$result = $skycoin->coinSupply()->coinSupply();
//$result = $skycoin->coinSupply()->richlist('n=4&include-distribution=true');
$result = $skycoin->coinSupply()->addresscount();

print_r($result);







exit;
//Wallets Endpoints
//$wallet = $skycoin->wallet()->getWallet("id=2020_09_03_886f.wlt");



$params =
    [
        "type" => "deterministic",
        "seed" => "xyz",
        "label" => "xyz"
    ];
$wallet = $skycoin->wallet()->createWallet($params);
echo "<pre>";
print_r($wallet);

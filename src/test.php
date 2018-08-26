<?php
namespace TDnet;
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://webapi.yanoshin.jp/webapi/tdnet/list/']);

$data = $client->request('GET', 'today.json')->getBody()->getContents();
print_r(json_decode($data, true));


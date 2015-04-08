# GetFaircoin PHP API integration

PHP classes to implement the getfaircoin.net api

## Features:
* GetFaircoin Ticker with EUR, USD, GPB, CHF, PLN and MXN supported currencies


## Features:
* GetFaircoin Ticker

## Installation
1. Get the code via clone
  * `git clone https://github.com/rickmoreno/getfaircoin-php-api.git`
2. Get via require in composer.json
  * `require: { "rickmoreno/getfaircoin-api": "dev-master" }`

## Basic sample
```
<?php

use GetFaircoin\Ticker;

$fair = new Ticker();

print_r($fair->tick());
```
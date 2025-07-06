<?php

require_once "vendor/autoload.php";

use VitorH\CepApi\Search;

$busca = new Search;

print_r($busca->getAddressFromZipcode('17525181'));
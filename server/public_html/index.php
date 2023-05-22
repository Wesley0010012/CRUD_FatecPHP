<?php

require("../vendor/autoload.php");

use Public\Router\Router;
use Src\UseCases\DB\DAO\PlayerDao;
use Tests\Stubs\DaoStubs\DaoStub;

// $url = urldecode(
//   parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
// )."/";

// Router::handle($url);

$result = DaoStub::getAllOrdered();

var_dump($result);
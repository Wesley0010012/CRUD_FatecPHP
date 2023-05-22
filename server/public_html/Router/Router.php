<?php

namespace Public\Router;

use Public\Protocols\RouterProtocol;

class Router implements RouterProtocol {
  public static function handle(string $fullRoute) {
    $routes = explode("/", $fullRoute);

    switch($routes[1]) {
      case 'Players':
        
    }
  }
}
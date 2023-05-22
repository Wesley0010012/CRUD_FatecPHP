<?php

namespace Public\Router\Routes;

use RoutesProtocol;
use Src\Presentation\Controllers\PlayerController;
use Src\Presentation\Protocols\HttpRequest;

class PlayerRoute implements RoutesProtocol {
  private HttpRequest $request;
  
  public static function get(string $url, array $data = NULL) {
    self::$request->body = "123";
    
    switch($url) {
      case "all":
        return new PlayerController($request)
    }
  } 
}
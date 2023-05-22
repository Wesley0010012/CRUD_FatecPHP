<?php

use Src\Presentation\Protocols\HttpResponse;

interface RoutesProtocol {
  public static function get(string $url, array $data = NULL);
}
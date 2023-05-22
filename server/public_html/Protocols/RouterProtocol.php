<?php

namespace Public\Protocols;

use Src\Presentation\Protocols\HttpResponse;

interface RouterProtocol {
  public static function handle(string $fullRoute);
}
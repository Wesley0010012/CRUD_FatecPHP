<?php

namespace Src\Infra\Protocols;

interface FactoryProtocol {
  public static function generate(): object;
}
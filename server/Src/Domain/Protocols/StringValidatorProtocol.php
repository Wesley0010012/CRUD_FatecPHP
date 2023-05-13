<?php

namespace Src\Domain\Protocols;

interface StringValidatorProtocol {
  public function isValid(string $text): bool;
}
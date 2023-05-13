<?php

namespace Tests\Stubs\StringValidatorStubs;

use Src\Domain\Protocols\StringValidatorProtocol;

class StringValidatorStub implements StringValidatorProtocol {
  public function isValid(string $text): bool {
    return false;
  }
}
<?php

namespace Tests\Stubs\StringValidatorStubs;

use Src\Domain\Protocols\StringValidatorProtocol;

class FakeStringValidatorStub implements StringValidatorProtocol {
  public function isValid(string $text): bool {
    return false;
  }
}
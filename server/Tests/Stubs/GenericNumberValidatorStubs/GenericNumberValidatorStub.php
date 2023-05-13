<?php

namespace Tests\Stubs\GenericNumberValidatorStubs;

use Src\Domain\Protocols\GenericNumberValidatorProtocol;

class GenericNumberValidatorStub implements GenericNumberValidatorProtocol {
  public function isValid(int $num): bool {
    return true;
  }
}
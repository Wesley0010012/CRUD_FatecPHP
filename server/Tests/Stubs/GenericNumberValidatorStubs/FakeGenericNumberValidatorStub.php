<?php

namespace Tests\Stubs\GenericNumberValidatorStubs;

use Src\Domain\Protocols\GenericNumberValidatorProtocol;

class FakeGenericNumberValidatorStub implements GenericNumberValidatorProtocol {
  public function isValid(int $num): bool {
    return false;
  }
}
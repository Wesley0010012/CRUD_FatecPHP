<?php

namespace Tests\Stubs\IdValidatorStubs;

use Src\Domain\Protocols\IdValidatorProtocol;

class FakeIdValidatorStub implements IdValidatorProtocol {
  public function isValid(int $id): bool {
    return false;
  }
}
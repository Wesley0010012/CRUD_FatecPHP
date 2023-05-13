<?php

namespace Tests\Stubs\IdValidatorStubs;

use Src\Domain\Protocols\IdValidatorProtocol;

class IdValidatorStub implements IdValidatorProtocol {
  public function isValid(int $id): bool {
    return true;
  }
}
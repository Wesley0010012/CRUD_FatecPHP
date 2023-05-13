<?php

namespace Tests\Stubs\EnumValidatorStubs;

use Src\Domain\Enums\FideTitleEnum;
use Src\Domain\Protocols\FideTitleEnumValidatorProtocol;

class FakeEnumValidatorStub implements FideTitleEnumValidatorProtocol {
  public function isValid(FideTitleEnum $enum): bool {
    return false;
  }
}
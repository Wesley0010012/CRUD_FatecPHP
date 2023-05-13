<?php

namespace Tests\Stubs\EnumValidatorStubs;

use Src\Domain\Enums\FideTitleEnum;
use Src\Domain\Protocols\EnumValidatorProtocol;

class FakeEnumValidatorStub implements EnumValidatorProtocol {
  public function isValid(FideTitleEnum $enum): bool {
    return false;
  }
}
<?php

namespace Src\Domain\Protocols;

use Src\Domain\Enums\FideTitleEnum;

interface EnumValidatorProtocol {
  public function isValid(FideTitleEnum $enum): bool;
}
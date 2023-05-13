<?php

namespace Src\Domain\Protocols;

use Src\Domain\Enums\FideTitleEnum;

interface FideTitleEnumValidatorProtocol {
  public function isValid(FideTitleEnum $enum): bool;
}
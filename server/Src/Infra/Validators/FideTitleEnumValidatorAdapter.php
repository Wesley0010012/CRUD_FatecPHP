<?php

namespace Src\Infra\Validators;

use Src\Domain\Enums\FideTitleEnum;
use Src\Domain\Protocols\FideTitleEnumValidatorProtocol;

class FideTitleEnumValidatorAdapter implements FideTitleEnumValidatorProtocol {
  public function isValid(FideTitleEnum $title): bool {
    if($title instanceof FideTitleEnum)
      return true;

    return false;
  }
}
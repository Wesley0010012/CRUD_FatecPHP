<?php

namespace Src\Infra\Validators;

use Src\Domain\Protocols\FideRatingValidatorProtocol;

class FideRatingValidatorAdapter implements FideRatingValidatorProtocol {
  public function isValid(float $rating): bool {
    if($rating <= 0)
      return false;

    return true;
  }
}
<?php

namespace Tests\Stubs\FideRatingValidatorStubs;

use Src\Domain\Protocols\FideRatingValidatorProtocol;

class FideRatingValidatorStub implements FideRatingValidatorProtocol {
  public function isValid(float $rating): bool {
    return true;
  }
}
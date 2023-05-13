<?php

namespace Tests\Stubs\FideRatingValidatorStubs;

use Src\Domain\Protocols\FideRatingValidatorProtocol;

class FakeFideRatingValidatorStub implements FideRatingValidatorProtocol {
  public function isValid(float $rating): bool {
    return false;
  }
}
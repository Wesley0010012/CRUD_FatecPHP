<?php

namespace Src\Domain\Protocols;

interface FideRatingValidatorProtocol {
  public function isValid(float $rating): bool;
}
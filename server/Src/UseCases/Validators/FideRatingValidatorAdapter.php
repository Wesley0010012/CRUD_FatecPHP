<?php

namespace Src\UseCases\Validators;

use Src\Domain\Protocols\FideRatingValidatorProtocol;

class FideRatingValidatorAdapter implements FideRatingValidatorProtocol {
  private static $instance = NULL;

  public function isValid(float $rating): bool {
    if($rating <= 0)
      return false;

    return true;
  }

  public static function getInstance(): FideRatingValidatorAdapter {
    if(self::$instance == null)
      self::$instance = new FideRatingValidatorAdapter;

    return self::$instance;
  }
}
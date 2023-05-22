<?php

namespace Src\UseCases\Validators;

use Src\Domain\Enums\FideTitleEnum;
use Src\Domain\Protocols\FideTitleEnumValidatorProtocol;

class FideTitleEnumValidatorAdapter implements FideTitleEnumValidatorProtocol {
  private static $instance = NULL;

  public function isValid(FideTitleEnum $title): bool {
    if($title instanceof FideTitleEnum)
      return true;

    return false;
  }

  public static function getInstance(): FideTitleEnumValidatorAdapter {
    if(self::$instance == NULL)
      self::$instance = new FideTitleEnumValidatorAdapter;

    return self::$instance;
  }
}
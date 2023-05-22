<?php

namespace Src\UseCases\Validators;

use Src\Domain\Protocols\StringValidatorProtocol;

class StringValidatorAdapter implements StringValidatorProtocol {
  private static $instance = NULL;
  
  public function isValid(string $text): bool {
    if(!preg_match("/[0-9]+/", $text))
      return true;

    return false;
  }

  public static function getInstance(): StringValidatorAdapter {
    if(self::$instance == NULL)
      self::$instance = new StringValidatorAdapter;

    return self::$instance;
  }
}
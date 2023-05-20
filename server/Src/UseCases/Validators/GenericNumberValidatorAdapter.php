<?php

namespace Src\UseCases\Validators;

use Src\Domain\Protocols\GenericNumberValidatorProtocol;

class GenericNumberValidatorAdapter implements GenericNumberValidatorProtocol {
  private $instance = NULL;
  
  public function isValid(int $num): bool {
    if($num < 0)
      return false;
    
    return true;
  }

  public static function getInstance(): GenericNumberValidatorAdapter {
    if(self::$instance == NULL)
      self::$instance = new GenericNumberValidatorAdapter;

    return self::$instance;
  }
}
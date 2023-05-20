<?php

namespace Src\UseCases\Validators;

use Src\Domain\Protocols\IdValidatorProtocol;

class IdValidatorAdapter implements IdValidatorProtocol {
  private $instance = NULL;
  
  public function isValid(int $id): bool {
    if($id <= 0)
      return false;

    return true;
  }

  public static function getInstance(): IdValidatorAdapter {
    if(self::$instance == NULL)
      self::$instance = new IdValidatorAdapter;

    return self::$instance;
  }
}
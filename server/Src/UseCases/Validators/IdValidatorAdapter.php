<?php

namespace Src\UseCases\Validators;

use Src\Domain\Protocols\IdValidatorProtocol;

class IdValidatorAdapter implements IdValidatorProtocol {
  public function isValid(int $id): bool {
    if($id <= 0)
      return false;

    return true;
  }
}
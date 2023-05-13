<?php

namespace Src\Domain\Protocols;

interface IdValidatorProtocol {
  public function isValid(int $id): bool;
}
<?php

namespace Src\Domain\Protocols;

interface GenericNumberValidatorProtocol {
  public function isValid(int $num): bool; 
}
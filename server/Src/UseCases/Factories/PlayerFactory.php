<?php

namespace Src\UseCases\Factories;

use Src\Domain\Entities\Player;
use Src\Infra\Protocols\FactoryProtocol;
use Src\UseCases\Validators\FideRatingValidatorAdapter;
use Src\UseCases\Validators\FideTitleEnumValidatorAdapter;
use Src\UseCases\Validators\genericNumberValidatorAdapter;
use Src\UseCases\Validators\IdValidatorAdapter;
use Src\UseCases\Validators\StringValidatorAdapter;

class PlayerFactory implements FactoryProtocol {
  public static function generate(): object {
    return new Player(IdValidatorAdapter::getInstance(), StringValidatorAdapter::getInstance(), FideTitleEnumValidatorAdapter::getInstance(), FideRatingValidatorAdapter::getInstance(), genericNumberValidatorAdapter::getInstance());
  }
}
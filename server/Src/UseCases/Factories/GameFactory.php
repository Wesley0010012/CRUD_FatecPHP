<?php

namespace Src\UseCases\Factories;

use Src\Domain\Entities\Game;
use Src\Infra\Protocols\FactoryProtocol as ProtocolsFactoryProtocol;
use Src\UseCases\Validators\GenericNumberValidatorAdapter;
use Src\UseCases\Validators\IdValidatorAdapter;
use Src\UseCases\Validators\StringValidatorAdapter;

class GameFactory implements ProtocolsFactoryProtocol {
  public static function generate(): Game {
    return new Game(GenericNumberValidatorAdapter::getInstance(), IdValidatorAdapter::getInstance(), StringValidatorAdapter::getInstance(), PlayerFactory::generate(), PlayerFactory::generate());
  }
}
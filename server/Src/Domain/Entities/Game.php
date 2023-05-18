<?php

namespace Src\Domain\Entities;

use InvalidArgumentException;
use Src\Domain\Protocols\GenericNumberValidatorProtocol;
use Src\Domain\Protocols\IdValidatorProtocol;
use Src\Domain\Protocols\StringValidatorProtocol;

class Game {
  private int $id;
  private string $gamePlace;
  public Player $p1;
  public Player $p2;
  private string $dateOfGame;
  private string $pgn;

  private readonly GenericNumberValidatorProtocol $numberValidator;
  private readonly IdValidatorProtocol $idValidator;
  private readonly StringValidatorProtocol $stringValidator;

  public function __construct(GenericNumberValidatorProtocol $numberValidator, IdValidatorProtocol $idValidator, StringValidatorProtocol $stringValidator) {
    $this->numberValidator = $numberValidator;
    $this->idValidator = $idValidator;
    $this->stringValidator = $stringValidator;
  }

  public function getId(): int {
    return $this->id;
  }

  public function setId(int $id): void {
    if(!$this->idValidator->isValid($id))
      throw new InvalidArgumentException("Invalid Id");
  }

  public function getGamePlace(): string {
    return $this->gamePlace;
  }

  public function setGamePlace(string $gamePlace): void {

  }
}
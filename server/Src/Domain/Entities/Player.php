<?php

namespace Src\Domain\Entities;

use InvalidArgumentException;
use Src\Domain\Protocols\EnumValidatorProtocol;
use Src\Domain\Protocols\IdValidatorProtocol;
use Src\Domain\Protocols\StringValidatorProtocol;
use Src\Infra\Validators\EnumValidator;

class Player {
  private readonly IdValidatorProtocol $idValidator;
  private readonly StringValidatorProtocol $stringValidator;
  private readonly EnumValidatorProtocol $enumValidator;

  private int $id;
  private string $firstName;
  private string $lastName;
  private FideTitle $fideTitle;
  private float $fideRating;
  private int $wins;
  private int $loses;
  private int $playedMatches;
  private array $matches;

  public function __construct(IdValidatorProtocol $idValidator, StringValidatorProtocol $stringValidator, EnumValidatorProtocol $enumValidator) {
    $this->idValidator = $idValidator;
    $this->stringValidator = $stringValidator;
    $this->enumValidator = $enumValidator;

    $this->fideTitle = new FideTitle($this->enumValidator, $this->idValidator);
  }

  public function getId(): int {
    return $this->id;
  }

  public function setId(int $id): void {
    if(!$this->idValidator->isValid($id))
      throw new InvalidArgumentException("Invalid Id");

    $this->id = $id;
  }

  public function getFirstName(): string {
    return $this->firstName;
  }

  public function setFirstName(string $firstName): void {
    if(!$this->stringValidator->isValid($firstName))
      throw new InvalidArgumentException("Invalid first name");

    $this->firstName = $firstName;
  }

  public function getLastName(): string {
    return $this->lastName;
  }

  public function setLastName(string $lastName): void {
    if(!$this->stringValidator->isValid($lastName))
      throw new InvalidArgumentException("Invalid first name");

    $this->lastName = $lastName;
  }
}
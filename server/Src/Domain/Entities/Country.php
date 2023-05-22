<?php

namespace Src\Domain\Entities;

use InvalidArgumentException;
use Src\Domain\Protocols\IdValidatorProtocol;
use Src\Domain\Protocols\StringValidatorProtocol;

class Country {
  private readonly IdValidatorProtocol $idValidator;
  private readonly StringValidatorProtocol $stringValidator;

  private int $id;
  private string $sigle;
  private string $name;

  public function __construct(IdValidatorProtocol $idValidator, StringValidatorProtocol $stringValidator) {
    $this->idValidator = $idValidator;
    $this->stringValidator = $stringValidator;
  }

  public function getId(): int {
    return $this->id;
  }

  public function setId(int $id): void {
    if(!$this->idValidator->isValid($id))
      throw new InvalidArgumentException("Invalid ID"); 

    $this->id = $id;
  }

  public function getSigle(): string {
    return $this->sigle;
  }

  public function setSigle(string $sigle): void {
    if(!$this->stringValidator->isValid($sigle))
      throw new InvalidArgumentException("Invalid ID"); 

    $this->sigle = $sigle;
  }

  public function getName(): string {
    return $this->name;
  }

  public function setName(string $name): void {
    if(!$this->stringValidator->isValid($name))
      throw new InvalidArgumentException("Invalid ID"); 

    $this->name = $name;
  }
}
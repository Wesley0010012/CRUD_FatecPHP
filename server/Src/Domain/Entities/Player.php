<?php

namespace Src\Domain\Entities;

use InvalidArgumentException;
use Src\Domain\Protocols\FideRatingValidatorProtocol;
use Src\Domain\Protocols\FideTitleEnumValidatorProtocol;
use Src\Domain\Protocols\GenericNumberValidatorProtocol;
use Src\Domain\Protocols\IdValidatorProtocol;
use Src\Domain\Protocols\StringValidatorProtocol;

class Player {
  private readonly IdValidatorProtocol $idValidator;
  private readonly StringValidatorProtocol $stringValidator;
  private readonly FideTitleEnumValidatorProtocol $enumValidator;
  private readonly FideRatingValidatorProtocol $fideRatingValidator;
  private readonly GenericNumberValidatorProtocol $genericNumberValidator;

  private int $id;
  private string $firstName;
  private string $lastName;
  public FideTitle $fideTitle;
  private float $fideRating;
  private int $wins;
  private int $loses;
  private int $playedGames;

  public function __construct(IdValidatorProtocol $idValidator, StringValidatorProtocol $stringValidator, FideTitleEnumValidatorProtocol $enumValidator, FideRatingValidatorProtocol $fideRatingValidator, GenericNumberValidatorProtocol $genericNumberValidator) {
    $this->idValidator = $idValidator;
    $this->stringValidator = $stringValidator;
    $this->enumValidator = $enumValidator;
    $this->fideRatingValidator = $fideRatingValidator;
    $this->genericNumberValidator = $genericNumberValidator;

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
      throw new InvalidArgumentException("Invalid last name");

    $this->lastName = $lastName;
  }

  public function getFideRating(): float {
    return $this->fideRating;
  }

  public function setFideRating(float $rating): void {
    if(!$this->fideRatingValidator->isValid($rating))
      throw new InvalidArgumentException("Invalid Fide Rating");

    $this->fideRating = $rating;
  }

  public function getWins(): int {
    return $this->wins;
  }

  public function setWins(int $wins): void {
    if(!$this->genericNumberValidator->isValid($wins))
      throw new InvalidArgumentException("invalid Wins number");

    $this->wins = $wins;
  }

  public function getLoses(): int {
    return $this->loses;
  }

  public function setLoses(int $loses): void {
    if(!$this->genericNumberValidator->isValid($loses))
      throw new InvalidArgumentException("invalid Loses number");

    $this->loses = $loses;
  }

  public function getPlayedGames(): int {
    return $this->playedGames;
  }

  public function setPlayedGames(int $matches): void {
    if(!$this->genericNumberValidator->isValid($matches))
      throw new InvalidArgumentException("invalid Loses number");

    $this->playedGames = $matches;
  }
}
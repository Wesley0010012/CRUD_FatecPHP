<?php

namespace Src\Domain\Entities;


use InvalidArgumentException;
use Src\Domain\Enums\FideTitleEnum;
use Src\Domain\Protocols\FideTitleEnumValidatorProtocol;
use Src\Domain\Protocols\IdValidatorProtocol;

class FideTitle {
  private int $id;
  private FideTitleEnum $title;
  private readonly FideTitleEnumValidatorProtocol $enumValidator;
  private readonly IdValidatorProtocol $idValidator;

  public function __construct(FideTitleEnumValidatorProtocol $enumValidator, IdValidatorProtocol $idValidator) {
    $this->enumValidator = new $enumValidator;
    $this->idValidator = new $idValidator;
  }

  public function getId(): int {
    return $this->id;
  }

  public function setId(int $id): void {
    if(!$this->idValidator->isValid($id))
      throw new InvalidArgumentException("Invalid number");

    $this->id = $id;
  }

  public function getTitle(): FideTitleEnum {
    return $this->title;
  }

  public function setTitle(FideTitleEnum $title): void {
    if(!$this->enumValidator->isValid($title))
      throw new InvalidArgumentException("Invalid Title");

    $this->title = $title;
  }
}
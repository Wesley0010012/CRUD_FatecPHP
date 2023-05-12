<?php

namespace Src\Domain\Entities;

use InvalidArgumentException;
use Src\Domain\Enums\FideTitleEnum;

class FideTitle {
  private int $id;
  private FideTitleEnum $title;

  public function getId(): int {
    return $this->id;
  }

  public function setId(int $id): void {
    if($id <= 0)
      throw new InvalidArgumentException("Invalid or Empty number");

    $this->id = $id;
  }

  public function getTitle(): FideTitleEnum {
    return $this->title;
  }

  public function setTitle(FideTitleEnum $title): void {
    
  }
}
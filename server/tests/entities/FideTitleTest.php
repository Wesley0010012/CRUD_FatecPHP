<?php

namespace Tests\Entities;

use InvalidArgumentException;
use \PHPUnit\Framework\TestCase;
use \Src\Domain\Entities\FideTitle;

class FideTitleTest extends TestCase {
  private FideTitle $sut;

  public function setUp(): void {
    $this->sut = new FideTitle();
  }

  public function testShouldReturnExceptionIfNoNumberIsProvided(): void {
    $this->expectException(new InvalidArgumentException());
    $this->sut->setId(0);
  }
}
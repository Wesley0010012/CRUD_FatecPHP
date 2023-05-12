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

  public function testShouldReturnExceptionIfLessOf0NumberIsProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setId(-1);
  }

  public function testShouldReturnExceptionIfNumberEqualTo0IsProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setId(0);
  }

  public function testShouldInsertTheNumberHigherThan0(): void {
    $this->sut->setId(1);
    $result = $this->sut->getId();
    $this->assertEquals(1, $result);
  }
}
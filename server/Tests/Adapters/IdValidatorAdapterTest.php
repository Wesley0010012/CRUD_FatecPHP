<?php

namespace Tests\Adapters;

use PHPUnit\Framework\TestCase;
use Src\Domain\Protocols\IdValidatorProtocol;
use Src\UseCases\Validators\IdValidatorAdapter;

class IdValidatorAdapterTest extends TestCase {
  private readonly IdValidatorProtocol $sut;

  public function setUp(): void {
    $this->sut = new IdValidatorAdapter;
  }

  public function testShouldReturnFalseIfInvalidIdIsProvided(): void {
    $result = $this->sut->isValid(0);

    $this->assertEquals(false, $result);
  }

  public function testShouldReturnTrueIfValidIdIsProvided(): void {
    $result = $this->sut->isValid(1);

    $this->assertEquals(true, $result);
  }
}
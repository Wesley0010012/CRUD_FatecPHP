<?php

namespace Tests\Adapters;

use PHPUnit\Framework\TestCase;
use Src\Domain\Protocols\StringValidatorProtocol;
use Src\UseCases\Validators\StringValidatorAdapter;

class StringValidatorAdapterTest extends TestCase {
  private StringValidatorProtocol $sut;

  public function setUp(): void {
    $this->sut = new StringValidatorAdapter;
  }

  public function testShouldReturnFalseIfInvalidStringIsProvided(): void {
    $result = $this->sut->isValid("ASB1234");

    $this->assertEquals(false, $result);
  }

  public function testShouldReturnTrueIfValidStringIsProvided(): void {
    $result = $this->sut->isValid("ASB");

    $this->assertEquals(true, $result);
  }
}
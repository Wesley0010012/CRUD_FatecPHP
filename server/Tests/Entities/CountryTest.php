<?php

namespace Tests\Entities;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Src\Domain\Entities\Country;
use Tests\Stubs\IdValidatorStubs\FakeIdValidatorStub;
use Tests\Stubs\IdValidatorStubs\IdValidatorStub;
use Tests\Stubs\StringValidatorStubs\FakeStringValidatorStub;
use Tests\Stubs\StringValidatorStubs\StringValidatorStub;

class CountryTest extends TestCase {
  private Country $sut;

  public function fakeFactory(): void {
    $fakeIdValidatorStub = new FakeIdValidatorStub;
    $fakeStringValidatorStub = new FakeStringValidatorStub;

    $this->sut = new Country($fakeIdValidatorStub, $fakeStringValidatorStub);
  }

  public function setUp(): void {
    $this->fakeFactory();
  }

  public function testExampleShouldThrowExceptionIfInvalidIdIsProvided() {
    $this->expectException(InvalidArgumentException::class);
    
    $this->sut->setId(-1);
  }

  public function testExampleShouldThrowExceptionIfInvalidSigleIsProvided() {
    $this->expectException(InvalidArgumentException::class);
    
    $this->sut->setSigle("Failed_Sigle");
  }

  public function testExampleShouldThrowExceptionIfInvalidNameIsProvided() {
    $this->expectException(InvalidArgumentException::class);
    
    $this->sut->setName("Fai123jlkda");
  }
}
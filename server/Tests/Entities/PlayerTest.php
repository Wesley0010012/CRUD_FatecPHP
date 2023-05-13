<?php

namespace Tests\Entities;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Src\Domain\Entities\Player;
use Tests\Stubs\EnumValidatorStubs\FakeEnumValidatorStub;
use Tests\Stubs\IdValidatorStubs\FakeIdValidatorStub;
use Tests\Stubs\StringValidatorStubs\FakeStringValidatorStub;

class PlayerTest extends TestCase {
  private Player $sut;

  public function setUp(): void {
    $this->fakeFactory();
  }

  public function fakeFactory(): void {
    $fakeIdValidator = new FakeIdValidatorStub;
    $fakeStringValidator = new FakeStringValidatorStub;
    $fakeEnumValidator = new FakeEnumValidatorStub;

    $this->sut = new Player($fakeIdValidator, $fakeStringValidator, $fakeEnumValidator);
  }

  public function testExampleShouldReturnExceptionIfInvalidIdWasProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setId(-1);
  }

  public function testExampleShouldReturnExceptionIfInvalidFirstNameWasProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setFirstName("Any123");
  }

  public function testExampleShouldReturnExceptionIfInvalidLastNameWasProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setLastName("Any123");
  }

  public function testExampleShouldReturnExceptionIfInvalidTitleWasProvided(): void {
    $this->expectException(InvalidArgumentException::class);
  }
}
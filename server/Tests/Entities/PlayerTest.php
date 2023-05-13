<?php

namespace Tests\Entities;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Src\Domain\Entities\Player;

use Tests\Stubs\EnumValidatorStubs\FakeEnumValidatorStub;
use Tests\Stubs\FideRatingValidatorStubs\FakeFideRatingValidatorStub;
use Tests\Stubs\GenericNumberValidatorStubs\FakeGenericNumberValidatorStub;
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
    $fakeFideRatingValidator = new FakeFideRatingValidatorStub;
    $fakeGenericNumberValidator = new FakeGenericNumberValidatorStub;

    $this->sut = new Player($fakeIdValidator, $fakeStringValidator, $fakeEnumValidator, $fakeFideRatingValidator, $fakeGenericNumberValidator);
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

  public function testExampleShouldReturnExceptionIfInvalidFideRatingWasProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setFideRating(-1);
  }

  public function testExampleShouldReturnExceptionIfInvalidWinsWasProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setWins(-1);
  }

  public function testExampleShouldReturnExceptionIfInvalidLosesWasProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setLoses(-1);
  }

  public function testExampleShouldReturnExceptionIfInvalidPlayedMatchesWasProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setPlayedMatches(-1);
  }
}
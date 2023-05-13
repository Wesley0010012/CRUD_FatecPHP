<?php

namespace Tests\Entities;

use InvalidArgumentException;
use \PHPUnit\Framework\TestCase;
use \Src\Domain\Entities\FideTitle;
use Src\Domain\Enums\FideTitleEnum;
use Tests\Stubs\EnumValidatorStubs\EnumValidatorStub;
use Tests\Stubs\EnumValidatorStubs\FakeEnumValidatorStub;
use Tests\Stubs\IdValidatorStubs\FakeIdValidatorStub;
use Tests\Stubs\IdValidatorStubs\IdValidatorStub;

class FideTitleTest extends TestCase {
  private FideTitle $sut;

  public function setUp(): void {
    $this->fakeFactory();
  }

  public function fakeFactory(): void {
    $idValidator = new FakeIdValidatorStub;
    $enumValidator = new FakeEnumValidatorStub;

    $this->sut = new FideTitle($enumValidator, $idValidator);
  }

  public function realFactory(): void {
    $idValidator = new IdValidatorStub;
    $enumValidator = new EnumValidatorStub;

    $this->sut = new FideTitle($enumValidator, $idValidator);
  }

  public function testExampleShouldReturnExceptionIfInvalidNumberIsProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setId(-1);
  }

  public function testExampleShouldReturnExceptionIfInvalidTitleIsProvided(): void {
    $this->expectException(InvalidArgumentException::class);
    $this->sut->setTitle(FideTitleEnum::FM);
  }

  public function testShouldReturnTheCorrectNumber(): void {
    $this->realFactory();

    $this->sut->setId(1);

    $result = $this->sut->getId();
    $this->assertEquals(1, $result);
  }

  public function testShouldReturnTheCorrectTitle(): void {
    $this->realFactory();

    $this->sut->setTitle(FideTitleEnum::GM);
    $result = $this->sut->getTitle();
    $this->assertEquals(FideTitleEnum::GM, $result);
  }
}
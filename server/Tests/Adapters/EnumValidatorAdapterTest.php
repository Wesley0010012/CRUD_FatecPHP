<?php

namespace Tests\Adapters;

use PHPUnit\Framework\TestCase;
use Src\Domain\Enums\FideTitleEnum;
use Src\Domain\Protocols\EnumValidatorProtocol;
use Src\Infra\Validators\EnumValidatorAdapter;

class EnumValidatorAdapterTest extends TestCase {
  private readonly EnumValidatorProtocol $sut;

  public function setUp(): void {
    $this->sut = new EnumValidatorAdapter;
  }

  public function testShouldReturnTrueIfValidTitleWasProvided(): void {
    $result = $this->sut->isValid(FideTitleEnum::GM);

    $this->assertEquals(true, $result);
  }
}
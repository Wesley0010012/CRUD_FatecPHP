<?php

namespace Tests\Adapters;

use PHPUnit\Framework\TestCase;
use Src\Domain\Enums\FideTitleEnum;
use Src\Domain\Protocols\FideTitleEnumValidatorProtocol;
use Src\Infra\Validators\FideTitleEnumValidatorAdapter;

class FideTitleEnumValidatorAdapterTest extends TestCase {
  private readonly FideTitleEnumValidatorProtocol $sut;

  public function setUp(): void {
    $this->sut = new FideTitleEnumValidatorAdapter;
  }

  public function testShouldReturnTrueIfValidTitleWasProvided(): void {
    $result = $this->sut->isValid(FideTitleEnum::GM);

    $this->assertEquals(true, $result);
  }
}
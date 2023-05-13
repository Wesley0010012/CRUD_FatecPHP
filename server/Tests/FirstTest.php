<?php

use \PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class FirstTest extends TestCase {
  public function testTheTestCase(): void {
    assertEquals(1, 1);
  }
}
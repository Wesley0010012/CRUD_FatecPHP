<?php

namespace Tests\Stubs\DaoStubs;

use ArrayObject;
use Src\Infra\Protocols\DaoProtocol;

class DaoStub implements DaoProtocol {
  private static function generateStubObject(string $letter): object {
    $objStub = (object) array(
      'name' => 'Example'.$letter,
      'test' => 'Test'.$letter
    );

    return $objStub;
  }
  
  public static function getAll(): ArrayObject {
    $result = new ArrayObject();

    for($i = 0; $i < 9; $i++)
      $result->append(self::generateStubObject());

    return $result;
  }

  public static function getById(int $id): object {
    return self::generateStubObject();
  }

  public static function getAllOrdered(): ArrayObject {
    $result = new ArrayObject();

    for($i = 0; $i < 9; $i++)
      $result->append(self::generateStubObject((string) 90 - $i));

    $result->asort();

    return $result;
  }
}
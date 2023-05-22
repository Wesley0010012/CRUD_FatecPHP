<?php

namespace Tests\Stubs\DaoStubs;

use ArrayObject;
use Exception;
use Src\Infra\Protocols\DaoProtocol;

class FakeDaoStub implements DaoProtocol {
  public static function getAll(): ArrayObject {
    throw new Exception("Some Error....");
  }

  public static function getAllOrdered(): ArrayObject {
    throw new Exception("Some Error....");
  }

  public static function getById(int $id): object {
    throw new Exception("Some Error....");
  }
}
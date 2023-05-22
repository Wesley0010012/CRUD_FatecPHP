<?php

namespace Src\Infra\Protocols;

use ArrayObject;

interface DaoProtocol {
  public static function getById(int $id): object;
  public static function getAll(): ArrayObject;
  public static function getAllOrdered(): ArrayObject;
}
<?php

namespace Src\Infra\Protocols;

use ArrayObject;

interface DaoProtocol {
  public function getById(int $id): Object;
  public function getAll(): ArrayObject;
  public function getAllOrdered(): ArrayObject;
}
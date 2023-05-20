<?php

namespace UseCases\DB\Dao;

use ArrayObject;
use Src\Domain\Entities\Player;
use Src\Infra\Protocols\DaoProtocol;
use Src\UseCases\DB\MySql;

class PlayerDao implements DaoProtocol {
  public function getAll(): ArrayObject {
    $result = new ArrayObject();
    $query = 'SELECT * FROM `player`';
    $data = MySql::prepare($query);
    $data->execute();
    $response = $data->fetchAll();

    foreach($response as $resp) {
      $temp = ;
    }

    return $result;
  }
}
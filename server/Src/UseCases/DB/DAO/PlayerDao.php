<?php

namespace Src\UseCases\DB\DAO;

use ArrayObject;
use Src\Infra\Protocols\DaoProtocol;
use Src\UseCases\DB\MySql;
use Src\UseCases\Factories\PlayerFactory;

class PlayerDao implements DaoProtocol {
  public static function getById(int $id): object {
    $result = PlayerFactory::generate();
    $query = 'SELECT * FROM `player` WHERE id = :id';
    $data = Mysql::prepare($query);
    $data->bindValue(':id', $id);
    $data->execute();
    $response = $data->fetchAll();

    foreach($response as $resp) {
      $result->setFirstName($resp->first_name);
      $result->setLastName($resp->last_name);
    }

    return $result;
  }

  public static function getAll(): ArrayObject {
    $result = new ArrayObject();
    $query = 'SELECT * FROM `player`';
    $data = MySql::prepare($query);
    $data->execute();
    $response = $data->fetchAll();

    foreach($response as $resp) {
      $tPlayer = PlayerFactory::generate();
      $tPlayer->setFirstName($resp->first_name);
      $tPlayer->setLastName($resp->last_name);

      $result->append($tPlayer);
    }

    return $result;
  }

  public static function getAllOrdered(): ArrayObject {
    $result = self::getAll();
    $result->natsort();

    return $result;
  }
}
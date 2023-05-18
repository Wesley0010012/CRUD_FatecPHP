<?php

namespace Src\UseCases\DB;

class Config {
  private const db_host = "localhost";
  private const db_name = "fatec_project";
  private const db_user = "root";
  private const db_pass = "12345678";

  public static function getDbHost(): string {
    return self::db_host;
  }

  public static function getDbName(): string {
    return self::db_name;
  }

  public static function getDbUser(): string {
    return self::db_user;
  }

  public static function getDbPass(): string {
    return self::db_pass;
  }
}
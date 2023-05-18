<?php
	
namespace Src\UseCases\DB;

use PDO;
use PDOException;
use Src\UseCases\DB\Config;

class MySql {

	private static $pdo = null;

	public static function connect() {
	if(self::$pdo == null) {
			try {
			self::$pdo = new PDO('mysql:host='.Config::getDbHost().';dbname='.Config::getDbName(), Config::getDbUser(), Config::getDbPass());
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
		return self::$pdo;
	}
}
?>
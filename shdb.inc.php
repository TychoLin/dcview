<?php
class DB {
	private static $_db;
	private static $_dbStores = array(
		"dcviewSH" => array(
			"dsn" => "mysql:host=localhost;dbname=dcview",
			"username" => "root",
			"password" => "9999",
			"options" => array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
			),
		),
	);

	private function __construct($database) {
		try {
			$reflectionObj = new ReflectionClass("PDO");
			self::$_db[$database] = $reflectionObj->newInstanceArgs(self::$_dbStores[$database]);
			self::$_db[$database]->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Connection failed: ".$e->getMessage();
		}
	}

	public static function getPDO($database) {
		if (!isset(self::$_db[$database])) {
			new self($database);
		}
		return self::$_db[$database];
	}
}

class RecordModel {
	private $_dbHandler;

	private $_tableReference = "";

	public function __construct($database, $table_reference) {
		$this->_dbHandler = DB::getPDO($database);
		$this->_tableReference = $table_reference;
	}

	public function create($record, $duplicate_clause = array()) {
		$fields = implode(",", array_keys($record));
		$place_holders = implode(",", array_fill(0, count($record), "?"));

		$sql = array();
		array_push($sql, "INSERT INTO", $this->_tableReference, "($fields)", "VALUES", "($place_holders)");

		if (is_array($duplicate_clause) && count($duplicate_clause) > 0) {
			array_push($sql, "ON DUPLICATE KEY UPDATE", implode(",", array_keys($duplicate_clause)));
		}

		$params = array_merge(array_values($record), array_values($duplicate_clause));

		try {
			$ps = $this->_dbHandler->prepare(implode(" ", $sql));
			$ps->execute($params);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function read($sql_params, $fetch_style = PDO::FETCH_ASSOC) {
		try {
			$ps = $this->_dbHandler->prepare($sql_params["sql"]);
			$ps->execute($sql_params["params"]);
			return $ps->fetchAll($fetch_style);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function generateReadSQL($sql_params) {
		$params = array();

		$fields = "*";
		if (isset($sql_params["fields"])) {
			$fields = $sql_params["fields"];
			if (is_array($fields) && count($fields) > 0) {
				$fields = implode(",", $fields);
			}
		}

		$table_reference = $this->_tableReference;
		if (isset($sql_params["table_reference"])) {
			if (is_array($sql_params["table_reference"])) {
				if (isset($sql_params["table_reference"]["sql"])) {
					$table_reference = $sql_params["table_reference"]["sql"];
					$params = array_merge($params, $sql_params["table_reference"]["params"]);
				} else {
					$table_reference = implode(" ", $sql_params["table_reference"]);
				}
			} else {
				$table_reference = $sql_params["table_reference"];
			}
		}

		$where_clause = "1 = 1";
		if (isset($sql_params["where_cond"])) {
			$where_cond = $sql_params["where_cond"];
			if (is_array($where_cond) && count($where_cond) > 0) {
				$where_clause = implode(" AND ", array_keys($where_cond));

				foreach (array_values($where_cond) as $value) {
					if (is_array($value)) {
						$params = array_merge($params, $value);
					} else {
						array_push($params, $value);
					}
				}
			}
		}

		$sql = array();
		array_push($sql, "SELECT", $fields, "FROM");
		if (isset($sql_params["sub_query_alias"])) {
			array_push($sql, "($table_reference)", "AS", $sql_params["sub_query_alias"]);
		} else {
			array_push($sql, $table_reference);
		}
		array_push($sql, "WHERE", $where_clause);

		if (isset($sql_params["group_by_clause"])) {
			array_push($sql, "GROUP BY", $sql_params["group_by_clause"]);
		}

		if (isset($sql_params["order_by_clause"])) {
			array_push($sql, "ORDER BY", $sql_params["order_by_clause"]);
		}

		if (isset($sql_params["limit"])) {
			array_push($sql, "LIMIT", $sql_params["limit"]);
		}

		if (isset($sql_params["offset"])) {
			array_push($sql, "OFFSET", $sql_params["offset"]);
		}

		return array("sql" => implode(" ", $sql), "params" => $params);
	}

	public function update($record, $where_cond) {
		$set_clause = $params = array();
		foreach ($record as $key => $value) {
			array_push($set_clause, "$key = ?");
			array_push($params, $value);
		}
		$set_clause = implode(',', $set_clause);

		$where_clause = "1 = 1";
		if (is_array($where_cond) && count($where_cond) > 0) {
			$where_clause = implode(" AND ", array_keys($where_cond));
			$params = array_merge($params, array_values($where_cond));
		}

		$sql = array();
		array_push($sql, "UPDATE", $this->_tableReference, "SET", $set_clause, "WHERE", $where_clause);

		try {
			$ps = $this->_dbHandler->prepare(implode(" ", $sql));
			return $ps->execute($params);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function getLastInsertID() {
		return $this->_dbHandler->lastInsertId();
	}
}

class DcviewSHRecordModel extends RecordModel {
	public function __construct($table_reference) {
		parent::__construct("dcviewSH", $table_reference);
	}
}

class TblArticle extends DcviewSHRecordModel {
	public function __construct() {
		parent::__construct("tblArticle");
	}
}

class TblReply extends DcviewSHRecordModel {
	public function __construct() {
		parent::__construct("tblReply");
	}
}

class TblReport extends DcviewSHRecordModel {
	public function __construct() {
		parent::__construct("tblReport");
	}
}

class TblSHMainCategory extends DcviewSHRecordModel {
	public function __construct() {
		parent::__construct("tblSHMainCategory");
	}
}

class TblSHSubCategory extends DcviewSHRecordModel {
	public function __construct() {
		parent::__construct("tblSHSubCategory");
	}
}
?>
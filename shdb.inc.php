<?php
class DB {
	private static $_db;

	private function __construct() {
		try {
			self::$_db = new PDO("mysql:host=localhost;dbname=dcview", "root", "9999");
			self::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Connection failed: ".$e->getMessage();
		}
	}

	public static function getPDO() {
		if (is_null(self::$_db)) {
			new self();
		}
		return self::$_db;
	}
}

class RecordModel {
	private $_tableName = "";
	private $_primaryKeyName = "";

	public function __construct($tableName, $primaryKeyName) {
		$this->_tableName = $tableName;
		$this->_primaryKeyName = $primaryKeyName;
	}

	public function create($record) {
		$fields = implode(",", array_keys($record));
		$params = array();
		foreach ($record as $k => $v) {
			$params[":$k"] = $v;
		}
		$named_params = implode(",", array_keys($params));

		$sql = "INSERT INTO {$this->_tableName}($fields) VALUES($named_params)";
		try {
			$ps = DB::getPDO()->prepare($sql);
			$ps->execute($params);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function read($fields, $cond, $limit = "", $offset = "") {
		if (is_array($fields) && count($fields) > 0) {
			$fields = implode(",", $fields);
		} else {
			$fields = "*";
		}

		$cond_clause = "";
		if (is_array($cond) && count($cond) > 0) {
			$cond_clause = "WHERE ".implode(" AND ", array_keys($cond));
		}

		$limit_clause = "";
		if ($limit !== "" && $offset !== "") {
			$limit = (int)$limit;
			$offset = (int)$offset;
			$limit_clause = "LIMIT $limit OFFSET $offset";
		}

		$sql = "SELECT $fields FROM {$this->_tableName} $cond_clause $limit_clause";
		try {
			$ps = DB::getPDO()->prepare($sql);
			$ps->execute(array_values($cond));
			return $ps->fetchAll(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}

class TblArticle extends RecordModel {
	public function __construct() {
		parent::__construct("tblArticle", "article_id");
	}
}
?>
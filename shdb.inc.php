<?php
class DB {
	private static $_db;
	private $_dbStores = array(
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
			self::$_db = $reflectionObj->newInstanceArgs($this->_dbStores[$database]);
			self::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Connection failed: ".$e->getMessage();
		}
	}

	public static function getPDO($database) {
		if (is_null(self::$_db)) {
			new self($database);
		}
		return self::$_db;
	}
}

class RecordModel {
	private $_dbHandler;

	private $_fields = array();
	private $_tableReference = "";
	private $_whereCond = "";
	private $_orderByClause = "";
	private $_limit = "";
	private $_offset = "";
	private $_primaryKeyName = "";

	public function __construct($database, $table_reference) {
		$this->_dbHandler = DB::getPDO($database);
		$this->_tableReference = $table_reference;
	}

	public function create($record) {
		$fields = implode(",", array_keys($record));
		$params = array();
		foreach ($record as $key => $value) {
			$params[":$key"] = $value;
		}
		$named_params = implode(",", array_keys($params));

		$sql = "INSERT INTO {$this->_tableReference}($fields) VALUES($named_params)";
		try {
			$ps = $this->_dbHandler->prepare($sql);
			$ps->execute($params);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function read() {
		if (is_array($this->_fields) && count($this->_fields) > 0) {
			$fields = implode(",", $this->_fields);
		} else {
			$fields = "*";
		}

		$where_clause = "1 = 1";
		if (is_array($this->_whereCond) && count($this->_whereCond) > 0) {
			$where_clause = implode(" AND ", array_keys($this->_whereCond));
		}

		$sql = array();
		array_push($sql, "SELECT", $fields, "FROM", $this->_tableReference, "WHERE", $where_clause);

		if ($this->_orderByClause !== "") {
			array_push($sql, "ORDER BY", $this->_orderByClause);
		}

		if ($this->_limit !== "" && $this->_offset !== "") {
			array_push($sql, "LIMIT", $this->_limit, "OFFSET", $this->_offset);
		}

		try {
			$ps = $this->_dbHandler->prepare(implode(" ", $sql));
			$ps->execute(array_values($this->_whereCond));
			return $ps->fetchAll(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function initReadSQL($fields, $where_cond = "", $table_reference = "", $order_by_clause = "", $limit = "", $offset = "") {
		$this->_fields = $fields;
		if ($where_cond !== "") {
			$this->_whereCond = $where_cond;
		}
		if ($table_reference !== "") {
			$this->_tableReference = $table_reference;
		}
		$this->_orderByClause = $order_by_clause;
		$this->_limit = $limit;
		$this->_offset = $offset;
	}

	public function update($record, $where_cond) {
		$set_clause = $params = array();
		foreach ($record as $key => $value) {
			array_push($set_clause, "$key=?");
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
			$ps->execute($params);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}

class TblArticle extends RecordModel {
	public function __construct() {
		parent::__construct("dcviewSH", "tblArticle");
	}
}

class TblReply extends RecordModel {
	public function __construct() {
		parent::__construct("dcviewSH", "tblReply");
	}
}

class TblReport extends RecordModel {
	public function __construct() {
		parent::__construct("dcviewSH", "tblReport");
	}
}

class TblSHMainCategory extends RecordModel {
	public function __construct() {
		parent::__construct("dcviewSH", "tblSHMainCategory");
	}
}

class TblSHSubCategory extends RecordModel {
	public function __construct() {
		parent::__construct("dcviewSH", "tblSHSubCategory");
	}
}
?>
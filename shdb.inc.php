<?php
class DB {
	private static $_db;

	private function __construct() {
		try {
			self::$_db = new PDO("mysql:host=localhost;dbname=dcview;charset=UTF8", "root", "9999");
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
	private $_fields = array();
	private $_tableReference = "";
	private $_whereCond = "";
	private $_orderByClause = "";
	private $_limit = "";
	private $_offset = "";
	private $_primaryKeyName = "";

	public function __construct($table_name) {
		$this->_tableReference = $table_name;
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
			$ps = DB::getPDO()->prepare($sql);
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
			$ps = DB::getPDO()->prepare(implode(" ", $sql));
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
			$ps = db::getPDO()->prepare(implode(" ", $sql));
			$ps->execute($params);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}

class TblArticle extends RecordModel {
	public function __construct() {
		parent::__construct("tblArticle");
	}
}

class TblReply extends RecordModel {
	public function __construct() {
		parent::__construct("tblReply");
	}
}

class TblReport extends RecordModel {
	public function __construct() {
		parent::__construct("tblReport");
	}
}

class TblSHMainCategory extends RecordModel {
	public function __construct() {
		parent::__construct("tblSHMainCategory");
	}
}

class TblSHSubCategory extends RecordModel {
	public function __construct() {
		parent::__construct("tblSHSubCategory");
	}
}
?>
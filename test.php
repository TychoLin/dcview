<?php
class DB {
	private static $_db;

	private function __construct() {
		try {
			self::$_db = new PDO('mysql:host=localhost;dbname=dcview', 'tycho', '0731');
			self::$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo 'Connection failed: '.$e->getMessage();
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
	private $_tableName = '';
	private $_primaryKeyName = '';

	public function __construct($tableName, $primaryKeyName) {
		$this->_tableName = $tableName;
		$this->_primaryKeyName = $primaryKeyName;
	}

	public function create($record) {
		$fields = implode(',', array_keys($record));
		$params = array();
		foreach ($record as $k => $v) {
			$params[":$k"] = $v;
		}
		$named_params = implode(',', array_keys($params));

		try {
			$ps = DB::getPDO()->prepare("INSERT INTO {$this->_tableName}($fields) VALUES($named_params)");
			$ps->execute($params);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function read($id = -1, $limit = '', $offset = '') {
		$cond = '';
		if ($id != -1)
			$cond = " WHERE {$this->_primaryKeyName}=".(int)$id;
		if (($limit !== '') && ($offset !== '')) {
			$cond = " LIMIT $limit OFFSET $offset";
		}

		$sql = "SELECT  FROM {$this->_tableName}".$cond;
		try {
			$ps = db::getPDO()->query($sql);
			return $ps->fetchAll(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			echo $e->getMessage();
		
	}
}

class tblArticle extends RecordModel {
	public function __construct() {
		parent::__construct('tblArticle', 'article_id');
	}
}

class test {
	public $test = 'hello world';

	public function test() {
		echo "{this->test}";
	}
}

$t = test();
$t->test();
?>
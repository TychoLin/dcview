<?php
class DB {
	private static $_db;

	private function __construct() {
		try {
			self::$_db = new PDO('mysql:host=localhost;dbname=dcview', 'root', '9999');
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

		$sql = "INSERT INTO {$this->_tableName}($fields) VALUES($named_params)";
		try {
			$ps = DB::getPDO()->prepare($sql);
			$ps->execute($params);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function read($cond, $limit = '', $offset = '') {
		$cond_clause = '';
		if (is_array($cond) && count($cond) > 0) {
			$cond_clause = 'WHERE '.implode(' AND ', array_keys($cond));
		}

		$limit_clause = '';
		if ($limit !== '' && $offset !== '') {
			$limit = (int)$limit;
			$offset = (int)$offset;
			$limit_clause = "LIMIT $limit OFFSET $offset";
		}

		$sql = "SELECT * FROM {$this->_tableName} $cond_clause $limit_clause";
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
		parent::__construct('tblArticle', 'article_id');
	}
}

$ta = new TblArticle();

/*
for ($i = 0; $i < 100; $i++) {
	$record = array(
		"user_id" => 1,
		"category_id" => 1,
		"article_title" => "this is article title",
		"article_content" => "this is article content",
		"article_sh_trade_status" => 1,
		"article_sh_price" => 10000,
		"article_sh_area" => 1,
		"article_create_time" => date('Y-m-d', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013))),
		"article_update_time" => date('Y-m-d', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013))),
	);

	$ta->create($record);
}
*/
$d1 = date('Y-m-d H:i:s', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013)));
$d2 = date('Y-m-d H:i:s', mktime(0, 0, 0, mt_rand(1, 12), mt_rand(1, 20), mt_rand(2010, 2013)));
$cond = array(
	"article_id > ?" => 10,
	"article_id < ?" => 60,
	"article_create_time > ?" => $d1,
	"article_update_time > ?" => $d2,
);

var_dump($ta->read($cond));
?>
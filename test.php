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

class tblArticle {
	public function insert($record) {
		$fields = implode(',', array_keys($record));
		$params = array();
		foreach ($record as $k => $v) {
			$params[":$k"] = $v;
		}
		$named_params = implode(',', array_keys($params));
		try {
			$ps = DB::getPDO()->prepare("INSERT INTO user($fields) VALUES($named_params)");
			$ps->execute($params);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}
?>
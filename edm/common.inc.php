<?php
require_once("../shdb.inc.php");

function get_path($src) {
	if (empty($src)) {
		return "";
	}

	$search = "http://".str_replace(basename($_SERVER["PHP_SELF"]), "", $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]);
	if (preg_match("|$search|", $src) == 1) {
		return str_replace($search, "", $src);
	} else {
		return $search.$src;
	}
}

class DcviewEdmRecordModel extends RecordModel {
	public function __construct($table_reference) {
		parent::__construct("dcviewEdm", $table_reference);
	}
}

class TblEdm extends DcviewEdmRecordModel {
	public function __construct() {
		parent::__construct("tblEdm");
	}
}

class TblEdmInfo extends DcviewEdmRecordModel {
	public function __construct() {
		parent::__construct("tblEdmInfo");
	}
}
?>
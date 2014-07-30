<?php
define("DOC_ROOT", realpath(dirname(__FILE__)));
define("EDM_DIR_PATH", "upload/edm");
define("EDM_URL_PATH", "http://".str_replace(basename($_SERVER["PHP_SELF"]), "", $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]));

mb_internal_encoding("UTF-8");

require_once("../shdb.inc.php");

function get_path($src) {
	if (empty($src)) {
		return "";
	}

	$search = EDM_URL_PATH;
	if (preg_match("|$search|", $src) == 1) {
		return str_replace($search, "", $src);
	} else {
		return "$search/$src";
	}
}

function get_edm_dir_path($publish_date, $absolute = false) {
	$tmp = explode("-", $publish_date);
	$publish_year = $tmp[0];
	$publish_month = $tmp[1];
	$publish_day = $tmp[2];
	$some_edm_dirname = "/$publish_year/$publish_month/$publish_year$publish_month$publish_day";

	if ($absolute) {
		return DOC_ROOT."/".EDM_DIR_PATH.$some_edm_dirname;
	} else {
		return EDM_DIR_PATH.$some_edm_dirname;
	}
}

function limit_str($str, $length) {
	if (mb_strlen($str) > $length) {
		return mb_substr($str, 0, $length)."...";
	} else {
		return $str;
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
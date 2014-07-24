<?php
require_once("../shdb.inc.php");

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
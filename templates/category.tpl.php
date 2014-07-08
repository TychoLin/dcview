<div class="block01">

<!-- Select -->
<label for="main_category">主類別:</label>
<select id="main_category" name="main_category">
<?php
$tsmc = new TblSHMainCategory();
$fields = array("sh_main_category_id", "sh_main_category_name");
$sql_params = array("fields" => $fields);
$main_category_list = $tsmc->read($tsmc->generateReadSQL($sql_params));
foreach ($main_category_list as $value) {
echo <<<EOT
<option value="{$value["sh_main_category_id"]}">{$value["sh_main_category_name"]}</option>
EOT;
}
?>
</select>

<!-- Select -->
<label for="sub_category">類別:</label>
<select id="sub_category" name="sub_category">
</select>
</div>
<div style="display: none;">
<select id="sub_category_1">
<option value="0">全部</option>
<?php
$tssc = new TblSHSubCategory();
$fields = array("sh_sub_category_id", "sh_sub_category_name");
$sql_params = array("fields" => $fields, "where_cond" => array("sh_main_category_id = ?" => 1));
$sub_category_list = $tssc->read($tssc->generateReadSQL($sql_params));
foreach ($sub_category_list as $value) {
echo <<<EOT
<option value="{$value["sh_sub_category_id"]}">{$value["sh_sub_category_name"]}</option>
EOT;
}
?>
</select>
<select id="sub_category_2">
<option value="0">全部</option>
<?php
$sql_params = array("fields" => $fields, "where_cond" => array("sh_main_category_id = ?" => 2));
$sub_category_list = $tssc->read($tssc->generateReadSQL($sql_params));
foreach ($sub_category_list as $value) {
echo <<<EOT
<option value="{$value["sh_sub_category_id"]}">{$value["sh_sub_category_name"]}</option>
EOT;
}
?>
</select>
<select id="sub_category_3">
<option value="0">全部</option>
<?php
$sql_params = array("fields" => $fields, "where_cond" => array("sh_main_category_id = ?" => 3));
$sub_category_list = $tssc->read($tssc->generateReadSQL($sql_params));
foreach ($sub_category_list as $value) {
echo <<<EOT
<option value="{$value["sh_sub_category_id"]}">{$value["sh_sub_category_name"]}</option>
EOT;
}
?>
</select>
</div>
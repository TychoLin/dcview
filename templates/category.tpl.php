<div class="block01">

<!-- Select -->
<label for="main_category">主類別:</label>
<select id="main_category" name="main_category">
<?php
$tsmc = new TblSHMainCategory();
$fields = array("sh_main_category_id", "sh_main_category_name");
$main_category_list = $tsmc->read($fields);
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
<?php
$tssc = new TblSHSubCategory();
$fields = array("sh_sub_category_id", "sh_sub_category_name");
$sub_category_list = $tssc->read($fields, array("sh_main_category_id = ?" => 1));
foreach ($sub_category_list as $value) {
echo <<<EOT
<option value="{$value["sh_sub_category_id"]}">{$value["sh_sub_category_name"]}</option>
EOT;
}
?>
</select>
<select id="sub_category_2">
<?php
$sub_category_list = $tssc->read($fields, array("sh_main_category_id = ?" => 2));
foreach ($sub_category_list as $value) {
echo <<<EOT
<option value="{$value["sh_sub_category_id"]}">{$value["sh_sub_category_name"]}</option>
EOT;
}
?>
</select>
<select id="sub_category_3">
<?php
$sub_category_list = $tssc->read($fields, array("sh_main_category_id = ?" => 3));
foreach ($sub_category_list as $value) {
echo <<<EOT
<option value="{$value["sh_sub_category_id"]}">{$value["sh_sub_category_name"]}</option>
EOT;
}
?>
</select>
</div>
<?php
require_once("common.inc.php");

define("LIMIT", 5);
$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$page = ($page > 0) ? $page : 1;
$offset = LIMIT * ($page - 1);

$te = new TblEdm();
$sql_params = array(
	"fields" => array("edm_id", "edm_volume", "edm_title", "edm_publish_date", "edm_thumbnail_path1", "edm_thumbnail_path2"),
	"order_by_clause" => "edm_publish_date DESC",
	"limit" => LIMIT,
	"offset" => $offset,
);
$edm_list = $te->read($te->generateReadSQL($sql_params));

$sql_params = array(
	"fields" => array("COUNT(*) AS total_record_number"),
);
$total_record_number = $te->read($te->generateReadSQL($sql_params));
$total_record_number = $total_record_number[0]["total_record_number"];
$total_page_number = ceil($total_record_number / LIMIT);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/manage.css">
	<!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	<script data-main="js/app" src="js/lib/require.js"></script>
	<!-- <script src="js/jquery.magnific-popup.js"></script> -->
</head>
<body>
<div id="edm_list" class="layout-content">
	<nav>
		<button type="button" id="create_edm_button">new</button>
		<select id="page" name="page">
		<?php
		for ($i = 1; $i <= $total_page_number; $i++) {
			echo "<option value=\"$i\">$i</option>";
		}
		?>
		</select>
		<button type="button" id="delete_edm_button" style="display: none;">delete</button>
	</nav>
	<table>
		<tr>
			<th><input type="checkbox"></th>
			<th>volume</th>
			<th>title</th>
			<th>publish date</th>
			<th>big image</th>
			<th>smaill image</th>
		</tr>
		<?php foreach($edm_list as $value) { ?>
		<tr>
			<td><input type="checkbox" value="<?php echo $value["edm_id"]; ?>"></td>
			<td><?php echo $value["edm_volume"]; ?></td>
			<td edm_id="<?php echo $value["edm_id"]; ?>" style="width: 40%;"><?php echo $value["edm_title"]; ?></td>
			<td><?php echo $value["edm_publish_date"]; ?></td>
			<td><div class="thumbnail"><img src="<?php echo get_path($value["edm_thumbnail_path1"]); ?>"></div></td>
			<td><div class="thumbnail"><img src="<?php echo get_path($value["edm_thumbnail_path2"]); ?>"></div></td>
		</tr>
		<?php } ?>
	</table>
</div>
<div id="edm_operation" class="layout-content">
	<nav>
		<button type="button" name="close">close</button>
	</nav>
	<div id="edm_data">
		<form id="edm_form">
			<!-- edm tempate here -->
		</form>
		<div id="edm_info_type1">
			<h2>焦點新聞</h2>
			<button type="button" name="save" class="edm_info">save</button>
			<button type="button" name="new" class="edm_info">new</button>
			<div class="edm_info_forms"></div>
		</div>
		<div id="edm_info_type2">
			<h2>新聞追蹤</h2>
			<button type="button" name="save" class="edm_info">save</button>
			<button type="button" name="new" class="edm_info">new</button>
			<div class="edm_info_forms"></div>
		</div>
		<div id="edm_info_type3">
			<h2>達人部落精選</h2>
			<button type="button" name="save" class="edm_info">save</button>
			<button type="button" name="new" class="edm_info">new</button>
			<div class="edm_info_forms"></div>
		</div>
		<div id="edm_info_type4">
			<h2>攝影好讀</h2>
			<button type="button" name="save" class="edm_info">save</button>
			<button type="button" name="new" class="edm_info">new</button>
			<div class="edm_info_forms"></div>
		</div>
		<div id="edm_info_type5">
			<h2>本週作品精選</h2>
			<button type="button" name="save" class="edm_info">save</button>
			<button type="button" name="new" class="edm_info">new</button>
			<div class="edm_info_forms"></div>
		</div>
		<div id="edm_info_type6">
			<h2>活動快訊</h2>
			<button type="button" name="save" class="edm_info">save</button>
			<button type="button" name="new" class="edm_info">new</button>
			<div class="edm_info_forms"></div>
		</div>
		<div id="edm_info_type7">
			<h2>資訊情報</h2>
			<button type="button" name="save" class="edm_info">save</button>
			<button type="button" name="new" class="edm_info">new</button>
			<div class="edm_info_forms"></div>
		</div>
	</div>
	<div id="image_upload_zone">
		<p style="float: right;"><select></select></p>
		<p><span id="upload_progress_bar"></span><input type="file" id="upload_imgs" name="upload_imgs[]" accept="image/*" multiple></p>
		<div id="image_empty_zone">drop images below here to delete</div>
		<div class="gallery"></div>
	</div>
</div>
<div class="edm_template_zone">
	<form id="edm_reuse_form">
		<h1>edm</h1>
		<button type="button" name="save">save</button>
		<p>title: <input type="text" name="title" value="{edm_title}"></p>
		<p>volume: <input type="number" name="volume" value="{edm_volume}"></p>
		<p>publish date: <input type="date" name="publish_date" value="{edm_publish_date}"></p>
		<p>summary: <textarea name="summary" rows="10" cols="50">{edm_summary}</textarea></p>
		<div class="dnd_zone">
			<div>drag images below here after click save button<img src="{edm_thumbnail_path1}"></div>
			<div>drag images below here after click save button<img src="{edm_thumbnail_path2}"></div>
		</div>
		<input type="hidden" name="edm_id" value="{edm_id}">
	</form>
	<form id="edm_info_type1_form">
		<button type="button" name="delete" style="float: right;">X</button>
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>summary: <textarea name="summary" rows="10" cols="50">{edm_info_summary}</textarea></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<div class="dnd_zone">
			<div>drag images below here after click save button<img src="{edm_info_thumbnail_path}"></div>
		</div>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
	<form id="edm_info_type2_form">
		<button type="button" name="delete" style="float: right;">X</button>
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
	<form id="edm_info_type3_form">
		<button type="button" name="delete" style="float: right;">X</button>
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>author: <input type="text" name="author" value="{edm_info_author}"></p>
		<p>summary: <textarea name="summary" rows="10" cols="50">{edm_info_summary}</textarea></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<div class="dnd_zone">
			<div>drag images below here after click save button<img src="{edm_info_thumbnail_path}"></div>
		</div>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
	<form id="edm_info_type4_form">
		<button type="button" name="delete" style="float: right;">X</button>
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>author: <input type="text" name="author" value="{edm_info_author}"></p>
		<p>summary: <textarea name="summary" rows="10" cols="50">{edm_info_summary}</textarea></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<div class="dnd_zone">
			<div>drag images below here after click save button<img src="{edm_info_thumbnail_path}"></div>
		</div>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
	<form id="edm_info_type5_form">
		<button type="button" name="delete" style="float: right;">X</button>
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>author: <input type="text" name="author" value="{edm_info_author}"></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<div class="dnd_zone">
			<div>drag images below here after click save button<img src="{edm_info_thumbnail_path}"></div>
		</div>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
	<form id="edm_info_type6_form">
		<button type="button" name="delete" style="float: right;">X</button>
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>author: <input type="text" name="author" value="{edm_info_author}"></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<div class="dnd_zone">
			<div>drag images below here after click save button<img src="{edm_info_thumbnail_path}"></div>
		</div>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
	<form id="edm_info_type7_form">
		<button type="button" name="delete" style="float: right;">X</button>
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
</div>
</body>
</html>
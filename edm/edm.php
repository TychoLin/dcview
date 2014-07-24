﻿<?php
require_once("common.inc.php");

define("LIMIT", 5);
$page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
$page = ($page > 0) ? $page : 1;
$offset = LIMIT * ($page - 1);

$te = new TblEdm();
$sql_params = array(
	"fields" => array("edm_id", "edm_volume", "edm_title", "edm_publish_date", "edm_thumbnail_path1", "edm_thumbnail_path2"),
	"order_by_clause" => "edm_create_time DESC",
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
	<link rel="stylesheet" href="css/edm.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
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
	</nav>
	<table>
		<tr>
			<th>volume</th>
			<th>title</th>
			<th>publish date</th>
			<th>big image</th>
			<th>smaill image</th>
		</tr>
		<?php foreach($edm_list as $value) { ?>
		<tr edm_id="<?php echo $value["edm_id"]; ?>">
			<td><?php echo $value["edm_volume"]; ?></td>
			<td style="width: 40%;"><?php echo $value["edm_title"]; ?></td>
			<td><?php echo $value["edm_publish_date"]; ?></td>
			<td><img src="<?php echo $value["edm_thumbnail_path1"]; ?>"></td>
			<td><img src="<?php echo $value["edm_thumbnail_path2"]; ?>"></td>
		</tr>
		<?php } ?>
	</table>
</div>
<script type="text/javascript">
function nano(template, data) {
	return template.replace(/\{([\w\.]*)\}/g, function(str, key) {
		var keys = key.split("."), v = data[keys.shift()];
		for (var i = 0, l = keys.length; i < l; i++)
			v = v[keys[i]];
		return (typeof v !== "undefined" && v !== null) ? v : "";
	});
}

$(function () {
	// init page select
	$.getScript("js/URI.js", function () {
		var search = URI.parseQuery(window.location.search);
		for (var name in search) {
			$("#" + name + " option[value=" + search[name] + "]").prop("selected", true);
		}
	});

	$("#page").change(function () {
		var uri = new URI();
		uri.setQuery({page: $("option:selected", this).val()});
		window.location = uri.href();
	});

	$("#edm_list table tr[edm_id]").click(function () {
		$.get("handle_edm_ajax.php", {edm_id: $(this).attr("edm_id")}, function (data) {
			$("#edm_form").html(nano($("#edm_form").html(), data.edm));
			$("#edm_form").data("edm_id", data.edm.edm_id);
			$("#edm_list").hide();
			$("#edm_operation").show();
		});
	});
});
</script>
<div id="edm_operation" class="layout-content">
	<nav>
		<button type="button" name="close">close</button>
	</nav>
	<form id="edm_form">
		<h1>edm</h1>
		<button type="button" name="save">save</button>
		<p>title: <input type="text" name="title" value="{edm_title}"></p>
		<p>volume: <input type="number" name="volume" value="{edm_volume}"></p>
		<p>publish date: <input type="date" name="publish_date" value="{edm_publish_date}"></p>
		<div class="dnd_zone">
			<div>drag images below here</div>
			<div>drag images below here</div>
		</div>
		<input type="hidden" name="edm_id" value="{edm_id}">
	</form>
	<div id="edm_info_type1">
		<h2>焦點新聞</h2>
		<button type="button" name="save" class="edm_info">save</button>
		<button type="button" name="new" class="edm_info">new</button>
	</div>
	<div id="edm_info_type2">
		<h2>新聞追蹤</h2>
		<button type="button" name="save" class="edm_info">save</button>
		<button type="button" name="new" class="edm_info">new</button>
	</div>
	<div id="edm_info_type3">
		<h2>達人部落精選</h2>
		<button type="button" name="save" class="edm_info">save</button>
		<button type="button" name="new" class="edm_info">new</button>
	</div>
	<div id="image_upload_zone">
		<p><input type="file" id="upload_imgs" name="upload_imgs[]" accept="image/*" multiple></p>
		<div class="gallery"></div>
	</div>
	<div class="edm_info_sample_form">
		<form id="edm_info_type1_form">
			<p>title: <input type="text" name="title"></p>
			<p>summary: <textarea name="summary" rows="10" cols="50"></textarea></p>
			<p>url: <input type="text" name="url"></p>
			<div class="dnd_zone">
				<div>drag images below here</div>
			</div>
			<input type="hidden" name="edm_info_id" value="">
		</form>
		<form id="edm_info_type2_form">
			<p>title: <input type="text" name="title"></p>
			<p>url: <input type="text" name="url"></p>
			<input type="hidden" name="edm_info_id" value="">
		</form>
		<form id="edm_info_type3_form">
			<p>title: <input type="text" name="title"></p>
			<p>author: <input type="text" name="author"></p>
			<p>summary: <textarea name="summary" rows="10" cols="50"></textarea></p>
			<p>url: <input type="text" name="url"></p>
			<div class="dnd_zone">
				<div>drag images below here</div>
			</div>
			<input type="hidden" name="edm_info_id" value="">
		</form>
	</div>
</div>
<script type="text/javascript">
$(function () {
	$("#create_edm_button").click(function () {
		$("#edm_list").hide();
		$("#edm_operation").show();
	});

	$("#edm_operation nav button[name='close']").click(function () {
		$("#edm_operation").hide();
		$("#edm_list").show();
	});

	$("#edm_form").on("click", "button[name='save']", function () {
		// validate fields
		// if (!$("edm_form").valid()) {
		// 	return;
		// }

		var post_data = {};
		var hidden_elem = $(this).siblings("input[name='edm_id']");
		if (hidden_elem.val() == "") {
			post_data.action = "create";
		} else {
			post_data.action = "update";
		}

		jQuery.each($("#edm_form").serializeArray(), function (index, elem) {
			post_data[elem.name] = elem.value;
		});

		console.log(post_data);
		$.post("handle_edm_ajax.php", post_data, function (data) {
			console.log(data);
			hidden_elem.val(data.edm_id);
			$("#edm_form").data("edm_id", data.edm_id);
		});
	});

	$("#edm_form").validate({
		rules: {
			title: {
				required: true
			},
		},
		messages: {
			title: {
				required: "必填欄位"
			},
		}
	});

	$("#upload_imgs").change(function (event) {
		if ($("#edm_form").data("edm_id") === undefined) {
			return;
		}

		var form_data = new FormData();

		var files = $("#upload_imgs").prop("files");
		$(files).each(function (index, elem) {
			if (/image.*/.test(elem.type)) {
				form_data.append("upload_imgs[]", elem);
			}
		});

		form_data.append("edm_id", $("#edm_form").data("edm_id"));

		$.ajax({
			type: "POST",
			url: "handle_upload_ajax.php",
			data: form_data,
			processData: false,
			contentType: false,
			xhr: function () {
				var xhr = new window.XMLHttpRequest();
				//Upload progress
				xhr.upload.addEventListener("progress", function (evt) {
					if (evt.lengthComputable) {
						var percentComplete = (evt.loaded / evt.total) * 100;
						//Do something with upload progress
						console.log(percentComplete);
					}
				}, false);
				//Download progress
				xhr.addEventListener("progress", function (evt) {
					if (evt.lengthComputable) {
						var percentComplete = (evt.loaded / evt.total) * 100;
						//Do something with download progress
						console.log(percentComplete);
					}
				}, false);
				return xhr;
			},
			success: function (urls) {
				console.log(urls);
				var count = 0;
				$(urls).each(function (index, elem) {
					var img = $("<img>");
					img.load(function () {
						var width = img.prop("width");
						var height = img.prop("height");
						if (width > 300 || height > 300) {
							if (width > height) {
								var resize_ratio = 300 / width;
							} else {
								var resize_ratio = 300 / height;
							}

							img.width(width * resize_ratio);
							img.height(height * resize_ratio);

							count++;
							if (count == $(urls).length) {
								$("#image_upload_zone .gallery").show();
							}
						}
					});
					img.prop("src", elem);
					$("<div>").append(img).draggable({revert: true}).appendTo($("#image_upload_zone .gallery"));
				});
			}
		});
	});

	$(".dnd_zone").on("drop", "div", function (event) {
		console.log(event);
		$(event.target).children("img").remove();
		$(event.toElement).clone().appendTo($(event.target));

		var post_data = {edm_id: $("#edm_form").data("edm_id")};
		var index = $(".dnd_zone div").index($(event.target));
		if (index == 0) {
			post_data.edm_thumbnail_path1 = $(event.toElement).prop("src");
		} else {
			post_data.edm_thumbnail_path2 = $(event.toElement).prop("src");
		}

		// $.post("update_edm_ajax.php", post_data, function (data) {
		// 	console.log(data);
		// });
	});

	$("button[name='save']").filter(".edm_info").click(function () {
		if ($("#edm_form").data("edm_id") === undefined) {
			return;
		}

		var post_data = {};
		var id = $(this).parent().prop("id");
		post_data.type = id.replace("edm_info_type", "");
		post_data.edm_id = $("#edm_form").data("edm_id");

		jQuery.each($("#" + id + " form"), function (index, elem) {
			var hidden_elem = $(elem).children("input[name='edm_info_id']");
			if (hidden_elem.val() == "") {
				post_data.action = "create";
			} else {
				post_data.action = "update";
			}

			jQuery.each($(elem).serializeArray(), function (index, elem) {
				post_data[elem.name] = elem.value;
			});

			console.log(post_data);
			$.post("handle_edm_info_ajax.php", post_data, function (data) {
				console.log(data);
				hidden_elem.val(data.edm_info_id);
			});
		});
	});

	$("button[name='new']").filter(".edm_info").click(function () {
		var id = $(this).parent().prop("id");
		$("#" + id + "_form").clone().removeAttr("id").appendTo($("#" + id));
	});
});
</script>
</body>
</html>
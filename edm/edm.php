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
			// init edm data
			console.log(data);
			$("#edm_operation").find("form").empty();
			$("#edm_form").html(nano($("#edm_reuse_form").html(), data.edm));
			$("#edm_form").data("edm_id", data.edm.edm_id);
			$(data.edm_infos).each(function (index, elem) {
				var type = elem.edm_info_type;
				$("#edm_info_type" + type).append(nano($("#edm_info_type" + type + "_form").clone().removeAttr("id")[0].outerHTML, elem));
			});
			$("#image_upload_zone .gallery").empty();
			create_draggable_images(data.urls);

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
		<!-- edm tempate here -->
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
</div>
<div class="edm_template_zone">
	<form id="edm_reuse_form">
		<h1>edm</h1>
		<button type="button" name="save">save</button>
		<p>title: <input type="text" name="title" value="{edm_title}"></p>
		<p>volume: <input type="number" name="volume" value="{edm_volume}"></p>
		<p>publish date: <input type="date" name="publish_date" value="{edm_publish_date}"></p>
		<div class="dnd_zone">
			<div>drag images below here<img src="{edm_thumbnail_path1}"></div>
			<div>drag images below here<img src="{edm_thumbnail_path2}"></div>
		</div>
		<input type="hidden" name="edm_id" value="{edm_id}">
	</form>
	<form id="edm_info_type1_form">
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>summary: <textarea name="summary" rows="10" cols="50">{edm_info_summary}</textarea></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<div class="dnd_zone">
			<div>drag images below here<img src="{edm_info_thumbnail_path}"></div>
		</div>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
	<form id="edm_info_type2_form">
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
	<form id="edm_info_type3_form">
		<p>title: <input type="text" name="title" value="{edm_info_title}"></p>
		<p>author: <input type="text" name="author" value="{edm_info_author}"></p>
		<p>summary: <textarea name="summary" rows="10" cols="50">{edm_info_summary}</textarea></p>
		<p>url: <input type="text" name="url" value="{edm_info_url}"></p>
		<div class="dnd_zone">
			<div>drag images below here<img src="{edm_info_thumbnail_path}"></div>
		</div>
		<input type="hidden" name="edm_info_id" value="{edm_info_id}">
	</form>
</div>
<script type="text/javascript">
$.fn.clearForm = function () {
	return this.each(function () {
		var type = this.type, tag = this.tagName.toLowerCase();
		if (tag == 'form')
			return $(':input',this).clearForm();
		if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'hidden' || type == 'number' || type == 'date')
			this.value = '';
		else if (type == 'checkbox' || type == 'radio')
			this.checked = false;
		else if (tag == 'select')
			this.selectedIndex = -1;
	});
};

function create_draggable_images(urls) {
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

$(function () {
	$("#create_edm_button").click(function () {
		// init new edm
		$("#edm_operation").find("form").empty();
		$("#edm_form").removeData("edm_id");
		$("#edm_reuse_form").clone().clearForm().contents().appendTo($("#edm_form"));
		$("#edm_form img").prop("src", "");
		$("#image_upload_zone .gallery").empty();

		$("#edm_list").hide();
		$("#edm_operation").show();
	});

	$("#edm_operation nav button[name='close']").click(function () {
		window.location = "edm.php";
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
		console.log(event);
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
			success: create_draggable_images
		});
	});

	$("#image_upload_zone").on("mouseenter", function () {
		$(".dnd_zone div").droppable({
			drop: function (event) {
				console.log(event);
				if ($("#edm_form").data("edm_id") === undefined) {
					return;
				}

				var post_data = {edm_id: $("#edm_form").data("edm_id")};

				if ($(event.target).parents("form").is("[id='edm_form']")) {
					post_data.action = "update";
					var index = $(".dnd_zone div").index($(event.target));
					if (index == 0) {
						post_data.thumbnail_path1 = $(event.toElement).prop("src");
					} else {
						post_data.thumbnail_path2 = $(event.toElement).prop("src");
					}

					$.post("handle_edm_ajax.php", post_data, function (data) {
						console.log(data);
					});
				} else {
					var id = $(event.target).parents("div[id^='edm_info_type']").prop("id");
					post_data.type = id.replace("edm_info_type", "");
					var hidden_elem = $(event.target).parents("form").children("input[name='edm_info_id']");
					if (hidden_elem.val() != "") {
						post_data.action = "update";
						post_data.edm_info_id = hidden_elem.val();
						post_data.thumbnail_path = $(event.toElement).prop("src");

						$.post("handle_edm_info_ajax.php", post_data, function (data) {
							console.log(data);
						});
					}
				}

				console.log(post_data);
				$(event.target).children("img").remove();
				$(event.toElement).clone().appendTo($(event.target));
			}
		});
	});

	$("button[name='save']").filter(".edm_info").click(function () {
		console.log($(this));
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
		$("#" + id + "_form").clone().removeAttr("id").clearForm().appendTo($("#" + id)).find("img").prop("src", "");
	});
});
</script>
</body>
</html>
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
	</nav>
</div>
<div id="edm_operation" class="layout-content">
	<nav>
		<button type="button" id="save_edm_button">save</button>
		<button type="button" id="close_edm_button">close</button>
	</nav>
	<form id="edm_form">
		<p>title: <input type="text" id="title" name="title"></p>
		<p>volume: <input type="number" id="volume" name="volume"></p>
		<p>publish date: <input type="date" id="publish_date" name="publish_date"></p>
		<p><input type="file" id="upload_imgs" name="upload_imgs[]" accept="image/*" multiple></p>
		<div id="edm_thumbnail_setup">
			<div class="dnd_zone">
				<div>drag images below here</div>
				<div>drag images below here</div>
			</div>
			<div class="gallery"></div>
			<div style="clear: both;"></div>
		</div>
	</form>
</div>
<script type="text/javascript">
$(function () {
	$("#create_edm_button").click(function () {
		$("#edm_list").hide();
		$("#edm_operation").show();
	});

	$("#close_edm_button").click(function () {
		$("#edm_operation").hide();
		$("#edm_list").show();
	});

	$("#save_edm_button").click(function () {
		var form_data = new FormData();

		var files = $("#upload_imgs").prop("files");
		$(files).each(function (index, elem) {
			if (/image.*/.test(elem.type)) {
				form_data.append("upload_imgs[]", elem);
			}
		});

		var post_data = $("#edm_form").serializeArray();
		$(post_data).each(function (index, elem) {
			form_data.append(elem.name, elem.value);
		});

		$.ajax({
			type: "POST",
			url: "handle_edm_ajax.php",
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
			success: function (data) {
				console.log(data);
				var count = 0;
				$(data.urls).each(function (index, elem) {
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
							if (count == $(data.urls).length) {
								$("#edm_thumbnail_setup .gallery").show();
							}
						}
					});
					img.prop("src", elem);
					$("<div>").append(img).draggable({revert: true}).appendTo($("#edm_thumbnail_setup .gallery"));
				});
			}
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
	});

	$(".dnd_zone div").droppable({
		drop: function (event) {
			console.log(event);
			$(event.target).children("img").remove();
			$(event.toElement).clone().appendTo($(event.target));
		}
	});
});
</script>
</body>
</html>
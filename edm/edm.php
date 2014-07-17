<?php

?>
<!DOCTYPE html>
<html>
<head>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<form id="edm_form" enctype="multipart/form-data" action="__URL__" method="POST">
	<p><input type="file" id="upload_imgs" name="upload_imgs[]" accept="image/*" multiple></p>
	<p>title: <input type="text" id="title" name="title"></p>
	<p>volume: <input type="number" id="volume" name="volume"></p>
	<p>publish date: <input type="date" id="publish_date" name="publish_date"></p>
	<p><button type="button" id="submit" name="submit">submit</button></p>
</form>
<script type="text/javascript">
$(function () {
	$("#submit").click(function () {
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
			}
		});
	});
});
$("#upload_imgs").change(function (event) {
});
</script>
</body>
</html>
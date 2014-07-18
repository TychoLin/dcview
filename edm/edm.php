<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/magnific-popup.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
</head>
<body>
<form id="edm_form" enctype="multipart/form-data" action="__URL__" method="POST">
	<p><input type="file" id="upload_imgs" name="upload_imgs[]" accept="image/*" multiple></p>
	<p>title: <input type="text" id="title" name="title"></p>
	<p>volume: <input type="number" id="volume" name="volume"></p>
	<p>publish date: <input type="date" id="publish_date" name="publish_date"></p>
	<p><button type="button" id="submit" name="submit">submit</button></p>
</form>
<div id="test-popup" class="mfp-hide">
	<img src="http://localhost:9999/dcview/edm/upload/edm/2014/07/20140719/edm_yiwLEv.jpg">
</div>
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
				data.forEach(function (elem) {
					var img = $("<img>");
					img.load(function () {
						console.log($(this).width());
						if (img.width() > 300 || img.height() > 300) {
							if (img.width() > img.height()) {
								var resize_ratio = 300 / img.width();
							} else {
								var resize_ratio = 300 / img.height();
							}

							console.log(resize_ratio);
							img.width(resize_ratio + "em");
							img.height(resize_ratio + "em");
						}
					});
					img.prop("src", elem).appendTo($("#test-popup"));
				});

				// $.magnificPopup.open({
				// 	items: {
				// 		src: "#test-popup"
				// 	},
				// 	type: "inline"
				// }, 0);
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
});
</script>
</body>
</html>
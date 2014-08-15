requirejs.config({
	"baseUrl": "js/lib",
	"paths": {
		"app": "../app",
		"jquery": "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min",
		"jquery-ui": "//code.jquery.com/ui/1.11.0/jquery-ui",
		"jquery.validate": "//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min"
	}
});

requirejs(["app/main"]);

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- JQUERY -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- FONT AWESSOME -->
	<script src="https://use.fontawesome.com/e8a42d7e14.js"></script>
	{{-- CSS --}}
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/resources/css/style.css?v={{time()}}">

	<!-- ========= -->
	<title>Работа монтажнику</title>
</head>
<body>
	<x-header/>
	{{$slot}}
	<x-footer/>
</body>
</html>
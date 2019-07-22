<!DOCTYPE html>
<html>
<head>
	<title>Vue js</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<br><br><br>
		<div class="container">
			<h1 class="text-center">{{ titulo }}</h1>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		Vue.component('menu-bar', {
			template: "#menu",
		});

		var app = new Vue({
			el: '#app',
			data: {
				titulo: "Framework VueJs!"
			}
		})
	</script>
</body>
</html>

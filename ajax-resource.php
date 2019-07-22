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
			<button @click.stop.prevent="getUsers()" class="btn btn-success">Alerta!</button>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		Vue.component('menu-bar', {
			template: "#menu",
		});


		var mixin = {
			created() {
				console.log('Mixin!');
			},
			methods: {
				getUsers(){
					// rotina Programar
					// rotina Localizar 
					console.log('Funciona!');
				}
			}
		}

		var app = new Vue({
			el: '#app',
			created() {
				console.log('VueJs!');
			},
			mixins: [mixin],
			data: {
				titulo: "Framework VueJs!",
			},
			methods: {

			}
		})
	</script>
</body>
</html>

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
			<div v-if="response.status == 'error'" class="alert alert-danger">{{ response.msg }}</div>
			<div v-if="loader.users" class="">Carregando Usuarios!</div>
			<ul>
				<li v-for='user in users'>{{ user.name }}</li>
			</ul>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript">
		Vue.component('menu-bar', {
			template: "#menu",
		});


		var mixin = {
			methods: {
				getUsers(){
					this.loader.users = true;
					var url = 'http://jsonplaceholder.typicode.com/users';
					var vm = this;

					axios.get(url)
						// Ajax, quando a consulta terminar usar uma ação .then()
						.then(function(retorno){
							vm.users = retorno.data;
						}, function(error){
							vm.response.status = "error";
						})
						// Quando o ajax terminar faca isso ...
						.finally(function(){
							vm.loader.users = false;
						});

					// this.$http.get(url)
					// 	// Ajax, quando a consulta terminar usar uma ação .then()
					// 	.then(function(retorno){
					// 		this.users = retorno.body;
					// 	}, function(error){
					// 		this.response.status = "error";
					// 		console.log(error);
					// 	})
					// 	// Quando o ajax terminar faca isso ...
					// 	.finally(function(){
					// 		this.loader.users = false;
					// 	});
				}
			}
		}

		var app = new Vue({
			el: '#app',

			mixins: [mixin],

			data: {
				titulo: "Framework VueJs!",
				users: [],
				loader: {
					users: false,
				},
				response: {
					msg: 'Erro ao conectar com API',
					status: '',
				}
			},
		})
	</script>
</body>
</html>

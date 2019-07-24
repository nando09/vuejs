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

			<component :is="movie">
				
			</component>

<!-- 			<transformers v-if="movie == 'transformers'">
				<h4 slot="title">TransFormes</h4>
			</transformers>
			<xmen v-if="movie == 'xmen'">
				<h4 slot="title">X-MEN</h4>
			</xmen> -->

			<div v-if="loader.users" class="">Carregando Usuarios!</div>
			<ul ref="users">
				<li v-for='(item, index) in users' :key="item.name">{{ item.name }} <a @click.prevent.stop="remove(index)">X</a></li>
			</ul>
		</div>
	</div>


	<template id="transformers">
		<div>
			<!-- <slot name="title"></slot> -->
			<h4 slot="title">TransFormes</h4>
			<ul>
				<li v-for="item in topNav">{{ item.label }}</li>
			</ul>
		</div>
	</template>

	<template id="xmen">
		<div>
			<!-- <slot name="title"></slot> -->
			<h4 slot="title">X-MEN</h4>
			<ul>
				<li v-for="item in topNav">
					<strong>Nome do Filme:</strong> {{ item.label }}
					<strong>Ano lançamento:</strong> {{ item.anoLancamento }}
				</li>
			</ul>
		</div>
	</template>

	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript">
		Vue.component('transformers', {
			template: "#transformers",
			data() {
				return {
					topNav: [
						{label: 'Optimus Prime'},
						{label: 'Bumble Bee'},
						{label: 'Megatron'}
					],
				}
			}
		});

		Vue.component('xmen', {
			template: "#xmen",
			data() {
				return {
					topNav: [
						{
							label: 'X-Men — O Filme',
							anoLancamento: '2000',
						},
						{
							label: 'X-Men 2 — United',
							anoLancamento: '2003',
						},
						{
							label: 'X-Men 3 — O Confronto Final',
							anoLancamento: '2006',
						},
						{
							label: 'X-Men — Origens Wolverine',
							anoLancamento: '2009',
						},
						{
							label: 'X-Men — Primeira Classe',
							anoLancamento: '2011',
						},
						{
							label: 'Wolverine: Imortal',
							anoLancamento: '2013',
						},
						{
							label: 'X-Men — Dias de um Futuro Esquecido',
							anoLancamento: '2014',
						},
						{
							label: 'Deadpool',
							anoLancamento: '2016',
						},
						{
							label: 'X-Men — Apocalypse',
							anoLancamento: '2016',
						},
						{
							label: 'Logan',
							anoLancamento: '2017',
						},
						{
							label: 'Deadpool 2',
							anoLancamento: '31 de maio, 2018',
						},
						{
							label: 'X-Men — Fênix Negra',
							anoLancamento: '1 de novembro, 2018',
						},
						{
							label: 'Novos Mutantes',
							anoLancamento: '22 de fevereiro, 2019',
						},
					],
				}
			}
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
				},

				remove(index){
					this.users.splice(index, 1);
				}
			}
		}

		var app = new Vue({
			el: '#app',

			mixins: [mixin],

			mounted() {
				console.log(this.$refs.users);
			},

			data: {
				titulo: "Framework VueJs!",
				users: [],
				movie: 'xmen',
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

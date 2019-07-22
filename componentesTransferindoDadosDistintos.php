<!DOCTYPE html>
<html>
<head>
	<title>Vue js</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<br><br><br><br><br>
		<div class="container">

			<input-form></input-form>

			<br>

			<my-list></my-list>

		</div>
	</div>

	<template id="form">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Título</h5>
				<div class="form-group">
					<label for=""></label>
					<input v-model="title"
						   type="text" class="form-control">
				</div>
				<button @click.stop.prevent="submit()" class="btn btn-primary">ENVIAR</button>
			</div>
		</div>
	</template>

	<template id="list">
		<ul class="list-group">
			<li v-for="item in list" class="list-group-item">{{ item.title }}</li>
		</ul>
	</template>

	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		Vue.component('input-form', {
			template: "#form",
			data() {
				return{
					title: '',
				}
			},
			methods: {
				submit(){
					// eventBus.$emit('submit', this.title);
					this.$eventHub.$emit('submit', this.title);
				}
			},
		});

		Vue.component('my-list', {
			template: "#list",
			created(){
				var vm = this;
				// eventBus.$on('submit', function(title){
				this.$eventHub.$on('submit', function(title){
					if (title) {
						vm.list.push({ title: title });
					}
				});
			},
			data() {
				return {
					list: [
						{ title: "Ir a feira" },
					]
				}
			},
		});

		// var eventBus = new Vue();
		Vue.prototype.$eventHub = new Vue();

		var app = new Vue({
			el: '#app',
			data: {
				titulo: "VueJs javascript!",
			},
		})
	</script>
</body>
</html>
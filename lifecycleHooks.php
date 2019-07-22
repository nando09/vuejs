<!DOCTYPE html>
<html>
<head>
	<title>Vue js</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<div class="container">
			<h1 class="text-center">{{ titulo }}</h1>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		var app = new Vue({
			el: '#app',

			beforeCreate() {
				console.log('beforeCreate');
				console.log('TITULO:', this.titulo);
				console.log('el', this.$el);
			},
			created() {
				console.log('created');
				console.log('TITULO:', this.titulo);
				console.log('el', this.$el);
			},
			beforeMount() {
				console.log('beforeMount');
				console.log('el', this.$el);
			},
			mounted() {
				console.log('mounted');
				console.log('el', this.$el);
			},
			beforeUpdate() {
				console.log('beforeUpdate');
			},
			updated() {
				console.log('updated');
			},
			// beforeDestroy() {},
			// destroyed() {},


			data: {
				titulo: "Marcas e Patentes!",
			},

		})
	</script>
</body>
</html>
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
			<!-- <img :src="imagem" :alt="alt"> -->
			<div class="text-center">
				<button :class="btnDanger" :style="btnLimpar">Limpar</button>
				<button :class="btnPrimary" :style="btnEnviar">Enviar</button>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		var app = new Vue({
			el: '#app',
			data: {
				titulo: "VueJs curso!",
				// imagem: "stockys.png",
				// alt: "Stockys"
				btnDanger: {
					'btn': true,
					'btn-danger': true,
					'btn-sm': true
				},
				btnPrimary: [
					'btn', 'btn-primary', {'btn-lg': false}
				],
				btnLimpar: [
					{ 'font-size': '50px' },
					{ 'text-transform': 'lowercase' }
				],
				btnEnviar: {
					'font-size': '10px'
				}
			}
		})
	</script>
</body>
</html>
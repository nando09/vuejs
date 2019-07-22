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
				<form action="https://google.com">				
					<button @click.prevent.stop="enviar()" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		var app = new Vue({
			// Elemento Pai, onde sera inserida
			el: '#app',
			// Onde esta as variaveis
			data: {
				titulo: "VueJs curso!",
			},
			// Onde irão ficar os methods do VueJs
			methods: {
				enviar(){
					alert('Enviado!');
				},
			}
		});
	</script>
</body>
</html>
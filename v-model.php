<!DOCTYPE html>
<html>
<head>
	<title>Vue js</title>
</head>
<body>
	<div id="app">
		<h1>{{ titulo }}</h1>
		<label for="">Nome</label><br>
		<input type="text" v-model="nome">
		<br><br>

		<label for="">Telefone</label><br>
		<input type="text" v-model="telefone">
		<br><br>

		<label for="">Deseja receber nossas novidades?</label><br>
		<input type="radio" value="Sim" v-model="novidades"> Sim
		<input type="radio" value="Não" v-model="novidades"> Não
		<br><br>

		<label for="">Interesses</label><br>
		<input type="checkbox" value="Futebol" v-model="interesses"> Futebol <br>
		<input type="checkbox" value="F1" v-model="interesses"> F1 <br>
		<input type="checkbox" value="Corrida" v-model="interesses"> Corrida <br>
		<br><br>

		<label for="">Como nos conheceu?</label><br>
		<select v-model="conheceu">
			<option value="">Escolha</option>
			<option value="Google">Google</option>
			<option value="TV">TV</option>
			<option value="Revista">Revista</option>
		</select>
		<br><br>

		<button>ENVIAR</button>

		<hr>

		Nome: {{ nome }} <br>
		Telefone: {{ telefone }} <br>
		Novidades: {{ novidades }} <br>
		Interesses: {{ interesses }} <br>
		Como nos conheceu: {{ conheceu }} <br>

	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		var app = new Vue({
			el: '#app',
			data: {
				titulo: "VueJs curso!",
				nome: "",
				telefone: "",
				novidades: "",
				interesses: [],
				conheceu: "",
			}
		})
	</script>
</body>
</html>
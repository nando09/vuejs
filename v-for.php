<!DOCTYPE html>
<html>
<head>
	<title>Vue js</title>
</head>
<body>
	<div id="app">
		<h1>{{ titulo }}</h1>
		<ul>
			<li v-for="(item, index) in linguagens">{{ index }} - {{ item.nome }}</li>
		</ul>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		var app = new Vue({
			el: '#app',
			data: {
				titulo: "VueJs curso!",
				linguagens: [
					{nome: "JavaScript"},
					{nome: "PHP"},
					{nome: "C#"},
					{nome: "Java"},
					{nome: "Python"},
				]
			}
		})
	</script>
</body>
</html>
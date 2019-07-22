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
			<ul>
				<li v-for="usuario in usuarios">{{ usuario.nome | truncate(10) }}</li>
			</ul>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		var app = new Vue({
			el: '#app',
			data: {
				status: true,
				usuarios: [
					{ nome: "Jon Now" },
					{ nome: "Tyrion Lannister" },
					{ nome: "Daenerys Tageryn" }
				],
				titulo: "VueJs curso!",
				message: 'Não tem acesso!'
			},
			filters:{
				toUpperCase(str){
					return str.toUpperCase();
				},

				truncate(str, length){
					var output = str;

					if (output.length > length) {
						output = str.substring(0, length) + '...';
					}

					return output;
				}
			},
			methods: {
				enviar(){
					alert("Enviou!");
				}
			}
		})
	</script>
</body>
</html>



<!--	*Diretivas* -->
<!--	v-if		=>	Passando a variavel ex: v-if="status" ele vai ver se a variavel é true ou false para mostrar ou não	-->
<!--	v-show		=>	Passando a variavel ex: v-show="status" o mesmo do v-if porém mostra no html da pagina e com if não se o retorno for false	-->
<!--	v-for		=>	Faz um loop com a variavel do data em new Vue	-->
<!--	v-model		=>	Traz informações conforme vai escrevendo	-->
<!--	v-bind		=>	Podendo ultilizar em qualquer atributo HTML que tambem posso atilizar com somente ":"	-->
<!--	v-on		=>	Onde traz os eventos do usuario	podendo usar o @ como no v-on.php-->

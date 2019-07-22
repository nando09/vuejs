<!DOCTYPE html>
<html>
<head>
	<title>Vue js</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<!-- Procurar Diretivas no arquivo por *Diretivas* -->
		<!-- Tem que primeiro usar o Diretiva e depois passar a variavel dela que se encontra em data do new Vue -->
		<div class="container">
			<h1 class="text-center">{{ titulo }}</h1>
			<!-- Fazendo uma pergunta, se o usuario é valido ou não -->
			<div v-if="usuario.id == 1">
				<p> Id: {{ usuario.id }}</p>
				<p> Nome: {{ usuario.nome }}</p>
				<p> Profissão: {{ usuario.profissao }}</p>
			</div>
			<div v-else>{{ message }}</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		// Componentes para usar um tipo de layout quantas vezes quiser ao chamar o "menu-bar" nomeado abaixo
		Vue.component('menu-bar', {
			template: "#menu",
		});

		var app = new Vue({
			// Elemento Pai, onde sera inserida
			el: '#app',
			// Onde esta as variaveis
			data: {
				status: true,
				usuario: {
					id: 1,
					nome: "Jon Now",
					profissao: "Ator"
				},
				titulo: "VueJs curso!",
				message: 'Não tem acesso!'
			},

			// Criação de filtros
			filters:{

			},

			// Onde irão ficar os methods do VueJs
			methods: {
				
			},

			// Verificar o campo passado e faz uma função
			computed:{
				
			},

			// Acompanha mudanças no campo em que passado para assistir
			watch:{
				
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

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
			{{ firstName }}<br>
			{{ lastName }}<br>
			{{ fullName }}<br>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		var app = new Vue({
			el: '#app',
			data: {
				titulo: "VueJs curso!",
				nome: "John Noew",
				firstName: "",
				lastName: "",
				// fullName: "",
			},

			computed:{
				fullName(){
					return this.firstName + ' ' + this.lastName;
				}
			},

			watch:{
				// firstName(newValue){
				// 	this.fullName = newValue + ' ' + this.lastName;
				// },

				// lastName(newValue){
				// 	this.fullName = this.firstName + ' ' + newValue;
				// },
				fullName(newValue){
					this.updateUsers();
				}
			},

			methods:{
				updateUsers(){
					console.log('Usuario atualizado!');
				}
			},
		})
	</script>
</body>
</html>
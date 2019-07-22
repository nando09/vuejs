<!DOCTYPE html>
<html>
<head>
	<title>Vue js</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<div class="container">
			<div class="row">
				<card>
					<h5 slot='title' class="card-title">Card title</h5>

					<template slot='text'>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<pclass="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</template>

					<a slot='action' href="#" class="btn btn-primary">Go somewhere</a>
				</card>

				<card>
					<h5 slot='title' class="card-title">Card title 2</h5>
					<template slot='text'>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod aliqua. Ut ullamco laboris nisi ut.</p>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod aliqua. Ut ullamco laboris nisi ut.</p>
					</template>
					<a slot='action' href="#" class="btn btn-danger">Teste</a>
				</card>
			</div>
		</div>
	</div>

	<template id="card">
		<div class="col-md-3">
			<div class="card">
				<img src="http://via.placeholder.com/350x150" class="card-img-top" alt="350x150" height="100px">
				<div class="card-body">
					<slot name='title'></slot>
					<slot name='text'></slot>
					<slot name='action'></slot>
				</div>
			</div>
		</div>
	</template>

	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		Vue.component('card', {
			template: "#card",
			data() {
				return {
					title: '',
				}
			}
		});

		var app = new Vue({
			el: '#app',
			data: {
				titulo: "VueJs curso!",
			},
		})
	</script>
</body>
</html>
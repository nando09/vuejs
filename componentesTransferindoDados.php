<!DOCTYPE html>
<html>
<head>
	<title>Vue js</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<br><br><br><br><br><br>
		<nav-bar></nav-bar>
		<div class="container">
			<br><br>
			<menu-bar :itens="[{label: 'Home', url: 'one/home'}, {label: 'Empresa', url: 'one/empresa'}, {label: 'Serviços', url: 'one/servicos'}]"></menu-bar>
		</div>
	</div>

	<template id="navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<menu-bar :itens="topNav" @emitir-click="getLink"></menu-bar>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</template>

	<template id="menu">
		<!-- <div> -->
			<!-- {{ itens }} -->
			<ul class="navbar-nav mr-auto">
				<li v-for="(item, index) in itens" class="nav-item">
					<!-- <a @click.stop.prevent="emitirClick(index)" class="nav-link" :href="item.url" tabindex="-1">{{ item.label }}</a> -->
					<a @click.stop.prevent="emitirClick(index)" class="nav-link" tabindex="-1">{{ item.label }}</a>
				</li>
			</ul>
		<!-- </div> -->
	</template>

	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script type="text/javascript">
		Vue.component('nav-bar', {
			template: '#navbar',
			data() {
				return {
					topNav: [
						{
							label: 'Home',
							url: 'two/home'
						},
						{
							label: 'Links',
							url: 'two/links'
						},
						{
							label: 'Disabled',
							url: 'two/disabled'
						}
					],
				}
			},
			methods: {
				getLink(index){
					alert(this.topNav[index].label);
				}
			}
		});

		Vue.component('menu-bar', {
			template: '#menu',
			props: {
				itens: {
					type: Array,
					required: true,
					default: 'VueJs'
				}
			},
			methods: {
				emitirClick(index){
					this.$emit('emitir-click', index);
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
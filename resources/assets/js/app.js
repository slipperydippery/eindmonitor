require('./bootstrap');

window.Vue = require('vue');

export let store = {
	menu: [
		{ 
			title: "one",
			subitems: [
				{ "title": "a", "adress": "/a"},
				{ "title": "b", "adress": "/b"},
			]
		},	
		{ 
			title: "two",
			subitems: [
				{ "title": "c", "adress": "/c"},
				{ "title": "d", "adress": "/d"},
			]
		},	
	]
};

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('generator', require('./components/Generator.vue'));
Vue.component('graph', require('./components/Graph.vue'));
Vue.component('grapher', require ('./components/Grapher.vue'));
Vue.component('p01-graph', require('./components/P01Graph.vue'));
Vue.component('p02-graph', require('./components/P02Graph.vue'));
Vue.component('p03-graph', require('./components/P03Graph.vue'));
Vue.component('p04-graph', require('./components/P04Graph.vue'));
Vue.component('p05-graph', require('./components/P05Graph.vue'));
Vue.component('p06-graph', require('./components/P06Graph.vue'));
Vue.component('p07-graph', require('./components/P07Graph.vue'));
Vue.component('p17-graph', require('./components/P17Graph.vue'));

const app = new Vue({
    el: '#app'
});




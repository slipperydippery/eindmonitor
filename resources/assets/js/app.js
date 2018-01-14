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

const app = new Vue({
    el: '#app'
});




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
Vue.component('p16-graph', require('./components/P16Graph.vue'));
Vue.component('p17-graph', require('./components/P17Graph.vue'));
Vue.component('p20-graph', require('./components/P20Graph.vue'));
Vue.component('p21-graph', require('./components/P21Graph.vue'));
Vue.component('p22-graph', require('./components/P22Graph.vue'));
Vue.component('p23-graph', require('./components/P23Graph.vue'));
Vue.component('p24-graph', require('./components/P24Graph.vue'));
Vue.component('p25-graph', require('./components/P25Graph.vue'));
Vue.component('p26-graph', require('./components/P26Graph.vue'));
Vue.component('p27-graph', require('./components/P27Graph.vue'));
Vue.component('p30-graph', require('./components/P30Graph.vue'));
Vue.component('p31-graph', require('./components/P31Graph.vue'));
Vue.component('p32-graph', require('./components/P32Graph.vue'));
Vue.component('p40-graph', require('./components/P40Graph.vue'));
Vue.component('p41-graph', require('./components/P41Graph.vue'));
Vue.component('p42-graph', require('./components/P42Graph.vue'));
Vue.component('p43-graph', require('./components/P43Graph.vue'));
Vue.component('p44-graph', require('./components/P44Graph.vue'));
Vue.component('p45-graph', require('./components/P45Graph.vue'));


const app = new Vue({
    el: '#app'
});




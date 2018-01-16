<template>
	<div class="generator container">
		<div class="row generator--menu">
		    <div class="col-sm-4">
		    	<ul class="hovermenu">
		    		<li class="hovermenu--active"> {{ active.title }} </li>
		    		<li v-for="item in categories" class="hovermenu--hover" @click="setActive(item)"> {{ item.title }} </li>
		    	</ul>
		    </div>
		    <div class="col-sm-2">
		        <img src="/img/arrows.svg" alt="" class="center hundred">
		    </div>
		    <div class="col-sm-4">
		        <ul class="hovermenu">
		        	<li class="hovermenu--active"> {{ activesub.title }} </li>
		        	<li class="hovermenu--hover" v-for="subitem in active.pages" @click="setActiveSub(subitem)"> {{ subitem.title }} </li>
		        </ul>
		    </div>
		    <div class="col-sm-2">
		        <a href="#" class="btn" @click="setBody()">go</a>
		    </div>
		</div>
		<div class="row">
			<div class="col-sm-12">
			    <div class="" v-html="body"></div>
			</div>
		</div>
	</div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
        ],

        data() {
            return {
            	active: { 
            		title: '--kies een pagina--', 
            		subitems: [
            			{title: '---'},
    			]},
    			activesub: {
    				title: '---'
    			},
	        	store,
	        	categories: [],
	        	body: '<img src="/img/tempmap.png" alt="" class="fullwidth">',
            }
        },

        mounted() {
            this.getCategories();
        },

        ready() {   
        },

        computed: {
        },

        methods: {
        	setActive: function(item){
        		this.active = item;
        		this.activesub = {title: '--- maak een selectie ---'};
        	},

        	setActiveSub: function(subitem){
        		this.activesub = subitem;
        	},

        	setBody: function() {
        		this.body = this.activesub.body;
        	},

            getCategories: function() {
            	console.log('heya');
                var home = this;
                axios.get('/api/category')
	                .then(function(response){
	                	home.categories = response.data;
	                })
	                .catch(function(error){
	                	console.log(error);
	                })
            } 
        }
    }
</script>

<style>
	.hovermenu--hover {
		display: none;
	}
	.hovermenu:hover .hovermenu--hover {
		display: block;
	}

</style> 
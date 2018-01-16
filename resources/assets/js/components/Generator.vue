<template>
	<div class="generator container row">
		<div class="col-sm-12 generator--menu">
			<div class="hovermenu--container">
		    	<ul class="hovermenu">
		    		<li class="hovermenu--active"> {{ active.title }} </li>
		    		<li v-for="item in categories" class="hovermenu--hover" @click="setActive(item)"> {{ item.title }} </li>
		    	</ul>
			</div>
			<div class="">
		        <img src="/img/arrows.svg" alt="" class="center hundred">
			</div>
	        <div class="hovermenu--container">
		        <ul class="hovermenu">
		        	<li class="hovermenu--active"> {{ activesub.title }} </li>
		        	<li class="hovermenu--hover" v-for="subitem in active.pages" @click="setActiveSub(subitem)"> {{ subitem.title }} </li>
		        </ul>
	        </div>
	        <a href="#" class="btn btn--textcenter" @click="gotoPage()">go</a>
		</div>
	</div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: {	
            category: {
            	default: {
            		title: '--kies een pagina--',
            		subitems: [
	            		{title: '---'},
            		]
            	}
            },
            page: {
            	default: {
            		title: '---'	,
            	}
            },
        },

        data() {
            return {
            	active: this.category,
            	activesub: this.page,
	        	store,
	        	categories: [],
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

        	gotoPage: function() {
        		window.location.href = '/category/' +  this.active.id + '/page/' + this.activesub.id;
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
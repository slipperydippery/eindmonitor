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
		        <a href="#" class="btn btn--fullwidth btn--textcenter" @click="gotoPage()">go</a>
		    </div>
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
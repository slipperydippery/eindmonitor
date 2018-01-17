<template>
	<div class="generator container row">
		<div class="col-sm-12 generator--menu">
	    	<ul class="hovermenu">
	    		<li class="hovermenu--active" @click="showSubitems()"> {{ active.title }} </li>
	    		<li 
	    			v-for="item in categories" 
	    			v-if="item.id != active.id"
	    			class="hovermenu--hover" 
	    			:class="{show: showSubitem}" 
	    			@click="setActive(item)"
	    		> 
	    			{{ item.title }} 
	    		</li>
	    	</ul>
			<div class="flex-center">
		        <img src="/img/arrows.svg" alt="" class="center hundred ">
			</div>
	        <ul class="hovermenu">
	        	<li class="hovermenu--active" @click="showSubitems()"> {{ activesub.title }} </li>
	        	<li 
	        		v-for="subitem in active.pages"
	        		v-if="subitem.id != activesub.id" 
	        		class="hovermenu--hover" 
	        		:class="{show: showSubitem}" 
	        		@click="setActiveSub(subitem)"
	        	> 
	        		{{ subitem.title 
	        		}} </li>
	        </ul>
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
            		id: 0,
            		subitems: [
	            		{title: '---'},
            		]
            	}
            },
            page: {
            	default: {
            		title: '---',
            		id: 0,
            	}
            },
        },

        data() {
            return {
            	active: this.category,
            	activesub: this.page,
	        	store,
	        	categories: [],
	        	showSubitem: false,
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
        		this.gotoPage();
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
            } ,

            showSubitems: function () {
            	this.showSubitem = true;
            },
        }
    }
</script>

<style>


</style> 
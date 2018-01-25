<template>
	<div class="generator container row">
		<div class="col-sm-12 generator--menu" :class="{'generator--menu--active': showSubitem}">
	    	<ul class="hovermenu">
	    		<li class="hovermenu--active" @click="toggleSubitmes()" v-if="active.id == 0"> {{ active.title }} </li>
	    		<li 
	    			v-for="item in categories" 
	    			class="hovermenu--hover" 
	    			:class="{show: showSubitem, 'hovermenu--hover--active': item.id == active.id}" 
	    			@click="setActive(item)"
	    		> 
	    			{{ item.title }} 
	    		</li>
	    	</ul>
			<div class="flex-center">
		        <img src="/img/arrows.svg" alt="" class="center hundred ">
			</div>
	        <ul class="hovermenu">
	        	<li class="hovermenu--active" @click="toggleSubitmes()"  v-if="activesub.id == 0"> {{ activesub.title }} </li>
	        	<li 
	        		v-for="subitem in active.pages"
	        		class="hovermenu--hover" 
	        		:class="{show: showSubitem, 'hovermenu--hover--active': subitem.id == activesub.id}" 
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
            		title: '--- selecteer een thema ---',
            		id: 0,
            		subitems: [
	            		{title: '--- selecteer een hoofdstuk ---'},
            		]
            	}
            },
            page: {
            	default: {
            		title: '--- selecteer een hoofdstuk ---',
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
                if(item.id == this.active.id) {
                    this.toggleSubitmes();
                } else {
            		this.active = item;
            		this.activesub = {title: '--- maak een selectie ---'};
                    this.gotoCategory();
                }
        	},

        	setActiveSub: function(subitem){
                if(subitem.id == this.activesub.id) {
                    this.toggleSubitmes();
                } else {
                    this.activesub = subitem;
            		this.gotoPage();
                }
        	},

            gotoCategory: function() {
                window.location.href = '/category/' + this.active.id;
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

            toggleSubitmes: function () {
            	this.showSubitem = ! this.showSubitem;
            },
        }
    }
</script>

<style>


</style> 
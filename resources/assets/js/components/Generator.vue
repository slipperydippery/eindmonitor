<template>
	<div class="generator container row">
	    <div class="col-sm-4">
	    	<ul class="hovermenu">
	    		<li class="hovermenu--active"> {{ active.title }} </li>
	    		<li v-for="item in store.menu" class="hovermenu--hover" @click="setActive(item)"> {{ item.title }} </li>
	    	</ul>
	    </div>
	    <div class="col-sm-2">
	        <img src="/img/arrows.svg" alt="" class="center hundred">
	    </div>
	    <div class="col-sm-4">
	        <ul class="hovermenu">
	        	<li class="hovermenu--active"> {{ activesub.title }} </li>
	        	<li class="hovermenu--hover" v-for="subitem in active.subitems" @click="setActiveSub(subitem)"> {{ subitem.title }} </li>
	        </ul>
	    </div>
	    <div class="col-sm-2">
	        <a href="#" class="btn">go</a>
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
            }
        },

        mounted() {
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
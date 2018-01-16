<template>
    <div class="">
		<canvas width="400" height="200" ref="canvas"></canvas>
    </div>
</template>

<script>
    import {store} from '../app.js';
	import Chart from 'chart.js';

    export default {
        props: {
            label: {},
            labels: {},
            values: {},
            color: {
                default: 'rgba(220,220,220,.2)' 
            }
        },

        data() {
            return {
                legend: ''
            }
        },

        mounted() {
        	var data = {
    	        labels: ['Aangesloten werkgevers', 'Actieve werknemers', '-	Ambassadeurs fiets', '-	nieuwe fietsers', '- overstappers op OV'],
    	        datasets: [{
                    label: 'Ambities',
                    data: [100, 2750, 500, 2000, 250],
                    // backgroundColor: "rgba(220,220,220,.2)",
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Resultaat',
                    data: [170, 2600, 800, 1800, 50],
                    backgroundColor: "#a1c50f",
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    }
    	        ]
    	    };
            var options =  {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            };
        	const chart = new Chart( this.$refs.canvas.getContext('2d'), { type: "bar", data: data, options: options });
        },

        ready() {   
        },

        computed: {
        },

        methods: {
        }
    }
</script>
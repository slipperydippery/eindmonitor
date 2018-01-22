<template>
    <div class="">
		<canvas width="940" height="470" ref="canvas"></canvas>
    </div>
</template>

<script>
    import {store} from '../app.js';
	import Chart from 'chart.js';

    export default {
        props: {
        },

        data() {
            return {
                legend: '',
                scrolled: false,
                blue_dark: '#04659e',
                green_verylight: '#bfe912',
                green_light: '#b0d710',
                green: '#a1c50f',
                green_dark: '#92b30e',
                green_verydark: '#1e6d37',
                yellow: '#f6d511',
                red: 'red',
                cyan_dark: '#247F77',
            }
        },

        mounted() {
        	this.handleScroll();
        },

        computed: {
        },

        methods: {
            loadMe: function() {
                var data = {
                    labels: ["nov '14", "dec '14", "jan '15", "feb '15", "mrt '15", "apr '15", "mei '15", "jun '15", "jul '15", "aug '15", "sep '15", "oct '15", "nov '15", "dec '15", "jan '16", "feb '16", "mrt '16", "apr '16", "mei '16", "jun '16", "jul '16", "aug '16", "sep '16", "oct '16", "nov '16", "dec '16", "jan '17", "feb '17", "mrt '17", "apr '17", "mei '17", "jun '17", "jul '17", "aug '17", "sep '17", "oct '17", ],
                    datasets: [{
                        label: 'OV',
                        data: [897, 897, 897, 1174, 1174, 1174, 1569, 2103, 2336, 2766, 4858, 7049, 8961, 8951, 9967, 13111, 15984, 19304, 22198, 23102, 24051, 24885, 23770, 23883, 23910, 24616, 24616, 24974, 24974, 24974, 24974, 25249, 25249, 25249, 25249, 25249],
                        backgroundColor: this.blue_dark,
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Auto',
                        data: [28512, 29764, 30091, 32946, 34157, 34970, 42943, 50277, 63268, 69143, 101760, 174675, 228975, 248668, 277201, 331647, 397812, 528156, 583088, 614123, 627786, 645164, 623503, 603354, 612916, 615006, 615126, 617921, 618608, 617974, 618608, 618015, 616404, 616078, 620300, 658116],
                        // backgroundColor: "#f6d511",
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Fiets',
                        data: [12932, 13144, 13144, 18526, 18609, 18776, 22834, 33025, 45701, 48364, 79336, 149786, 199783, 216126, 241160, 269749, 305204, 364619, 373486, 381275, 384284, 385906, 373457, 359501, 360451, 361124, 361717, 363240, 363389, 362821, 363389, 365437, 365281, 364994, 367256, 369451],
                        backgroundColor: this.green,
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Voet',
                        data: [0, 0, 0, 0, 0, 12, 12, 210, 210, 210, 210, 210, 210, 210, 210, 210, 210, 210, 210, 210, 210, 210, 160, 160, 160, 160, 160, 160, 160, 160, 160, 160, 160, 160, 160, 160],
                        backgroundColor: this.yellow,
                        // backgroundColor: "#1e6d37",
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Anders',
                        data: [4652, 4797, 4797, 5371, 5371, 5422, 5857, 5292, 5475, 5225, 7018, 10676, 16163, 16241, 16460, 17976, 19793, 21424, 21481, 21403, 21403, 21437, 19609, 19019, 19055, 19143, 19143, 19143, 19143, 19143, 19143, 19143, 19143, 19143, 19143, 19202],
                        backgroundColor: this.cyan_dark,
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        }
                    ],
                };
                var options =  {
                    scales: {
                        xAxes: [{
                            stacked: true
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            },
                            stacked: true
                        }]
                    },
                    title: {
                        display: true,
                        text: "Aantal km's per vervoerwijze per maand obv oorspronkelijke vervoerwijze (zoals het beeld eruit had gezien zonder beïnvloeding) "
                    }
                };
                const chart = new Chart( this.$refs.canvas.getContext('2d'), { type: "bar", data: data, options: options });
            },

            handleScroll() {
                let obj = this.$refs.canvas;
                let {top,bottom} = obj.getBoundingClientRect();
                let height = document.documentElement.clientHeight - 300;
                if (top < height && bottom > 0 && this.scrolled == false) {
                    this.loadMe();
                    this.scrolled = true;
                }
            }
        },

        created() {
            window.addEventListener('scroll', this.handleScroll);
        },

        destroyed() {
            window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>
<template>
    <div class="chart">
        <canvas width="470" height="300" ref="canvas"></canvas>
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
                blue_0: '#011c2b',
                blue_1: '#023451',
                blue_2: '#034d78',
                blue_3: '#04659e',
                blue_4: '#057dc4',
                blue_5: '#058ad7',
                blue_6: '#0696eb',
                green_verylight: '#bfe912',
                green_light: '#b0d710',
                green: '#a1c50f',
                green_dark: '#92b30e',
                green_verydark: '#1e6d37',
                yellow: '#f6d511',
                red_light: '#eb0624',
                red: '#c4051e',
                red_dark: '#9e0418',
                red_verydark: '#780312',
                cyan_dark: '#247F77',
            }
        },

        mounted() {
            this.handleScroll();
        },

        ready() {   
        },

        computed: {
        },

        methods: {
            loadMe: function() {
            var data = {
                labels: ["Q4 2015", "Q1 2016", "Q2 2016", "Q3 2016", "Q4 2016", "Q1 2017",],
                datasets: [{
                    label: 'CO2 reductie',
                    data: [ 84758989,  128189731, 204146434, 210340327, 226204699, 186165430  ],
                    backgroundColor: this.green,
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
                    text: "Behaalde CO2 reductie per kwartaal"
                },

                plugins: {
                    deferred: {
                        delay: 500
                    }
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
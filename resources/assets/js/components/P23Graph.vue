<template>
    <div class="chart">
        <canvas width="470" height="235" ref="canvas"></canvas>
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
                labels: ["sep '11", "mrt '15", "sep '15", "mrt '16", "sep '16", "mrt '17", "sep '17"],
                datasets: [{
                    label: 'Temperatuur',
                    data: [17, 13, 16, 12, 15, 12, 16 ],
                    backgroundColor: "rgba(0, 0, 0, 0)",
                    type: 'line',
                    pointRadius: 0,
                    borderColor: this.red_verydark,
                    yAxisID: "bar-y-axis",
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: '(brom-)fietsers zonder spitspont',
                    data: [3672, 3946, 0, 0, 0, 0, 0 ],
                    backgroundColor: this.blue_3,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: '(brom-)fietsers met spitspont',
                    data: [0, 0, 4304, 4277, 5508, 4487, 4573 ],
                    backgroundColor: this.blue_1,
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
                        stacked: false,
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 5000,
                            autoSkip: false
                        }
                        }, {
                            id: "bar-y-axis",
                            stacked: true,
                            // display: false, //optional
                            position: 'right',
                            ticks: {
                                beginAtZero: true,
                                min: 0,
                                max: 20,

                            },
                        type: 'linear'
                    }]
                },
                title: {
                    display: true,
                    text: "Aantal (brom)fiets-gebruikers van extra veerpont "
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
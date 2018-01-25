<template>
    <div class="chart">
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

        ready() {   
        },

        computed: {
        },

        methods: {
            loadMe: function() {
            var data = {
                labels: ["nov '14", "dec '14", "jan '15", "feb '15", "mrt '15", "apr '15", "mei '15", "jun '15", "jul '15", "aug '15", "sep '15", "oct '15", "nov '15", "dec '15", "jan '16", "feb '16", "mrt '16", "apr '16", "mei '16", "jun '16", "jul '16", "aug '16", "sep '16", "oct '16", "nov '16", "dec '16", "jan '17", "feb '17", "mrt '17", "apr '17", "mei '17", "jun '17", "jul '17", "aug '17", "sep '17", "oct '17", ],
                datasets: [{
                    label: 'Uitgeschreven',
                    data: [0, 0, 0, -1, 0, -1, -2, -3, -2, -31, -4, -4, -1, -11, -5, 0, -9, -4, -5, -6, -7, -44, -202, -159, -5, -5, -2, -1, -1, -4, -5, -6, -8, -6, 0, 0, ],
                    backgroundColor: this.red,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'On hold',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -26, -35, -61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ],
                    backgroundColor: this.yellow,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Actief',
                    data: [0, 161, 171, 172, 207, 211, 213, 248, 342, 422, 467, 650, 1017, 1280, 1368, 1512, 1726, 2016, 2496, 2665, 2788, 2798, 2669, 2551, 2588, 2625, 2635, 2643, 2659, 2658, 2653, 2651, 2658, 2659, 2662, 2678 ],
                    // backgroundColor: this.cyan_dark,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Nieuw',
                    data: [161, 10, 2, 35, 5, 4, 37, 96, 111, 49, 187, 368, 274, 93, 144, 223, 294, 485, 173, 132, 53, 73, 38, 43, 41, 12, 7, 3, 3, 0, 0, 15, 7, 2, 16, 91 ],
                    backgroundColor: this.green,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Opniew',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 3, 0, 0, 0, 2, 14, 0, 0, 4, 0, 0, 1, 0, 0 ],
                    backgroundColor: this.green_verylight,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Actueel',
                    data: [161, 171, 173, 206, 212, 214, 248, 341, 451, 440, 650, 1014, 1290, 1362, 1507, 1735, 2011, 2497, 2666, 2791, 2834, 2827, 2508, 2435, 2624, 2632, 2642, 2659, 2661, 2654, 2652, 2660, 2657, 2656, 2678, 2769 ],
                    backgroundColor: "rgba(0, 0, 0, 0)",
                    type: 'line',
                    borderColor: this.yellow,
                    pointRadius: 0,
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
                    text: "Ontwikkeling fietsdeelnemers 2014-2017"
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
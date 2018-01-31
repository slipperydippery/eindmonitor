<template>
    <div class="chart chart__nopaddingbottom">
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
                labels: ["nov '14", "dec '14", "jan '15", "feb '15", "mrt '15", "apr '15", "mei '15", "jun '15", "jul '15", "aug '15", "sep '15", "okt '15", "nov '15", "dec '15", "jan '16", "feb '16", "mrt '16", "apr '16", "mei '16", "jun '16", "jul '16", "aug '16", "sep '16", "okt '16", "nov '16", "dec '16", "jan '17", "feb '17", "mrt '17", "apr '17", "mei '17", "jun '17", "jul '17", "aug '17", "sep '17", "okt '17", ],
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
                    backgroundColor: this.green_verydark,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Actief',
                    data: [0, 161, 171, 172, 207, 211, 213, 248, 342, 422, 467, 650, 1017, 1280, 1368, 1512, 1726, 2016, 2496, 2665, 2788, 2798, 2669, 2551, 2588, 2625, 2635, 2643, 2659, 2658, 2653, 2651, 2658, 2659, 2662, 2678 ],
                    backgroundColor: this.yellow,
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
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
        },

        computed: {
        },

        methods: {
            loadMe: function() {
                var data = {
                    labels: ["april '17", "mei '17", "juni '17", "juli '17", "augustus '17", "september '17", "october '17", ],
                    datasets: [{
                        label: 'Maandag',
                        data: [191, 1970, 1860, 2374, 1759, 1506, 2548],
                        backgroundColor: this.green_verylight,
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Dinsdag',
                        data: [223, 2264, 1977, 2118, 2211, 1679, 2666],
                        backgroundColor: this.green_light,
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Woensdag',
                        data: [304, 2334, 1914, 1921, 2091, 1572, 2239],
                        backgroundColor: this.green,
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Donderdag',
                        data: [215, 1563, 2608, 2104, 2049, 1467, 1974],
                        backgroundColor: this.green_dark,
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Vrijdag',
                        data: [391, 1556, 2502, 1960, 1588, 1742, 1842],
                        backgroundColor: this.green_verydark,
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Zaterdag',
                        data: [415, 1478, 1629, 2044, 1199, 1676, 1423],
                        backgroundColor: "rgba(0,0,0,0.2",
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Zondag',
                        data: [319, 1088, 1270, 1450, 1089, 1012, 1309],
                        backgroundColor: "rgba(0,0,0,0.4",
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
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            },
                        }]
                    },
                    title: {
                        display: true,
                        text: "Ontwikkeling in gebruik van RingRing-app weergegeven in aantal verplaatsingen per werkdag per maand "
                    },
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
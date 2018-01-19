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

        ready() {   
        },

        computed: {
        },

        methods: {
            loadMe: function() {
            var data = {
                labels: ["nov '14", "dec '14", "jan '15", "feb '15", "mrt '15", "apr '15", "mei '15", "jun '15", "jul '15", "aug '15", "sep '15", "oct '15", "nov '15", "dec '15", "jan '16", "feb '16", "mrt '16", "apr '16", "mei '16", "jun '16", "jul '16", "aug '16", "sep '16", "oct '16", "nov '16", "dec '16", "jan '17", "feb '17", "mrt '17", "apr '17", "mei '17", "jun '17", "jul '17", "aug '17", "sep '17", "oct '17", ],
                datasets: [{
                    label: 'OV',
                    data: [0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0.2, 0.2, 0.4, 0.6, 0.8, 0.8, 0.9, 1.2, 1.4, 1.7, 2.0, 2.1, 2.2, 2.2, 2.1, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.2, 2.3, 2.3, 2.3, 2.3, 2.3], 
                    backgroundColor: this.blue_dark,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Auto',
                    data: [3.9, 4.1, 4.1, 4.5, 4.7, 4.8, 5.9, 5.9, 8.7, 9.5, 13.9, 23.9, 31.4, 34.1, 38.0, 45.4, 54.5, 72.4, 79.9, 84.1, 86.0, 88.4, 85.4, 82.7, 84.0, 84.3, 84.3, 84.7, 84.7, 84.7, 84.4, 84.7, 84.4, 84.4, 85.0, 90.2], 
                    // backgroundColor: "#f6d511",
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Anders',
                    data: [0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.4, 0.4, 0.3, 0.3, 0.4, 0.6, 1.0, 1.0, 1.0, 1.1, 1.2, 1.3, 1.3, 1.3, 1.3, 1.3, 1.2, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.1, 1.2,], 
                    backgroundColor: this.cyan_dark,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'CO2-niveau',
                    data: [1.3, 1.3, 1.4, 1.1, 1.2, 1.2, 1.6, 1.6, 2.0, 2.3, 3.4, 6.2, 8.1, 8.9, 10.0, 12.7, 15.3, 21.0, 23.4, 24.4, 24.9, 25.7, 24.4, 23.5, 23.9, 24.0, 24.0, 24.1, 24.1, 24.0, 23.9, 23.9, 23.8, 23.8, 23.8, 26.2,], 
                    backgroundColor: "rgba(0, 0, 0, 0)",
                    type: 'line',
                    borderColor: this.red,
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
                    text: "CO2-uitstoot oorspronkelijke vervoerwijzen (in ton per maand) inclusief gereduceerd CO2-niveau na fietsstimulering "
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
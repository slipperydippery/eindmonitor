<template>
    <div class="">
        <canvas width="940" height="700" ref="canvas"></canvas>
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
                labels: ["Amazing Wheels", "Boval", "Crown van Gelder", "Detailresult Groep", "DSE Automatisering", "Duin en Kruidberg mavo", "Enci", "Etos Distributiecentrum/ Olympia uitzendburo", "Gemeente Beverwijk", "Gemeente Heemskerk", "Gemeente Velsen", "Heliomare", "Hunting Energy Services", "Hoogewerf Engineering", "IJmond Transport Groep", "KNRM", "Lokhorst", "Nova college IJmuiden", "Nova college Beverwijk", "Patina", "PreWonen", "Provinciaal Waterleiding Noord-Nederland", "Rabobank", "Recreatie Noord-Holland", "Rode Kruis Ziekenhuis", "Sterling", "St. OPO", "St. Welzijn Beverwijk", "St Welzijn Velsen", "St. Voortgezet Onderwijs Kennemerland", "Tata Steel", "Tender College", "Vellesan college", "Woonexpress", ],
                datasets: [{
                    label: 'Fietspercentage',
                    data: [60.00, 12.84, 26.98, 5.14, 46.67, 3.45, 26.67, 7.57, 4.81, 5.93, 16.89, 17.69, 21.05, 17.50, 1.11, 30.00, 11.29, 20.00, 9.33, 4.71, 7.33, 8.00, 4.67, 9.09, 10.14, 20.00, 4.50, 13.33, 26.67, 2.63, 13.43, 23.33, 16.00, 0],
                    backgroundColor: "rgba(0, 0, 0, 0)",
                    type: 'line',
                    pointRadius: 0,
                    borderColor: this.red,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Reiskostenvergoeding 0-10km',
                    data: [15, 0, 15, 0, 15, 15, 0, 15, 15, 0, 15, 15, 15, 0, 0, 0, 0, 0, 0, 0, 15, 15, 15, 15, 15, 0, 0, 0, 15, 0, 15, 15, 0, 0,], 
                    backgroundColor: this.blue_0,
                    yAxisID: "bar-y-axis",
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: '19c/km-reiskostenvergoeding',
                    data: [15, 15, 15, 15, 15, 0, 15, 15, 15, 15, 15, 15, 15, 15, 0, 0, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 0, 15, 15, 15, 15, 15,], 
                    backgroundColor: this.blue_1,
                    yAxisID: "bar-y-axis",
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Bijdrage fiets',
                    data: [0, 0, 25, 25, 25, 0, 0, 25, 25, 25, 25, 25, 25, 25, 0, 25, 0, 25, 25, 25, 25, 25, 25, 0, 25, 0, 0, 25, 25, 0, 0, 25, 25, 25],
                    backgroundColor: this.blue_2,
                    yAxisID: "bar-y-axis",
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'E-bike probeeractie',
                    data: [10, 10, 0, 0, 0, 0, 10, 10, 10, 0, 10, 0, 10, 0, 0, 10, 0, 10, 10, 10, 10, 0, 10, 0, 10, 0, 0, 10, 10, 0, 10, 0, 10, 10],
                    yAxisID: "bar-y-axis",
                    backgroundColor: this.blue_3,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Fiets-check',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    yAxisID: "bar-y-axis",
                    backgroundColor: this.blue_4,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Fietschallenge',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 10, 0, 0, 0],
                    yAxisID: "bar-y-axis",
                    backgroundColor: this.blue_5,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Kennistafel',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    yAxisID: "bar-y-axis",
                    backgroundColor: this.blue_6,
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Fietsvoorzieningen',
                    data: [10, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    yAxisID: "bar-y-axis",
                    // backgroundColor: this.blue_3,
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
                        stacked: true,
                        ticks: {
                            autoSkip: false,
                        }
                    }],
                    yAxes: [{
                        stacked: false,
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 80,
                            autoSkip: false
                        }
                        }, {
                            id: "bar-y-axis",
                            stacked: true,
                            display: false, //optional
                            ticks: {
                                beginAtZero: true,

                            },
                        type: 'linear'
                    }]
                },
                title: {
                    display: true,
                    text: "Fietsgerelateerde maatregelen versus fietspercentage onder werknemers bij de koplopers van IJmond Bereikbaar "
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
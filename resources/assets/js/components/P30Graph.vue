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
                    data: [60, 13, 27, 5, 47, 3, 27, 8, 5, 6, 17, 18, 21, 18, 1, 30, 11, 20, 9, 5, 7, 8, 5, 9, 10, 20, 5, 13, 27, 3, 13, 23, 16, 0,], 
                    backgroundColor: "rgba(0, 0, 0, 0)",
                    type: 'line',
                    borderColor: this.green,
                    pointRadius: 0,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Streefwaarde maatregelen',
                    data: [55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55, 55,], 
                    backgroundColor: "rgba(0, 0, 0, 0)",
                    type: 'line',
                    pointRadius: 0,
                    borderColor: this.red_verydark,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Streefwaarde fietspercentage',
                    data: [15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15], 
                    backgroundColor: "rgba(0, 0, 0, 0)",
                    type: 'line',
                    pointRadius: 0,
                    borderColor: this.red,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Score harde maatregelen',
                    data: [30, 11, 56, 37, 56, 11, 11, 56, 56, 37, 56, 56, 56, 37, 0, 19, 11, 37, 37, 37, 56, 56, 56, 30, 56, 11, 11, 37, 37, 11, 30, 56, 37, 37,], 
                    backgroundColor: this.blue_dark,
                    yAxisID: "bar-y-axis",
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Score zachte maatregelen',
                    data: [19, 7, 0, 0, 7, 0, 7, 7, 7, 0, 7, 0, 7, 0, 0, 7, 0, 7, 7, 19, 7, 0, 7, 0, 19, 0, 0, 7, 7, 0, 19, 0, 7, 7,], 
                    yAxisID: "bar-y-axis",
                    // backgroundColor: "#f6d511",
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
                    text: "Fietsgerelateerde maatregelen versus percentage fietsers onder werknemers bij de koplopers van IJmond Bereikbaar "
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
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
                    data: [897, 897, 897, 1174, 1174, 1174, 1569, 2103, 2336, 2766, 4858, 7049, 8961, 8951, 9967, 13111, 15984, 19304, 22198, 23102, 24051, 24885, 23770, 23883, 23910, 24616, 24616, 24974, 24974, 24974, 24974, 25249, 25249, 25249, 25249, 25249],
                    backgroundColor: "this.blue_dark",
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Auto',
                    data: [6760, 7132, 7351, 5150, 5431, 5737, 8445, 8587, 10679, 12894, 18374, 35779, 46371, 52214, 59219, 75937, 92441, 131195, 146826, 153356, 156672, 161977, 153927, 147306, 150495, 150968, 150831, 150842, 150913, 150688, 150913, 149645, 148919, 148621, 149112, 166463],
                    // backgroundColor: "#f6d511",
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    },{
                    label: 'Fiets',
                    data: [34684, 35776, 35885, 46322, 47334, 48010, 57331, 74715, 98291, 104614, 162722, 288683, 382387, 412579, 459142, 525459, 610576, 761580, 809748, 842043, 855398, 869093, 843033, 815549, 822872, 825162, 826013, 830320, 831085, 830107, 831085, 833808, 832767, 832451, 838444, 861104],
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
                    text: "berekend aantal km's per vervoerwijze per maand obv van de modal shift (het beeld obv fietsstimulering 2014-2017) "
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
<template>
    <div class="chart">
		<canvas width="400" height="235" ref="canvas"></canvas>
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
                    labels: ["nov '14", "dec '14", "jan '15", "feb '15", "mrt '15", "apr '15", "mei '15", "jun '15", "jul '15", "aug '15", "sep '15", "okt '15", "nov '15", "dec '15", "jan '16", "feb '16", "mrt '16", "apr '16", "mei '16", "jun '16", "jul '16", "aug '16", "sep '16", "okt '16", "nov '16", "dec '16", "jan '17", "feb '17", "mrt '17", "apr '17", "mei '17", "jun '17", "jul '17", "aug '17", "sep '17", "okt '17", ],
                    datasets: [{
                        label: 'Ambassadeur: actief',
                        data: [38, 39, 40, 40, 40, 41, 56, 104, 153, 166, 240, 408, 532, 568, 628, 716, 808, 947, 945, 941, 938, 920, 841, 788, 784, 784, 786, 787, 787, 786, 787, 794, 794, 792, 792, 792],
                        backgroundColor: this.blue_dark,
                        // borderColor: this.color,
                        // lineTension: .2,
                        // borderWidth: 1,
                        // pointBackgroundColor: "#fff",
                        // pointBorderColor: "rgba(50,50,50,1)",
                        },{
                        label: 'Deelnemer: actief',
                        data: [123, 132, 133, 167, 172, 174, 194, 240, 300, 305, 414, 610, 759, 805, 884, 1019, 1212, 1554, 1726, 1856, 1903, 1951, 1869, 1806, 1845, 1853, 1858, 1873, 1875, 1872, 1870, 1872, 1871, 1870, 1886, 1977],
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
                        text: "Actieve fietsers, verdeeld in ambassadeurs en nieuwe fietsers."
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
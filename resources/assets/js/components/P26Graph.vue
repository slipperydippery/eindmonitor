<template>
    <div class="chart ">
        <canvas width="300" height="300" ref="canvas"></canvas>
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
                labels: ["Deelname IJmond Bereikbaar"],
                labels: ['54% Deed mee vanwege de kilometervergoeding', ' 38% Heeft geen motivatieprogramma meer nodig', '18% Vindt IJmond Bereikbaar niet meer interessant'],
                datasets: [{
                    data: [54, 38, 18],
                    backgroundColor: [this.cyan_dark, this.green_dark, this.red ],
                    // borderColor: this.color,
                    // lineTension: .2,
                    // borderWidth: 1,
                    // pointBackgroundColor: "#fff",
                    // pointBorderColor: "rgba(50,50,50,1)",
                    }
                ],
            };
            var options =  {
                title: {
                    display: true,
                    text: "Redenen om te stoppen"
                }
            };
            const chart = new Chart( this.$refs.canvas.getContext('2d'), { type: "doughnut", data: data, options: options });

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
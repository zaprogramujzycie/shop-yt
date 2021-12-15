"use strict";
$(document).ready(function(){

    /* -----  Chartjs - Global Style  ----- */
    Chart.defaults.global.defaultFontFamily = 'poppins';
    Chart.defaults.global.defaultFontColor = '#777777';
    Chart.defaults.global.defaultFontSize = 14;
    Chart.defaults.global.defaultFontStyle = 'normal';
    Chart.defaults.global.maintainAspectRatio = 0;
    Chart.defaults.global.lineWidth = 2;

    Chart.defaults.global.tooltips.backgroundColor = '#313131';
    Chart.defaults.global.tooltips.titleFontSize = 14;
    Chart.defaults.global.tooltips.titleFontStyle = 'normal';
    Chart.defaults.global.tooltips.bodyFontSize = 12;
    Chart.defaults.global.tooltips.bodyFontStyle = 'normal';

    Chart.defaults.global.tooltips.xPadding = 10;
    Chart.defaults.global.tooltips.yPadding = 10;

    Chart.defaults.global.tooltips.titleMarginBottom = 10;
    Chart.defaults.global.tooltips.bodySpacing = 8;
    Chart.defaults.global.tooltips.cornerRadius = 5;

    Chart.defaults.global.legend.labels.boxWidth = 15;
    Chart.defaults.global.legend.labels.fontSize = 15;
    Chart.defaults.global.legend.labels.padding = 16;

    /* -----  Chartjs - Basic Line Chart  ----- */    
    var xpLinechartID = document.getElementById("xp-chartjs-basic-line").getContext('2d');
        var xpLineChart = new Chart(xpLinechartID, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Series A',
                    backgroundColor: ["rgba(76,124,243,0.2)"],
                    borderColor: ["#4c7cf3"],
                    pointBorderColor: ["#4c7cf3","#4c7cf3","#4c7cf3","#4c7cf3","#4c7cf3","#4c7cf3","#4c7cf3"],
                    pointBackgroundColor: ["#fff","#fff","#fff","#fff","#fff","#fff","#fff"],
                    pointBorderWidth: 2,
                    data: [50, 25, 60, 50, 80, 40, 70],
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: false,
                    text: 'Chart.js Line Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: false
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            color: '#e1e4e9',
                            lineWidth: 1,
                            borderDash: [3]
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            color: '#e1e4e9',
                            lineWidth: 1,
                            borderDash: [3]
                        }
                    }]
                }
            }
        });

        /* -----  Chartjs - Bar Chart  ----- */
        var xpBarChartID = document.getElementById("xp-chartjs-bar-chart").getContext('2d');
        var xpBarChart = new Chart(xpBarChartID, {
            type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                    datasets: [{
                        label: 'Series A',
                        backgroundColor: ["#4c7cf3", "#4c7cf3", "#4c7cf3", "#4c7cf3", "#4c7cf3", "#4c7cf3", "#4c7cf3"],
                        borderColor: ["#4c7cf3", "#4c7cf3", "#4c7cf3", "#4c7cf3", "#4c7cf3", "#4c7cf3", "#4c7cf3"],
                        borderWidth: 1,
                        data: [50, 70, 40, 90, 60, 40, 80, 20]
                    }]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'top'
                    },
                    title: {
                        display: false,
                        text: 'Chart.js Bar Chart'
                    },
                    scales: {
                        xAxes: [{    
                            barPercentage: 0.3,   
                            gridLines: {
                                color: '#e1e4e9',
                                lineWidth: 1,
                                borderDash: [3]
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                color: '#e1e4e9',
                                lineWidth: 1,
                                borderDash: [3]
                            }
                        }]
                    }
                }
        });

        /* -----  Chartjs - Pie Chart  ----- */
        var xpPieChartID = document.getElementById("xp-chartjs-pie-chart").getContext('2d');
        var xpPieChart = new Chart(xpPieChartID, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [40,35,25],
                    backgroundColor: ["#4c7cf3","#2bcd72","#e1e4e9"],
                    label: 'Series'
                }],
                labels: ['Series A','Series B','Series C']
            },
            options: {
                responsive: true
            }
        });

        /* -----  jVector Map - World Map  ----- */
        $('#xp-world-map-markers').vectorMap({map: 'world_mill_en',backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: '#4c7cf3'
                }
            },
            markerStyle: {
              initial: {
                fill: '#2bcd72',
                stroke: '#2bcd72'
              },
              hover: {
                fill: '#ff4b5b',
                stroke: '#ff4b5b'
              }
            },
            markers: [
                {latLng: [41.90, 12.45], name: 'Vatican City'},
                {latLng: [1.3, 103.8], name: 'Singapore'},
                {latLng: [14.01, -60.98], name: 'Saint Lucia'},
                {latLng: [55.58, -105.75], name: 'Canada'},
                {latLng: [40.67, -95.85], name: 'United States'},
                {latLng: [-33.86, 151.20], name: 'Australia'},
                {latLng: [23.25, 77.41], name: 'India'},
                {latLng: [9.08, 8.67], name: 'Nigeria'},
                {latLng: [51.50, -0.11], name: 'United Kingdom'},
            ]
    });
});


$(document).ready(function() {
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true
        }
    };

    // var accuracy = document.getElementById("accuracy").getContext("2d");
    // window.myPie = new Chart(accuracy, config);
    // var time_spend = document.getElementById("time_spend").getContext("2d");
    // window.myPie = new Chart(time_spend, config);
   
   
});

$(document).ready(function() {
    var color = Chart.helpers.color;
    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            type: 'bar',
            label: 'Dataset 1',
            backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
            borderColor: window.chartColors.red,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }, {
            type: 'line',
            label: 'Dataset 2',
            backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
            borderColor: window.chartColors.blue,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }, {
            type: 'bar',
            label: 'Dataset 3',
            backgroundColor: color(window.chartColors.green).alpha(0.2).rgbString(),
            borderColor: window.chartColors.green,
            data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
            ]
        }]
    };

    var barChartData3 = {
        labels: ["Easy", "Hard", "Medium"],
        datasets: [{
                type: 'bar',
                label: 'Incorrect',
                backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                borderColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]

            },

            {
                type: 'bar',
                label: 'Correct',
                backgroundColor: color(window.chartColors.green).alpha(0.2).rgbString(),
                borderColor: window.chartColors.green,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]

            },


            // {
            //     type: 'line',
            //     label: 'Dataset 2',
            //     backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
            //     borderColor: window.chartColors.blue,
            //     data: [
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor() 
            //     ]
            // }, 
            {
                type: 'bar',
                label: 'Skipped',
                backgroundColor: color(window.chartColors.orange).alpha(0.2).rgbString(),
                borderColor: window.chartColors.orange,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }
        ]
    };

    var barChartData4 = {
        labels: ["All Section", "English Language & Comperhensive"],
        datasets: [{
                type: 'bar',
                label: 'level 1',
                backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                borderColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]

            },

            {
                type: 'bar',
                label: 'level 2',
                backgroundColor: color(window.chartColors.orange).alpha(0.2).rgbString(),
                borderColor: window.chartColors.orange,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]

            },
            {
                type: 'bar',
                label: 'level 3',
                backgroundColor: color(window.chartColors.yellow).alpha(0.2).rgbString(),
                borderColor: window.chartColors.yellow,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]

            },


            // {
            //     type: 'line',
            //     label: 'Dataset 2',
            //     backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
            //     borderColor: window.chartColors.blue,
            //     data: [
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor(),
            //         randomScalingFactor() 
            //     ]
            // }, 
            {
                type: 'bar',
                label: 'level 4',
                backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                borderColor: window.chartColors.blue,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }
        ]
    };



    var barChartData2 = {
        labels: ["Correct", "Incorrect", "Skipped"],
        datasets: [{
            type: 'bar',
            label: 'Dataset 3',
            backgroundColor: color(window.chartColors.green).alpha(0.2).rgbString(),
            borderColor: window.chartColors.green,
            data: [
             
                           
                          
            ]
        }]
    };


    var ctx = document.getElementById("canvas1").getContext("2d");
    var ctx2 = document.getElementById("canvas2").getContext("2d");
    var ctx3 = document.getElementById("canvas3").getContext("2d");
    var ctx4 = document.getElementById("canvas5").getContext("2d");
    var ctx5 = document.getElementById("canvas10").getContext("2d");
    var ctx11 = document.getElementById("canvas11").getContext("2d");
    var ctx12 = document.getElementById("canvas12").getContext("2d");
    var ctx6 = document.getElementById("canvas6").getContext("2d");

    



    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData2,
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Combo Bar Line Chart'
            },
        }
    });

    window.myBar = new Chart(ctx2, {
        type: 'bar',
        data: barChartData2,
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Combo Bar Line Chart'
            },
        }
    });
    window.myBar = new Chart(ctx3, {
        type: 'bar',
        data: barChartData2,
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Combo Bar Line Chart'
            },
        }
    });
    window.myBar = new Chart(ctx4, {
        type: 'bar',
        data: barChartData2,
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Combo Bar Line Chart'
            },
        }
    });

    window.myBar = new Chart(ctx6, {
        type: 'bar',
        data: barChartData2,
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Combo Bar Line Chart'
            },
        }
    });
    window.myBar = new Chart(ctx5, {
        type: 'bar',
        data: barChartData2,
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Combo Bar Line Chart'
            },
        }
    });
    window.myBar = new Chart(ctx11, {
        type: 'bar',
        data: barChartData3,
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Combo Bar Line Chart'
            },
        }
    });

    window.myBar = new Chart(ctx12, {
        type: 'bar',
        data: barChartData4,
        options: {
            responsive: true,
            title: {
                display: false,
                text: 'Chart.js Combo Bar Line Chart'
            },
        }
    });


});
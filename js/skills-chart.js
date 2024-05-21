$(document).ready(function () {
    var theme = $('html').attr('data-theme');
    const HTMLelement = $('#skillsChart')[0];

    const data = {
        labels: [
            'PHP',
            'JS',
            'C#',
            'Laravel',
            'ASP.NET',
            'HTML/CSS',
            'CI/CD',
            'Security',
            'Scrum'
        ],
        datasets: [{
            label: 'Percentage',
            data: [71, 60, 41, 68, 38, 70, 81, 34, 100],
            fill: true,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgb(255, 99, 132)',
            pointBackgroundColor: 'rgb(255, 99, 132)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(255, 99, 132)'
        }]
    };

    const config = {
        type: 'radar',
        data: data,
        options: {
            scales: {
                r: {
                    angleLines: {
                        color: theme === 'dark' ? 'rgba(255, 255, 255, 0.2)' : 'rgba(0, 0, 0, 0.1)'
                    },
                    grid: {
                        color: theme === 'dark' ? 'rgba(255, 255, 255, 0.2)' : 'rgba(0, 0, 0, 0.1)'
                    },
                    pointLabels: {
                        color: theme === 'dark' ? 'white' : 'black'
                    },
                    ticks: {
                        backdropColor: theme === 'dark' ? 'rgba(0, 0, 0, 0.5)' : 'rgba(255, 255, 255, 0.5)',
                        color: theme === 'dark' ? 'white' : 'black'
                    }
                }
            },
            elements: {
                line: {
                    borderWidth: 3
                }
            },
            animation: {
                duration: 1000,
                easing: 'linear',
            }
        }
    };

    // Store chart in global variable
    window.skillsChart = new Chart(HTMLelement, config);
});

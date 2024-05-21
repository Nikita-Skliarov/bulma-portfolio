// Update colors of skills chart
function changeChartColor(theme, chart) {
  if (theme === 'dark') {
    chart.options.scales.r.angleLines.color = 'rgba(255, 255, 255, 0.2)';
    chart.options.scales.r.grid.color = 'rgba(255, 255, 255, 0.2)';
    chart.options.scales.r.pointLabels.color = 'white';
    chart.options.scales.r.ticks.backdropColor = 'rgba(0, 0, 0, 0.5)';
    chart.options.scales.r.ticks.color = 'white';
  } else {
    chart.options.scales.r.angleLines.color = 'rgba(0, 0, 0, 0.1)';
    chart.options.scales.r.grid.color = 'rgba(0, 0, 0, 0.1)';
    chart.options.scales.r.pointLabels.color = 'black';
    chart.options.scales.r.ticks.backdropColor = 'rgba(255, 255, 255, 0.5)';
    chart.options.scales.r.ticks.color = 'black';
  }
  chart.update();
}

// Function to toggle between light and dark mode
function toggleTheme() {
  const htmlElement = $('html');
  const themeIcon = $('#theme-toggle i');
  themeIcon.addClass('sun-moon-icon');
  if (htmlElement.attr('data-theme') === 'dark') {
    changeChartColor('light', window.skillsChart);
    htmlElement.attr('data-theme', 'light');
    themeIcon.removeClass('fa-moon').addClass('fa-lightbulb');
  } else {
    changeChartColor('dark', window.skillsChart);
    htmlElement.attr('data-theme', 'dark');
    themeIcon.removeClass('fa-lightbulb').addClass('fa-moon');
  }
  // Wait 500ms before animation to complete
  setTimeout(() => {
    themeIcon.removeClass('sun-moon-icon');
  }, 500);
}

// Event listener for theme toggle button
$('#theme-toggle').on('click', function () {
  toggleTheme();
});

// Detect user's theme and update the toggle button icon accordingly
if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
  $('#theme-toggle i').removeClass('fa-lightbulb').addClass('fa-moon');
}

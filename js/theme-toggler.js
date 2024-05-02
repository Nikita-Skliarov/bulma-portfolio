// Function to toggle between light and dark mode
function toggleTheme() {
  const htmlElement = $('html');
  if (htmlElement.attr('data-theme') === 'dark') {
    htmlElement.attr('data-theme', 'light');
    $('#theme-toggle i').addClass('sun-moon-icon');
    // Wait 500ms before animation to complete
    setTimeout(() => {
      $('#theme-toggle i').removeClass('sun-moon-icon');
    }, 500);
    $('#theme-toggle i').removeClass('fa-moon').addClass('fa-lightbulb');

  } else {
    htmlElement.attr('data-theme', 'dark');
    $('#theme-toggle i').addClass('sun-moon-icon');
    // Wait 500ms before animation to complete
    setTimeout(() => {
      $('#theme-toggle i').removeClass('sun-moon-icon');
    }, 500);
    $('#theme-toggle i').removeClass('fa-lightbulb').addClass('fa-moon');

  }
}

// Event listener for theme toggle button
$('#theme-toggle').on('click', function () {
  toggleTheme();
});

// Detect user's theme and update the toggle button icon accordingly
if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
  $('#theme-toggle i').removeClass('fa-lightbulb').addClass('fa-moon');
}
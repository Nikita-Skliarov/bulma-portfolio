// Function to toggle between light and dark mode
function toggleTheme() {
  const htmlElement = $('html');
  const themeIcon = $('#theme-toggle i');
  themeIcon.addClass('sun-moon-icon');
  if (htmlElement.attr('data-theme') === 'dark') {
    htmlElement.attr('data-theme', 'light');
    themeIcon.removeClass('fa-moon').addClass('fa-lightbulb');
  } else {
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

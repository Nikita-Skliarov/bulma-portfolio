// Make tabs active on click and change content accordingly
$('.tab').on('click', function () {
    $('.tab').removeClass('is-active');
    $(this).addClass('is-active');

    const tabContent = $(this).data('tab');
    $('#tab-content section').removeClass('is-active');
    $(`#tab-content section[data-content="${tabContent}"]`).addClass('is-active');
});

// Smooth scroll of hyperlinks
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

// Navbar buttons script
const tabButtons = $('.tab-button');
tabButtons.on('click', function () {
    // Scroll to section 'tabs'
    $('html, body').animate({
        scrollTop: $('#tabs').offset().top
    }, 500);

    // Open following tab
    const tab = $(this).data('tab');
    $('.tab').removeClass('is-active');
    $(`.tab[data-tab="${tab}"]`).addClass('is-active');
    // Show following tab
    $('#tab-content section').removeClass('is-active');
    $(`#tab-content section[data-content="${tab}"]`).addClass('is-active');
});

// Validate email input
const emailInput = $('#emailInput');
emailInput.on('input', function () {
    const email = emailInput.val();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const emailDangerText = $('#emailDanger');
    const submitButton = $('#submitButton');

    // Check if email is valid
    if (emailPattern.test(email)) {
        emailInput.removeClass('is-danger');
        emailInput.addClass('is-success');

        // Hide invalid email message
        emailDangerText.removeClass('is-display-block');
        emailDangerText.addClass('is-display-none');

        // Enable submit button if it disabled
        submitButton.prop('disabled', false);
    } else {
        emailInput.removeClass('is-success');
        emailInput.addClass('is-danger');
        emailDangerText.addClass('is-display-block');

        // Disable submit button if email is invalid
        submitButton.prop('disabled', true);
    }
});

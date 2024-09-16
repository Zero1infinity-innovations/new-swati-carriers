
// notifications
function showNotification(type, message) {
    // Determine which notification to show
    var notification = (type === 'success') ? '#success-message' : '#error-message';
    var messageSpan = (type === 'success') ? '#success-text' : '#error-text';
    
    // Set the custom message
    $(messageSpan).text(message);
    
    // Hide all notifications initially
    $('#success-message').hide();
    $('#error-message').hide();
    
    // Show the selected notification
    $(notification).show().addClass('show');
    
    // Hide the notification after 5 seconds
    setTimeout(function() {
        $(notification).removeClass('show').addClass('hide');
        setTimeout(function() {
            $(notification).hide();
        }, 500); // Time to wait for the fade-out animation to complete
    }, 5000); // Duration to show the notification
}
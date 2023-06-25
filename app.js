$(document).ready(function() {
    // Intercept the form submission event
    $('#feedback-form').submit(function(e) {
        e.preventDefault();
      
        // Send an AJAX request to submit.php with form data
        $.ajax({
            type: "POST",
            url: "submit-form.php",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(data) {
                // Display the response message in feedback-messages div
                $('#feedback-messages').html(data);
                // Clear the form
                // $('#feedback-form')[0].reset();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
});
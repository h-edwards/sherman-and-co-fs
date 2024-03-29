$(document).ready(function () {
    $("#contactForm").submit(function (e) {
        e.preventDefault();
        var postData = $(this).serializeArray(),
            formURL = $(this).attr("action"),
            $cfResponse = $('#contactFormResponse'),
            $cfsubmit = $("#contact-button"),
            cfsubmitText = $cfsubmit.text();
        $cfsubmit.text("Sending...");
        $.ajax(
            {
                url: formURL,
                type: "POST",
                data: postData,
                success: function (data) {
                    $cfResponse.html(data);
                    $cfsubmit.text(cfsubmitText);
                },
                error: function (data) {
                    alert("Error occurd! Please try again");
                }
            });
        return false;
    });
});

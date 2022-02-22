$(document).ready(() => {
    /**
     * Newsletter Subscription
     */
    $(".button_newsletter").click(function () {

        if (grecaptcha.getResponse() != "") {
            $.ajax({
                url: "/subscription",
                type: "POST",
                data: {
                    subs_email: $(".input_newsletter").val(),
                    captcha: grecaptcha.getResponse(),
                },
                success: function (result) {
                    $(".input_newsletter").addClass("is-valid");
                    $(".input_newsletter").removeClass("is-invalid");
                    $(".input-newsletter-valid").text(result.message);
                },
                error: function (err) {
                    $(".input-newsletter-invalid").text(
                        err.responseJSON.errors.subs_email[0]
                    );
                    $(".input_newsletter").removeClass("is-valid");
                    $(".input_newsletter").addClass("is-invalid");
                },
            });
        } else {
            $(".input-newsletter-invalid").text("Can't Validate Captcha");
            $(".input_newsletter").addClass("is-invalid");
        }
    });
});

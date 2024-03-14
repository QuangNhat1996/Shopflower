<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email Cancel</title>

</head>

<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <h2 style="color: #333;">Dear {{ session('user_name_cancel_email') }}</h2>
        <h3>
            We have received your request to cancel the order: {{ session('order_no_cancel_email') }}</h3>
        <h5>We sincerely apologize for any inconvenience caused by the cancellation of your order. We have received your
            request to cancel, and we confirm that the cancellation process has been successfully completed.</h5>
        <h5>
            Dear {{ session('user_name_cancel_email') }},

            We sincerely apologize for any inconvenience caused by the cancellation of your order. We have received your
            request to cancel, and we confirm that the cancellation process has been successfully completed.

            Should you have any questions or concerns, please do not hesitate to contact us immediately for further
            assistance. We deeply regret any inconvenience this may have caused and hope for the opportunity to serve
            you in the future.</h5>

        <p style="color: #666;">Best regards,,<br>E-FLOWER Website</p>
    </div>
</body>


</html>

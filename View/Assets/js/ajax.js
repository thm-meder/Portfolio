$(document).ready(function() {

    $("#submit").click(function() {
        $ajax({
            type: POST,
            url: mailer.php,
            data: [$name='#name2', $email='#email2', $message='#ùessage2'],
            success: $("#name2").val('');

        });
    });
});

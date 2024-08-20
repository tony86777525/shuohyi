<div style="width: 640px; margin: 0 auto; color: #333;">
    {!! __('email.detail', [
        'name' => $name,
        'sex' => __("email.sex.$sex"),
        'phone' => $phone,
        'toEmail' => $email,
        'contact' => $contact,
        'email' => env('MAIL_USERNAME'),
        ]) !!}

    <div style="margin: 20px auto 0">
        <img
            style="width:100%; height:auto;"
            width="100%"
            height="auto"
            src="{{ url("img/img-email-logoAndLine.jpg") }}" alt=""
        >
    </div>
</div>


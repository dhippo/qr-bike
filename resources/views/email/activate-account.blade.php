@component('mail::message')
# WELCOME TO OUR WEBSITE

Thank you for your interest in our website.

## Click below to start creating your first QR CODE


@component('mail::button', ['url' => route('welcome', ['token' =>  $token])])
Activation
@endcomponent

Thanks,<br>
{{-- config('app.name') --}}
@endcomponent

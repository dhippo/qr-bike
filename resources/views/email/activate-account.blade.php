@component('mail::message')
# WELCOME TO OUR WEBSITE

Thank you for your interest in our website.

## Click below to start creating your first QR CODE

{{-- EXAMPLE OF AN URL url("/posts/{$post->id}");   --}}
@component('mail::button', ['url' => 'localhost/welcome'])
Activation
@endcomponent

Thanks,<br>
{{-- config('app.name') --}}
@endcomponent

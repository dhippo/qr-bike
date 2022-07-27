@component('mail::message')
# Welcome to MYQR.CODE

Click on the button bellow to activate your account and start creating your own QR code. .

@component('mail::button', ['url' => route('welcome', ['token' =>  $token])])
Validate
@endcomponent

Thanks
@endcomponent

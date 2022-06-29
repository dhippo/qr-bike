@component('mail::message')
# Introduction

YOU JUST SUSCRIBE

@component('mail::button', ['url' => $url])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Bonjour

- {{$msg->nom}}
- {{$msg->email}}

@component('mail::panel')
{{$msg->message}}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent

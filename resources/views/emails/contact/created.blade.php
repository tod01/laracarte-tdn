@component('mail::message')
# Hey TOD

- {{$msg->name}}
- {{$msg->email}}

@component('mail::panel')
{{$msg->message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

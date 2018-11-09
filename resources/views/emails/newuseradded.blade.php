@component('mail::message')
# Hi {{$user->username}}

Your account has been created.<br>
username : {{$user->username}}<br>
email : {{$user->email}}<br>
password : {{$password}}<br>

@component('mail::button', ['url' => route('auth.login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Introduction

We just received a request to reset your password at {{config('app.name')}}

@component('mail::button', ['url' => route('auth.reset.password',$user->reset_password_code)])
Reset Password Now
@endcomponent

if you don't request a password reset, please ignore this email. This email is valid only for next 30 minutes.

Thanks,<br>
{{ config('app.name') }}
@endcomponent

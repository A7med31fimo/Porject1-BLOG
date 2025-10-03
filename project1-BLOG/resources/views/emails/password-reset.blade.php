@component('mail::message')
# Reset Your Password 🔒

Hi,

You requested to reset your password. Click the button below to reset it:

@component('mail::button', ['url' => url('/reset-password/'.$token).'?email='.$email])
Reset Password
@endcomponent

If you didn’t request this, you can safely ignore this email.

Thanks,
{{ config('app.name') }}
@endcomponent
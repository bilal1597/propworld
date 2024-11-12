<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{!! $body !!}</p>
</body>
</html>


{{-- @component('mail::message')
    Hey, {{$user ->name}}. Forgot Your Password?
    <p>
        Click the link to reset your Passsword
    </p>
    @component('mail::button', ['url'=> url('reset/' .$user ->email )])
    Reset Your Password
    @endcomponent
    <p>In Case of any Issue, Please contact Us</p>
{{config('app.name')}}
@endcomponent --}}



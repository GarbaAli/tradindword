@component('mail::message')
Hello, <strong>{{ $mail['username'] }}</strong>

Welcome to  <strong style="color:#141414">TRADINGWORD</strong><strong style="color:#041334">INVEST</strong>

<p style="font-align:justify">
Congratulations, your account has been successfully opened. <br>

click on this link, it will take you to where you will copy your deposit code

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
<strong style="color:#141414">TRADINGWORD</strong><strong style="color:#041334">INVEST</strong>
@endcomponent

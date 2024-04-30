<x-mail::message>
# Hello, you have got an enquiry!

<h1>You have received an email</h1>

<h4>Name: {{ $mailData['name'] }}</h4>
<h4>Email: {{ $mailData['email'] }}</h4>
<h4>Subject: {{ $mailData['subject'] }}</h4>
<h4>Message: </h4>
<h4> {{ $mailData['message'] }} </h4>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

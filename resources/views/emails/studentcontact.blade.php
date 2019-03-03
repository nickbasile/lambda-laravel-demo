@component('mail::message')
# Congratulations!

You have a new job lead 😁

Here are the details:

<strong>Name</strong><br>
{{ $details['name'] }}

<strong>Company</strong><br>
{{ $details['company'] }}

<strong>Email</strong><br>
{{ $details['email'] }}

<strong>Message</strong><br>
{{ $details['message'] }}


If this looks like a good fit, reach out to them soon!

Good luck,<br>
Lambda School
@endcomponent

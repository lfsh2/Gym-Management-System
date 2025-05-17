@component('mail::message')
# New Contact Form Submission

You have received a new contact form submission:

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Phone:** {{ $data['phone'] }}  
**Subject:** {{ $data['subject'] }}

**Message:**  
{{ $data['message'] }}

@component('mail::button', ['url' => config('app.url')])
View Admin Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
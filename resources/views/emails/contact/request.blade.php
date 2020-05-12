@component('mail::message')
# &#128075; Huhuu, <br>
eine neue Kontaktanfrage (ip: {{ $contact->ip_address }}) von ist soeben reingeflattert. &#129409;

@component('mail::table')
| Key | Value |
| --- | ---: |
| **Vorname** | {{ $contact->first_name }} |
| **Nachname** | {{ $contact->surname }} |
&NonBreakingSpace;
| **Telefon** | {{ $contact->phone }} |
| **E-Mail** | {{ $contact->email }} |

| Message |
| --- |
| {{ $contact->message }} |
@endcomponent

&nbsp;

**Thanks,**
![Herz&Hand24](https://herzundhand24.de/favicon/favicon-16x16.png "Herz&Hand24 Logo")<br>
{{ config('app.name') }}
@endcomponent
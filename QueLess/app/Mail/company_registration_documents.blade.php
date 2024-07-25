@component('mail::message')
    # Company Registration Documents

    Dear {{ $companyRegistration->fullname }},

    Your company name reservation has been approved and the required documents are attached to this email.

    @component('mail::button', ['url' => route('company_registration.details', $companyRegistration->id)])
        View Details
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent

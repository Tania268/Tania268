<?php

namespace App\Mail;

use App\Models\CompanyRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompanyRegistrationDocuments extends Mailable
{
    use Queueable, SerializesModels;

    public $companyRegistration;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CompanyRegistration $companyRegistration)
    {
        $this->companyRegistration = $companyRegistration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject('Company Registration Documents')
                      ->view('Mail.company_registration_documents')
                      ->with('companyRegistration', $this->companyRegistration);

        // Attach documents
        foreach ($this->companyRegistration->documents as $document => $path) {
            $email->attach(storage_path('app/public/' . $path), [
                'as' => ucfirst(str_replace('_', ' ', $document)) . '.pdf',
                'mime' => 'application/pdf',
            ]);
        }

        return $email;
    }
}

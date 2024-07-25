<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyRegistration;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompanyRegistrationDocuments;

class CompanyRegistrationController extends Controller
{
    /**
     * Show the company registration form.
     *
     * @return \Illuminate\View\View
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForm()
    {
        return view('company_registration.create');
    }

    /**
     * Store a newly created company registration in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'physical_address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'company_name' => 'required|string|max:255',
            'application_letter' => 'required|file|mimes:pdf|max:2048',
        ]);

        // Handle file upload
        $applicationLetterPath = $request->file('application_letter')->store('application_letters', 'public');

        // Store application in database
        $companyRegistration = CompanyRegistration::create([
            'fullname' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'physical_address' => $validatedData['physical_address'],
            'phone_number' => $validatedData['phone_number'],
            'company_name' => $validatedData['company_name'],
            'application_letter' => $applicationLetterPath,
        ]);

        // Assuming the reservation is successful and payment is made
        $companyRegistration->update([
            'reservation_status' => 'approved',
            'payment_status' => true,
        ]);

        // Send email with documents
        $documents = [
            'memorandum_of_association' => 'path/to/memorandum_of_association.pdf',
            'reservation_application_reply' => 'path/to/reservation_application_reply.pdf',
            'form_E_TF_42' => 'path/to/form_E_TF_42.pdf',
        ];
        $companyRegistration->update(['documents' => $documents]);

        Mail::to($companyRegistration->email)->send(new CompanyRegistrationDocuments($companyRegistration));

        // Redirect with success message
        return redirect()->route('company_registration.details', $companyRegistration->id)->with('success', 'Company name reserved successfully!');
    }

    /**
     * Show the details of a company registration.
     *
     * @param  \App\Models\CompanyRegistration  $companyRegistration
     * @return \Illuminate\View\View
     */
    public function show(CompanyRegistration $companyRegistration)
    {
        return view('company_registration.details', compact('companyRegistration'));
    }
}

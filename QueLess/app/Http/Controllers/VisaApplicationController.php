<?php

namespace App\Http\Controllers;

use App\Models\VisaApplication;
use Illuminate\Http\Request;

class VisaApplicationController extends Controller
{
    public function showForm()
    {
        return view('visa.application_form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'email_address' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'completed_form' => 'required|file|mimes:pdf|max:2048',
            'police_certificate' => 'required|file|mimes:pdf|max:2048',
            'passport_photo_1' => 'required|file|mimes:jpeg,png|max:2048',
            'passport_photo_2' => 'required|file|mimes:jpeg,png|max:2048',
            'medical_references' => 'required|file|mimes:pdf|max:2048',
            'employer_motivation_letter' => 'required|file|mimes:pdf|max:2048',
            'qualification_copies' => 'required|file|mimes:pdf|max:2048',
            'position_proof' => 'required|file|mimes:pdf|max:2048',
        ]);

        $data = $request->all();

        // Handle file uploads
        foreach (['completed_form', 'police_certificate', 'passport_photo_1', 'passport_photo_2', 'medical_references', 'employer_motivation_letter', 'qualification_copies', 'position_proof'] as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store('visa_application_uploads', 'public');
            }
        }

        // Save application data to database
        $visaApplication = new VisaApplication();
        $visaApplication->fill($data);
        $visaApplication->user_id = auth()->id();
        $visaApplication->save();

        return redirect()->route('visa.application')->with('success', 'Visa application submitted successfully!');
    }

    public function viewApplications()
    {
        $applications = VisaApplication::where('user_id', auth()->id())->get();
        return view('visa.view_applications', compact('applications'));
    }
}

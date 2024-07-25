<?php

namespace App\Http\Controllers;

use App\Models\CitizenshipApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CitizenshipApplicationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForm()
    {
        return view('citizenship.form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'class' => 'required|string',
            'application_form' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'finger_prints' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'covering_letter' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'passport_photo_1' => 'required|file|mimes:jpg,png|max:2048',
            'passport_photo_2' => 'required|file|mimes:jpg,png|max:2048',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();

        $data['application_form'] = $request->file('application_form')->store('citizenship_applications', 'public');
        $data['finger_prints'] = $request->file('finger_prints')->store('citizenship_applications', 'public');
        $data['covering_letter'] = $request->file('covering_letter')->store('citizenship_applications', 'public');
        $data['passport_photo_1'] = $request->file('passport_photo_1')->store('citizenship_applications', 'public');
        $data['passport_photo_2'] = $request->file('passport_photo_2')->store('citizenship_applications', 'public');

        if ($request->file('residence_permit_or_birth_certificate')) {
            $data['residence_permit_or_birth_certificate'] = $request->file('residence_permit_or_birth_certificate')->store('citizenship_applications', 'public');
        }

        if ($request->file('covering_letter_from_husband')) {
            $data['covering_letter_from_husband'] = $request->file('covering_letter_from_husband')->store('citizenship_applications', 'public');
        }

        if ($request->file('husband_birth_certificate')) {
            $data['husband_birth_certificate'] = $request->file('husband_birth_certificate')->store('citizenship_applications', 'public');
        }

        if ($request->file('marriage_certificate')) {
            $data['marriage_certificate'] = $request->file('marriage_certificate')->store('citizenship_applications', 'public');
        }

        if ($request->file('birth_certificate')) {
            $data['birth_certificate'] = $request->file('birth_certificate')->store('citizenship_applications', 'public');
        }

        CitizenshipApplication::create($data);

        return redirect()->route('citizenship.form')->with('success', 'Form submitted successfully!');
    }

    public function viewApplications()
    {
        $applications = CitizenshipApplication::with('user')->get();
        return view('citizenship.view', compact('applications'));
    }
    public function showDetails($id)
    {
        $applications = CitizenshipApplication::findOrFail($id);
        return view('citizenship.view', compact('applications'));
    }
}

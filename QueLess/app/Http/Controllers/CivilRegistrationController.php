<?php

namespace App\Http\Controllers;

use App\Models\CivilRegistration;
use Illuminate\Http\Request;

class CivilRegistrationController extends Controller
{

    public function index()
    {
        $civilRegistrations = CivilRegistration::where('user_id', auth()->id())->get();

        return view('civil.view', compact('civilRegistrations'));
    }


    public function submitForm(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'email_address' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'id_or_passport' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'proof_of_residence' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'picture_or_photo' => 'required|file|mimes:jpg,png|max:2048',
            'witness_1' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
            'witness_2' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
            'proof_of_birth' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        ]);

        // Handle file uploads
        $idOrPassport = $request->file('id_or_passport')->store('uploads', 'public');
        $proofOfResidence = $request->file('proof_of_residence')->store('uploads', 'public');
        $pictureOrPhoto = $request->file('picture_or_photo')->store('uploads', 'public');
        $witness1 = $request->file('witness_1') ? $request->file('witness_1')->store('uploads', 'public') : null;
        $witness2 = $request->file('witness_2') ? $request->file('witness_2')->store('uploads', 'public') : null;
        $proofOfBirth = $request->file('proof_of_birth') ? $request->file('proof_of_birth')->store('uploads', 'public') : null;

        // Store form information in the database
        $civilRegistration = new CivilRegistration();
        $civilRegistration->user_id = auth()->id();
        $civilRegistration->full_name = $request->input('full_name');
        $civilRegistration->age = $request->input('age');
        $civilRegistration->email_address = $request->input('email_address');
        $civilRegistration->phone_number = $request->input('phone_number');
        $civilRegistration->id_or_passport = $idOrPassport;
        $civilRegistration->proof_of_residence = $proofOfResidence;
        $civilRegistration->picture_or_photo = $pictureOrPhoto;
        $civilRegistration->witness_1 = $witness1;
        $civilRegistration->witness_2 = $witness2;
        $civilRegistration->proof_of_birth = $proofOfBirth;
        $civilRegistration->save();

        return redirect()->route('civil.index')->with('success', 'Civil registration form submitted successfully!');
    }

    public function showDetails($id)
    {
        $civilRegistration = CivilRegistration::findOrFail($id);
        return view('civil.view', compact('CivilRegistration'));
    }
}

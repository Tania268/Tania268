<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NationalID;

class NationalIDController extends Controller
{
    /**
     * Store a newly created national ID application in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitForm(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'physical_address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'applicant_type' => 'required|string|in:liswati,non_liswati',
            'age' => 'required|integer|min:0',
            // Add validation rules for uploaded files
            // Example: 'birth_certificate' => 'required|file|mimes:pdf|max:2048',
        ]);

        // Handle file uploads
        $documents = [];
        foreach ($request->file() as $key => $file) {
            $documents[$key] = $file->store('documents', 'public');
        }

        // Calculate total fee
        $totalFee = $this->calculateTotalFee($validatedData['age']);

        // Store application in database
        $nationalID = NationalID::create([
            'fullname' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'physical_address' => $validatedData['physical_address'],
            'phone_number' => $validatedData['phone_number'],
            'applicant_type' => $validatedData['applicant_type'],
            'age' => $validatedData['age'],
            'documents' => $documents,
            'total_fee' => $totalFee,
        ]);

        // Redirect with success message
        return redirect()->route('nationalID.form', $nationalID->id)->with('success', 'National ID application submitted successfully!');
    }

    public function showDetails($id)
    {
        $nationalID = NationalID::findOrFail($id);
        return view('nationalID.details', compact('passport'));
    }

    /**
     * Update the specified national ID application in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NationalID  $nationalID
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, NationalID $nationalID)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'physical_address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'applicant_type' => 'required|string|in:liswati,non_liswati',
            'age' => 'required|integer|min:0',
            // Add validation rules for uploaded files
            // Example: 'birth_certificate' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Handle file uploads
        $documents = $nationalID->documents ?? [];
        foreach ($request->file() as $key => $file) {
            $documents[$key] = $file->store('documents', 'public');
        }

        // Calculate total fee
        $totalFee = $this->calculateTotalFee($validatedData['age']);

        // Update application in database
        $nationalID->update([
            'fullname' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'physical_address' => $validatedData['physical_address'],
            'phone_number' => $validatedData['phone_number'],
            'applicant_type' => $validatedData['applicant_type'],
            'age' => $validatedData['age'],
            'documents' => $documents,
            'total_fee' => $totalFee,
        ]);

        // Redirect with success message
        return redirect()->route('nationalID.form', $nationalID->id)->with('success', 'National ID application updated successfully!');
    }


    /**
     * Calculate total fee based on applicant's age.
     *
     * @param int $age
     * @return float
     */
    private function calculateTotalFee($age)
    {
        if ($age >= 16) {
            return 300.00 + 50.00; // E300 for applicants 16 years and above
        } else {
            return 0; // National ID is free for applicants below 16 years
        }
    }
}


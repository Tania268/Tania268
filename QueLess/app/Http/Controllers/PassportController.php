<?php

namespace App\Http\Controllers;

use App\Models\Passport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PassportController extends Controller
{
    public function showForm()
    {
        return view('passport.form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'physical_address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'department' => 'required|string',
            'documents.*' => 'file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $documents = [];
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $key => $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('documents', $fileName, 'public');
                $documents[$key] = $filePath;
            }
        }

        Passport::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'physical_address' => $request->physical_address,
            'phone_number' => $request->phone_number,
            'department' => $request->department,
            'documents' => $documents,
        ]);

        return redirect()->route('passport.form')->with('success', 'Form submitted successfully!');
    }

    public function showDetails($id)
    {
        $passport = Passport::findOrFail($id);
        return view('passport.details', compact('passport'));
    }
}

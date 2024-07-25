<?php
namespace App\Http\Controllers;

use App\Models\SubmittedForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class TradingLicenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForm()
    {
        return view('trading.form');
    }

    public function submitForm(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'physical_address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email_address' => 'required|email|max:255',
            'uploaded_form' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Handle file upload
        $file = $request->file('uploaded_form');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploaded_forms', $fileName, 'public');

        // Log file path and name
        Log::info("File uploaded: $fileName, path: $filePath");

        // Store form information in the database
        $submittedForm = new SubmittedForm();
        $submittedForm->user_id = auth()->id(); // Assuming the user is authenticated
        $submittedForm->full_name = $request->input('full_name');
        $submittedForm->age = $request->input('age');
        $submittedForm->physical_address = $request->input('physical_address');
        $submittedForm->phone_number = $request->input('phone_number');
        $submittedForm->email_address = $request->input('email_address');
        $submittedForm->file_name = $fileName;
        $submittedForm->file_path = $filePath;

        // Log data before saving
        Log::info('Form Data: ', $submittedForm->toArray());

        $submittedForm->save();

        // Log after save
        Log::info('Form saved successfully.');

        // Redirect to payment page with form ID
        return redirect()->route('payment', ['formId' => $submittedForm->id]);
    }

    public function viewSubmittedForms()
    {
        // Fetch all submitted forms with user information
        $submittedForms = SubmittedForm::with('user')->get();
        return view('trading.form', compact('submittedForms'));
    }

    public function showDetails($id)
    {
        $submittedForms = SubmittedForm::findOrFail($id);
        return view('trading.view-uploads', compact('passport'));
    }

    public function downloadForm()
    {
        $filePath = public_path('https://drive.google.com/file/d/1bG1ybWpyk7cnXs3eO4-RbqvKPDVFe_re/view?usp=drive_link'); // Path to the form file

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return redirect()->route('trading.form')->with('error', 'Form not found.');
        }
    }
}

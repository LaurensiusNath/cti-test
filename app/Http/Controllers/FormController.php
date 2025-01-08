<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showLanding()
    {
        return view('landing');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'industry' => 'required|string|in:tech,education,engineering',
            'phone' => 'required|string|max:15',
            'agreement' => 'accepted', // Ensure the checkbox is checked
        ]);

        // You can save the data to the database if needed
        // Example: FormModel::create($validated);

        // Redirect to the confirmation page
        return redirect()->route('form.confirmation');
    }

    public function confirmation()
    {
        // Return the confirmation page view
        return view('confirmation');
    }
}

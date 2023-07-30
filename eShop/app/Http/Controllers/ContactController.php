<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Message' => 'required|string',
        ]);

        // Save the data to the database
        $contact = Contact::create([
            'name' => $validatedData['Name'],
            'email' => $validatedData['Email'],
            'message' => $validatedData['Message'],
        ]);

        // Return a response with a success message
        return response()->json([
            'status' => 'success',
            'message' => 'Cám ơn bạn đã đóng góp. Biểu mẫu lời nhắn của bạn đã được gửi lên quản trị viên!',
            'contact' => $contact, // You can include the saved contact in the response if needed
        ]);
    }

    public function showContacts()
    {
        $contacts = Contact::all();
        return view('show_contacts', compact('contacts'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Opinion;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('admin.contact.index', compact('contacts'));
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contact.index')->with('success', __('Message deleted successfully'));
    }
}

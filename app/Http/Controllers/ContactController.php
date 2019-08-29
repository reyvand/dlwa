<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function addContact(Request $request) {
        $db = new Contact;
        $db->contacts_name = $request->name;
        $db->contacts_email = $request->email;
        $db->contacts_message = $request->message;
        $db->save();
        return redirect('/contact')->with('success','Thank you. Admin will review your thoughts.');
    }
}

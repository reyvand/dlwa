<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $db = new Contact;
        $data = $db::all();
        return view('/admin/contacts')->with('data',$data);
    }

    public function delete($id) {
        $db = new Contact;
        $data = $db::find($id);
        $data->delete();
        return redirect('/admin/messages');
    }

    public function addContact(Request $request) {
        $db = new Contact;
        $db->contacts_name = $request->name;
        $db->contacts_email = $request->email;
        $db->contacts_message = $request->message;
        $db->save();
        return redirect('/contact')->with('success','Thank you. Admin will review your thoughts.');
    }
}

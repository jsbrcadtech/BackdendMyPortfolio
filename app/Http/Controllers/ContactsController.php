<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function list()
    {
        return view('contacts.list', [
            'contacts' => Contact::all()
        ]);
    }

    public function addForm()
    {

        return view('contacts.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $contact = new Contact();
        $contact->email = $attributes['email'];
        $contact->phone = $attributes['phone'];
        $contact->address = $attributes['address'];
        $contact->save();

        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been added!');
    }

    public function editForm(Contact $contact)
    {
        return view('contacts.edit', [
            'contact' => $contact,
        ]);
    }

    public function edit(Contact $contact)
    {

        $attributes = request()->validate([
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $contact->email = $attributes['email'];
        $contact->phone = $attributes['phone'];
        $contact->address = $attributes['address'];
        $contact->save();

        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been edited!');
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        
        return redirect('/console/contacts/list')
            ->with('message', 'Contact has been deleted!');        
    }
}

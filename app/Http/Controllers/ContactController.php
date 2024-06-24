<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contacts.index', ['contacts' => $contacts]);
    }

    public function create(){
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'notes' => 'nullable|string|max:1000',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $avatarPath;
        }

        $newContact = Contact::create($data);

        return redirect(route('contact.index'));
    }

    public function edit(Contact $contact){
        return view('contacts.edit', ['contact' => $contact]);
    }

    public function update(Contact $contact, Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'notes' => 'nullable|string|max:1000',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $avatarPath;
        }

        $contact->update($data);

        return redirect(route('contact.index'))->with('success', 'Contact Updated Successfully!');

    }

    public function delete(Contact  $contact){
        $contact->delete();

        return redirect(route('contact.index'))->with('success', 'Contact Deleted Successfully!');
    }

}

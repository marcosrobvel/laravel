<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'photo' => ['required', 'url'],
            'date' => ['required', 'date'],
            'customer' => ['required', 'string', 'max:255'],
            'mail' => ['required', 'email'],
            'phone' => ['required', 'string', 'max:20'],
            'subject' => ['required', 'string'],
            'subject_custom' => ['nullable', 'string', 'max:255'],
            'comment' => ['required', 'string'],
            'status' => ['required', 'in:"","archived"'],
        ]);

        // Si el subject es distinto a "New Subject" usar el subject_custom
        if (isset($data['subject_custom']) && $data['subject'] != 'New Subject') {
            $data['subject'] = $data['subject_custom'];
        }
        unset($data['subject_custom']); // No guardar este campo en BD

        Contact::create($data);

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'photo' => ['required', 'url'],
            'date' => ['required', 'date'],
            'customer' => ['required', 'string', 'max:255'],
            'mail' => ['required', 'email'],
            'phone' => ['required', 'string', 'max:20'],
            'subject' => ['required', 'string'],
            'subject_custom' => ['nullable', 'string', 'max:255'],
            'comment' => ['required', 'string'],
            'status' => ['required', 'in:"","archived"'],
        ]);

        if (isset($data['subject_custom']) && $data['subject'] != 'New Subject') {
            $data['subject'] = $data['subject_custom'];
        }
        unset($data['subject_custom']);

        $contact->update($data);

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}

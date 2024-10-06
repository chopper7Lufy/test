<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('form-input', compact('contacts'));
    }
    public function enter()
    {
        $contacts = Contact::all();

        return view('login', compact('contacts'));
    }
    public function touroku()
    {
        $contacts = Contact::all();

        return view('register', compact('contacts'));
    }

    public function check()
    {
        $contacts = Contact::all();

        return view('form-check', compact('contacts'));
    }
}

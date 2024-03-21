<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'content-type', 'detail']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email',  'address', 'building', 'content-type', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
    public function admin(Request $request)
    {
        return view('admin');
    }
}

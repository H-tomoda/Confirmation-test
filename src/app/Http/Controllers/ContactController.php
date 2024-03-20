<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'gender', 'email', 'tel1', 'address', 'building', 'content-type', 'detail']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'gender', 'email', 'tel1', 'address', 'building', 'content-type', 'detail']);
        return view('thanks', compact('contact'));
    }
}

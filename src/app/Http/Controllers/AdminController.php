<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::simplePaginate(7);
        return view('index', ['contacts' => $contacts]);
    }
}

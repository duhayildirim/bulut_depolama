<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function create(Request $request) {
        $message = new Contact();
        $message->name = $request->name;
        $message->title = $request->title;
        $message->email = $request->email;
        $message->description = $request->description;

        $message->save();

        return view('welcome');;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderAndDataController extends Controller
{
    public function FolderIndex() {
        return view('fad.folder.index');
    }
}

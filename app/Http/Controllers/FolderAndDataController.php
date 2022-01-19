<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderAndDataController extends Controller
{
    public function FolderIndex() {
        return view('fad.folder.index');
    }

    public function FolderCreate() {
        return view('fad.folder.index');
    }

    public function FolderCreatePost() {
        return view('fad.folder.index');
    }

    public function FolderDelete() {
        return view('fad.folder.index');
    }
    public function DataIndex() {
        return view('fad.data.index');
    }
}

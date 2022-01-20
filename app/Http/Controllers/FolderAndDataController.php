<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class FolderAndDataController extends Controller
{
    public function FolderIndex() {
        $folders = Folder::where('user_id',Auth::user()->id)->get();
        View::share('folders',$folders);

        return view('fad.folder.index');
    }

    public function FolderCreate(Request $request) {

        $request->validate([
            'title'=>'required|min:1',
        ]);

        $folder = new Folder();
        $folder->title = $request->title;
        $folder->description = $request->description;
        $folder->user_id = Auth::user()->id;

        $folder->save();

        return redirect()->route('fad.folder.index');

    }

    public function FolderDelete() {
        return view('fad.folder.index');
    }

    public function DataIndex() {
        return view('fad.data.index');
    }

    public function DataCreate() {
        return redirect()->route('fad.data.index');
    }

    public function DataDelete() {
        return view('fad.folder.index');
    }
}

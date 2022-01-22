<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

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

    public function FolderDelete($id) {
        $folders = Folder::where('user_id',Auth::user()->id)->where('id', $id)->first();
        $folders -> delete();

        return redirect()->route('fad.folder.index');
    }

    public function DataIndex($id) {
        $folder = Folder::where('user_id',Auth::user()->id)->where('id', $id)->first();
        $datas = Data::where('user_id',Auth::user()->id)->where('folder_id', $id)->get();

        if ($datas != null) {
            View::share('datas',$datas);
        }

        View::share('folder',$folder);

        return view('fad.data.index');
    }

    public function DataCreate(Request $request) {
       $request->validate([
            'file' => 'required|mimes:xls,xlsx,pdf,doc,docx,mpeg,mpga,mp3,wav,mp4,mov,ogg,jpeg,jpg,png,gif',
       ]);

       $data = new Data();
       $data->folder_id = $request->folder_id;
       $data->user_id = Auth::user()->id;
       $data->type = $request->file->getClientOriginalExtension();

        if($request->hasFile('file')){
            $FileName = Str::slug($request->title).'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('uploads'),$FileName);
            $data->url = '/uploads/'.$FileName;
        }

        $data -> save();

        return back();
    }

    public function DataDelete() {
        return view('fad.folder.index');
    }
}

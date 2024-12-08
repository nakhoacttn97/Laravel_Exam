<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
require_once('Utils.php');

class UploadController extends Controller
{
    function index(){
        return view('upload.index', ['arr' => Category::all()]);
    }
    function add(Request $req){
        if($req->isMethod('post')){
            $f = $req->file('f');
            $ext = $f->extension();
            $fileName = randomString(31 - strlen($ext)).'.'.$ext;
            
            $data = ['ImageUrl' => $fileName,
                    'Size' => $f->getSize(),
                    'OriginalName' => $f->getClientOriginalName(),
                    'Type' => $f->getMimeType()
                    ];
           $f->move('images', $fileName);   
                

            if(Image::create($data)){
                return redirect('/upload');
            }
        }
        return view('upload.add');
    }
}
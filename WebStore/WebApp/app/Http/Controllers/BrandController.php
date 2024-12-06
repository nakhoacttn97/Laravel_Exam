<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
 
class BrandController extends Controller
{
    // load index
    function index(){
        $arr = Brand::all();
        //var_dump($arr);
        $v = view('brand.index', ['arr' => $arr]);
        //var_dump($v);
        return $v;
    }
    // edit method
    function edit(int $id, Request $r){
        $msg = NULL;
        if($r->isMethod('post')){
            $data = $r->validate(['name' => 'required']);
            if(Brand::edit($id, $data)){
                return redirect('/brand');
            }
            $msg = 'Edit Failed';
        }
        return view('brand.edit', ['v' => Brand::findOrFail($id), 'msg' => $msg]);
    }
    // add method
    function add(Request $req){
        $msg = NULL;
        if($req->isMethod('post')){
            $data = $req->validate(['name' => 'required']);
            $ret = Brand::create($data);
            function index(){
                return view('brand.index', ['arr' => Brand::all()]);
            }    if($ret){
                return redirect('/brand');
            }
            $msg = 'Insert Failed';
            //var_dump($ret);
        }
        return view('brand.add', ['msg' => $msg]);
    }
    // load details method
    function details(int $id){
        return view('brand.details', ['v' => Brand::findOrFail($id)]);
    }
    // delete method
    function delete(int $id){
        $ret = Brand::remove($id);
        if($ret){
            return redirect('/brand');
        }
        return redirect('/brand/error');
        //var_dump($ret);
    }
}

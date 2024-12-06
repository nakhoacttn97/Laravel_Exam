<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $arr = Category::all();
        $v = view('category.index', ['arr' => $arr]);
        return $v;
    }
    function edit(int $id, Request $r){
        $msg = NULL;
        if($r->isMethod('post')){
            $data = $r->validate(['category_name' => 'required']);
            if(Category::edit($id, $data)){
                return redirect('/category');
            }
            $msg = 'Edit Failed';
        }
        return view('category.edit', ['v' => Category::find($id), 'msg' => $msg]);
    }
    function add(Request $req){
        $msg = NULL;
        if($req->isMethod('post')){
            $data = $req->validate(['category_name' => 'required']);
            $ret = Category::create($data);
            if($ret){
                return redirect('/category');
            }
            $msg = 'Insert Failed';
            //var_dump($ret);
        }
        return view('category.add', ['msg' => $msg]);
    }
    function delete(int $id){
        $ret = Category::remove($id);
        if($ret){
            return redirect('/category');
        }
        return redirect('/category/error');
        //var_dump($ret);
    }
}

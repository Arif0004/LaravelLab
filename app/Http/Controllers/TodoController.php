<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoAddRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function gotoTodo(){
        return view('TODO.index');
    }
    public function gotoTodoView(){
        return view('TODO.add');
    }
    public function addNewPost(TodoAddRequest $request){

        //dd($request->all());

        Todo::create($request->all());
        return redirect()->back()->with('msg','data add successfully');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    

 function homepage(){
    return view('Homepage');
 }
 public function todos(){
   $todos = Todo::latest()->get();
   
    return view('AllTodos', compact('todos'));
 }

 function storeTodo(Request $request) {
    //*validation
    $request->validate([
      'title' => 'required|min:3|max:10',
      'detail' => 'required|min:10|max:100',
      'date'=> 'after_or_equal:today'
    ], [
      'title.required' => 'please enter the title',
      'title.max' => 'title must be 10 digits'
    ]);

       Todo::create($request->all());
          return to_route('Todos')->with('msg', [
        'type' => 'success',
        'res'  => 'Todo added successfully',
    ]);
 }
}

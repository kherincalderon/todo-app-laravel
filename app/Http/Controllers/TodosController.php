<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * index para mostrar todos los todos
     * store para guardar un todo
     * upadte para actualizar un todo
     * destroy para eliminr un todo
     * edit para mostar el formulario de edición
     */

     public function store(Request $request){
        $request-> validate([
            'title' =>'required|min:3',
        ]);

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success', 'Task added successfully');
     }
}

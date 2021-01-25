<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DbclassController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('employees')->get();
        return view('db', ['items' => $items]);
    }
    public function add(Request $request)
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'id' => $request->id,
            'department' => $request->department,
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'number' => $request->number,
        ];
        DB::table('employees')->insert($param);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::table('employees')->where('id', $request->id)->first();
        return view('edit', ['form' => $item]);
    }
    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'department' => $request->department,
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'number' => $request->number,
        ];
        DB::table('employees')->where('id', $request->id)->update($param);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::table('employees')->where('id', $request->id)->first();
        return view('delete', ['form' => $item]);
    }
    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from employees where id =:id', $param);
        return redirect('/');
    }
}

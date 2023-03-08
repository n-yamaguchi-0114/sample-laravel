<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Operator;
use Illuminate\Support\Facades\Hash;

class OperatorController extends Controller
{
    public function index () {

        $operators = Operator::get();
        return view('operators.index', ['operators' => $operators]);
    }

    public function create () {
        return view('operators.create');
    }

    public function store (Request $request) {
        $operator = new Operator;
        
        $operator->name = $request->name;
        $operator->email = $request->email;
        $operator->password = Hash::make($request->password);
        $operator->role = $request->role;
        $operator->save();

        return redirect(route('operators.index'))->with('success', 'オペレータを作成しました');
    }

    public function show ($id) {
        return view('operators.show', [
            'operator' => Operator::findOrFail($id)
        ]);
    }

    public function edit ($id) {
        return view('operators.edit', [
            'operator' => Operator::findOrFail($id)
        ]);
    }

    public function update (Request $request, $id) {
        $operator = Operator::find($id);
        $operator->name = $request->name;
        $operator->email = $request->email;
        if ($request->has('password')) {
            $operator->password = Hash::make($request->password);
        }
        $operator->role = $request->role;
        $operator->save();

        return redirect(route('operators.index'))->with('success', 'オペレータを更新しました');
    }

}

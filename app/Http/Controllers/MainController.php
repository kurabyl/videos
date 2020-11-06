<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListRequest;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('welcome');
    }

    public function lists($id)
    {
        $lists = Result::all();
        return view('lists',[
            'lists'=>$lists
        ]);
    }

    public function showAdd()
    {
        return view('add_show');
    }
    public function add(ListRequest $request)
    {
        $data = $request->except(['_method', '_token']);

        if (Result::create($data)) {
             return redirect()->back()->with('success','Успешно добавлено!');
        }

        return redirect()->back()->with('error','Попробуйте позже!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}

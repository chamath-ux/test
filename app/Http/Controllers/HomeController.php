<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::where('role',2)->get();
        return view('home')->with(['users'=>$users]);
    }
    public function store(Request $request){


        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'telephone'=>$request['tel'],
            'comment'=>$request['comment'],
            'current_route'=>$request['route'],
            'role'=>2
        ]);

            return ['Successfully inserted'];


    }
}

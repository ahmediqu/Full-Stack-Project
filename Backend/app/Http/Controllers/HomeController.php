<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Examination;
use App\Models\Program;
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
        $data = [];
        $data['programs'] = Program::all();
        $data['boards'] = Board::all();
        $data['examinations'] = Examination::all();

        return view('home',$data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Services\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{

    public function __construct(StudentService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {

        $this->service
            ->setAttrs($request->all())
            ->store();

        Session::flash('message', 'Successfully Saved!');
        return back();

    }



}

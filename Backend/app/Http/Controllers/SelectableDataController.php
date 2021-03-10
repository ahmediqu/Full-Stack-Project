<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Examination;
use App\Models\Program;

class SelectableDataController extends Controller
{
    public function programs()
    {
        return Program::all();
    }

    public function boards()
    {
        return Board::all();
    }

    public function examinations()
    {
        return Examination::all();
    }
}

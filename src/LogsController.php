<?php

namespace Alzughbieh\Logs;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LogsController extends Controller
{

     public function index()
    {
        return view('hamza::logs');

    }
}

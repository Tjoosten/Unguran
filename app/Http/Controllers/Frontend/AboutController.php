<?php

namespace Unguran\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Unguran\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}

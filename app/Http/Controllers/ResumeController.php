<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        return view('resume', compact('user'));
    }

    public function download()
    {
        $user = auth()->user();

        $pdf = \PDF::loadView('resume-ref', compact('user'));
        return $pdf->download('resume.pdf');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    public function index(Request $request): View
    {
        return view('auth.verify-email', [
            'status' => session('status'),
        ]);
    }
}

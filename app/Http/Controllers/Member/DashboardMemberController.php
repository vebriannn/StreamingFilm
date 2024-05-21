<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DashboardMemberController extends Controller
{
    public function index() {
        $users = Auth::user();
        return view('index', compact('users'));
    }
}

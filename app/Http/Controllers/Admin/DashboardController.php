<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.dashboard', [
            'pageTitle' => 'Admin Dashboard',
            'user' => User::with(['submissions', 'role'])->where('id', Auth::user()->id)->first(),
        ]);
    }
}

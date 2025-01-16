<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        return view('dashboad', [
            'submissions'   => Submission::where('user_id', Auth::user()->id)->first()
        ]);
    }
}

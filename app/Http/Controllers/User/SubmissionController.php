<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Submission;
use Illuminate\Support\Facades\Auth;
use App\Helper\CategoryEvent;

class SubmissionController extends Controller
{
    public function getSubmissionByUser(Request $request, $userId) {
        try {
            $userSubmission = Submission::where('user_id', Auth::user()->id)->first();

            return response()->json([
                'data'      => $userSubmission,
                'message'   => 'berhasil diambil'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

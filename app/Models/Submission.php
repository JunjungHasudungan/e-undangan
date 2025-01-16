<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submissions';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

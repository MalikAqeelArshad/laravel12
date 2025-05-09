<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // protected $fillable = [];
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}

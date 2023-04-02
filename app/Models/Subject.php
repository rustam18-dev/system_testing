<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function lang()
    {
        return $this->belongsTo(Lang::class, 'lang_id');
    }

    public function statuses()
    {
        return $this->belongsTo(Status::class, 'status');
    }

}

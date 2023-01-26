<?php

namespace App\Models;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function formation(){
        return $this->belongsTo(Formation::class);
    }


    public function niveau(){
        return $this->belongsTo(Niveau::class);
    }
}

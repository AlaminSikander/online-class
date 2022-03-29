<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddTeacher extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tSubject(){
        
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
}

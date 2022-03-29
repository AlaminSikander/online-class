<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddClassSchedule extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function teacher(){
        return $this->belongsTo(AddTeacher::class,'t_id','id');
    }
}

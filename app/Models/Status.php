<?php

namespace App\Models;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';
    protected $fillable = [
        'statusName'
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }
}

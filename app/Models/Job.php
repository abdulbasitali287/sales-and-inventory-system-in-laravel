<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = "jobs";
    protected $primaryKey = "job_id";
    protected $fillable = ['job_title','salary'];
}

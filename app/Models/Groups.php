<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{   
    use HasFactory;
    protected $fillable = [
        'group_name',
        'user_id',
        'member_email'
    ];
}

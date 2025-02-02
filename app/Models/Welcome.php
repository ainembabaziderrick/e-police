<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    use HasFactory;

    protected $table = 'welcomes';

    protected $fillable = [
        'title',
        'text',
        'image',        
    ];
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendModel extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = [
        'id',
        'title',
        'author',
        'logo',
        'created_at',
        'updated_at',
    ];
}

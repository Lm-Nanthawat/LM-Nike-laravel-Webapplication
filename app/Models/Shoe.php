<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $table = 'menshoes';

    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'image_url',
        'image_path',
    ];
}

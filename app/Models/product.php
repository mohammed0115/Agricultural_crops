<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'category_id',
        'description',
        'category',
        'releaseDate'

    ];

    public function categories()
    {
        return $this->AsOne('App\Category');
    }
}

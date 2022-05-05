<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Posts extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'body'];

    public function categories()
    {
        return $this->hasMany(Categories::class);
    }

}

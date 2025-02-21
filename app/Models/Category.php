<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    protected $table = 'categories';
    public function tickets()
    {
        return $this->hasMany(Tickets::class, 'category_id');
    }
}

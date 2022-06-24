<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 
        'slug', 
        'type', 
        'description', 
        'price', 
        'quantity'
    ];
    
    protected $hidden = [

    ];

    public function galleries() 
    {
        // return $this->hasMany(Productsgalleries::class, 'products_id');
    }
}

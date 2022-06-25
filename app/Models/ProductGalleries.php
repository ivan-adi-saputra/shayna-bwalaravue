<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProductGalleries extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ["id"];
    protected $hidden = [

    ];

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    protected function getPhotosAttribute($value)
    {
        return url('storage/' . $value);
    }
}

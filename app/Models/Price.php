<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'price',
    ];

    protected $hidden = [
        'id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

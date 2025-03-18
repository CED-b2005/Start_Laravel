<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'id_type', 'description', 'unit_price', 'promotion_price', 'image', 'unit', 'new'];
    protected $primaryKey = 'id';

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_product', 'id');
    }
    public static function bestSellers($limit = 4) {
        return self::join('bill_detail', 'products.id', '=', 'bill_detail.id_product')
            ->select('products.id', 'products.name', 'products.image', 'products.unit_price')
            ->selectRaw('SUM(bill_detail.quantity) as total_sold')
            ->groupBy('products.id', 'products.name', 'products.image', 'products.unit_price')
            ->orderByDesc('total_sold')
            ->limit($limit)
            ->get();
    }
}

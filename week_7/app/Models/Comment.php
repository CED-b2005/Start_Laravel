<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';

    protected $fillable = [
        'username',
        'comment',
        'id_product'
    ];
    public function product()
    {
        return $this->hasMany(Product::class, 'id_product', 'id');
    }
}

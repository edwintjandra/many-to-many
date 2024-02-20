<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama_pembeli',
        'tanggal_order',
        'status_order'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

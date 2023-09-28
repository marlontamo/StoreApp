<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;
class Product extends Model
{
    use HasFactory;
    protected $table ="product";
    protected $fillable = [
        'title',
        'description',
        'price',
        'store_id',
        'status',

    ];
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}

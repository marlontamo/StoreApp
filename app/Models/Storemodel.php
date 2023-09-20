<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storemodel extends Model
{
    use HasFactory;
    protected $table ="store";
    protected $fillable = [
        'name',
        'location',
        'description',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

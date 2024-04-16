<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NF extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_produto',
        'id_usuario',
        'valor_total'
    ];
    public function produto(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function usuario(): HasMany
    {
        return $this->hasMany(User::class);
    }
}

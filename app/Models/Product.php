<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'preco',
        'descricao',
        'quantidade',
        'img'
    ]; 
    public function NF(): BelongsTo
    {
        return $this->belongsTo(NF::class);
    }
    public function Admin(): HasMany
    {
        return $this->hasMany(Admin::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gambar extends Model
{
    use HasFactory;
    protected $table = "tb_gambar";
    protected $primaryKey = "gambar_id";
    protected $guarded = [];

    public function produk(): HasMany
    {
        return $this->hasMany(Produk::class, 'produk_id_gambar', 'gambar_id');
    }
}

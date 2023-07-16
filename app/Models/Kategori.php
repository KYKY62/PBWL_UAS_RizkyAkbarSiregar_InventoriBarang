<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "tb_kategori";
    protected $primaryKey = "kategori_id";
    protected $guarded = [];

    public function produk(): HasMany
    {
        return $this->hasMany(Produk::class, 'produk_id_kategori', 'kategori_id');
    }
}

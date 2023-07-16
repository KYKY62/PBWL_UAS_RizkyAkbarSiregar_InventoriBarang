<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;
    protected $table = "tb_produk";
    protected $primaryKey = "produk_id";
    protected $guarded = [];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'produk_id_kategori', 'kategori_id');
    }
    public function gambar(): BelongsTo
    {
        return $this->belongsTo(Gambar::class, 'produk_id_gambar', 'gambar_id');
    }
}

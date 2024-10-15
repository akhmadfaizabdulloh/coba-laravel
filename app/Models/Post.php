<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    // apa saja yang boleh diisi
    // protected $fillable = ['title','excerpt','body'];

    // boleh di isi, kecuali ...
    protected $guarded = ['id'];

    // menghubungkan dengan tabel/model category (relasi)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // belongsTo = 1 post hanya memiliki 1 kategori
}

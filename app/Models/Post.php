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
    protected $with = ['category','author'];

    // menghubungkan dengan tabel/model category (relasi)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // belongsTo = 1 post hanya memiliki 1 kategori
    
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // 1 post hanya di miliki 1 user

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('title', 'like', '%' . request('search') . '%')
                  ->orWhere('body', 'like', '%' . request('search') . '%');
        }
    }
    
}

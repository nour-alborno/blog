<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'year', 'book', 'details', 'book_img', 'price', 'category_id', 'soldNum'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

public function getFileUrlAttribute()
{
    if (!$this->book) {
        return null;
    }

    return asset('storage/' . $this->book);
}

public function getImageUrlAttribute()
{
    if (!$this->book_img) {
        return asset('http://localhost:8000/website-assets/img/favicon.png');
    } else if (Str::startsWith($this->book_img, ['http://', 'https://'])) {
        return $this->book_img;
    } else {
        return asset('storage/' . $this->book_img);
    }
}




    public function users()
    {
        return $this->belongsToMany(
            User::class,'soldbooks','book_id','user_id');
    }
}


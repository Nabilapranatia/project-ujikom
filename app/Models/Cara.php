<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cara extends Model
{
    use HasFactory;
    public $fillable = ['judul', 'langkah', 'gambar'];
    public $timestamps = true;

    public function image()
    {
        if ($this->gambar && file_exists(public_path('images/cara/' . $this->gambar))) {
            return asset('images/cara/' . $this->gambar);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/cara/' . $this->gambar))) {
            return unlink(public_path('images/cara/' . $this->gambar));
        }
    }
}

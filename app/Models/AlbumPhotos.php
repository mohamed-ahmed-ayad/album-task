<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumPhotos extends Model
{
    use HasFactory;
    protected $table ='album_photos';
    protected $fillable =['name','path','album_id'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    
    public function getPathAttribute($path){
        return asset('images/albums/'.$path)??'';
    }
    
}

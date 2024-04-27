<?php
// Song.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title',
        'description',
        'album_Id',
        'url',
        'links',
        'cover'
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}

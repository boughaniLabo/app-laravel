<?php
// Album.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title',
        'year',
        'cover',
        'description',
        'links',
    ];

    public function songs()
    {
        return $this->hasMany(Song::class, 'album_Id'); // Assuming 'album_Id' is the foreign key column name
    }
}
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


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'links' => 'array',
    ];
}
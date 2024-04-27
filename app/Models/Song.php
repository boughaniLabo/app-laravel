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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\category;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'city',
        'description',
        'vendu',
        'image',
        'categorie_id'
    ];


    public $table = 'articles';

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}

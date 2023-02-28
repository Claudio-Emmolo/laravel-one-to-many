<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = array('type_id', 'title', 'url', 'date', 'preview_img', 'difficulty', 'tecnologies');

    // Function for connect Projects table to one Type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }


    public function isImageUrl()
    {
        return filter_var($this->preview_img, FILTER_VALIDATE_URL);
    }
}
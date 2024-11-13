<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'content_type',
        'file_path',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function feedback()
    {
        return $this->hasMany(related: Feedback::class);
    }

    public function views()
    {
        return $this->hasMany(related: ContentViews::class);
    }

    public function downloads()
    {
        return $this->hasMany(related: ContentDownload::class);
    }

}

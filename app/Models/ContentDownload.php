<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentDownload extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_upload_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contentUpload()
    {
        return $this->belongsTo(related: ContentUpload::class);
    }
}

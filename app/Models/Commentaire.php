<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nomcomplet',
        'email',
        'message',
        'article_id',
    ];
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}

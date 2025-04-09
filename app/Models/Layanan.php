<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Layanan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'layanan';

    protected $fillable = [
        'user_id',
        'judul',
        'deskripsi',
        'gambar',
    ];

    protected $dates = ['deleted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

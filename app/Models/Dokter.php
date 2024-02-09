<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $guarded = [];
    /**
     * Get the user that owns the Dokter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class);
    }
}

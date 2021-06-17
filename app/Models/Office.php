<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Office extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'address'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}

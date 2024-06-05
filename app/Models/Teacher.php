<?php

namespace App\Models;

use App\Models\User;
use App\Models\Major;
use App\Models\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'major_id',
        'phone',
        'NIP',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }
    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function scopeSearch($query, $value)
    {
        if ($value) {
            $query->where('phone', 'like', '%' . $value . '%')->orWhere('NIP', 'like', '%' . $value . '%');
        }
    }
}

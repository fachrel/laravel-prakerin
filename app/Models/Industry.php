<?php

namespace App\Models;

use App\Models\Major;
use App\Models\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industry extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'leader',
        'address',
        'phone',
        'major_id',
        'quota',
        'status',
        'entry_time',
        'exit_time',
    ];

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    public function countAcceptedRequests(): int
    {
        return $this->requests()->where('status', 'accepted')->count();
    }

    public function scopeSearch($query, $value)
    {
        if ($value) {
            $query->where('name', 'like', '%' . $value . '%')->orWhere('address', 'like', '%' . $value . '%')->orWhere('leader', 'like', '%' . $value . '%')->orWhere('status', 'like', '%' . $value . '%')->orWhere('type_of_industry', 'like', '%' . $value . '%');
        }
    }
}

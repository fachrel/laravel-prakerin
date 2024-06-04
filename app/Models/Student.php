<?php

namespace App\Models;

use App\Models\User;
use App\Models\Major;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'major_id',
        'NIS',
        'NISN',
        'enrollment_year',
        'group',
        'gender',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(Major::class);
    }

    public function scopeSearch($query, $value)
    {
        if ($value) {
            $query->where('name', 'like', '%' . $value . '%')->orWhere('NISN', 'like', '%' . $value . '%')->orWhere('group', 'like', '%' . $value . '%')->orWhere('NIS', 'like', '%' . $value . '%');
        }
    }
}

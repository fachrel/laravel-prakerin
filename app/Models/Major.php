<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Major extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'short',
        'abbreviation',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function scopeSearch($query, $value)
    {
        if ($value) {
            $query->where('name', 'like', '%' . $value . '%')->orWhere('short', 'like', '%' . $value . '%')->orWhere('abbreviation', 'like', '%' . $value . '%');
        }
    }

}

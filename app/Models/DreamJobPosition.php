<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class DreamJobPosition extends Model
{
    use HasFactory;

     protected $table = 'dream_job_positions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'dream_job_department_id',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(DreamJobDepartment::class, 'dream_job_department_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WeeklyReports extends Model
{
    /** @use HasFactory<\Database\Factories\WeeklyReportsFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'week_start',
        'week_end',
        'status',
        'submitted_at',
        'viewed_at',
        'certified_at',
        'certified_by',
        'signature',
        'entries',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    protected $table = 'weekly_reports';

use SoftDeletes;

    public function certifiedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'certified_by');
    }
}

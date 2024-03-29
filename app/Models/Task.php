<?php

namespace App\Models;

use App\Models\Label;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status_id',
        'assigned_to_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'status_id' => 'integer',
        'created_by_id' => 'integer',
        'assigned_to_id' => 'integer',
    ];

    public function status(): HasOne
    {
        return $this->hasOne(TaskStatus::class, 'id', 'status_id');
    }

    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to_id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function labels(): BelongsToMany
    {
        return $this->belongsToMany(Label::class);
    }

    public function getCreatedAtAttribute(string $date): string
    {
        /** @var Carbon $dateObj */
        $dateObj = Carbon::createFromFormat('Y-m-d H:i:s', $date);

        return $dateObj->format('d.m.Y');
    }
}

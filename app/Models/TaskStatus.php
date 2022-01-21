<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public function getCreatedAtAttribute(string $date): string
    {
        /** @var Carbon $dateObj */
        $dateObj = Carbon::createFromFormat('Y-m-d H:i:s', $date);

        return $dateObj->format('d.m.Y');
    }
}

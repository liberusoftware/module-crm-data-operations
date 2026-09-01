<?php

declare(strict_types=1);

namespace Liberu\CRM\DataOperations\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $status */
final class OperationException extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_data_operation_exceptions';

    protected $fillable = ['team_id', 'operation_id', 'row_number', 'payload', 'reason', 'status', 'resolved_by', 'resolved_at'];

    protected function casts(): array
    {
        return ['payload' => 'array', 'row_number' => 'integer', 'resolved_at' => 'datetime'];
    }
}

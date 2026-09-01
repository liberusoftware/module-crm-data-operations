<?php

declare(strict_types=1);

namespace Liberu\CRM\DataOperations\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

final class DuplicateMatch extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_data_operation_duplicates';

    protected $fillable = ['team_id', 'operation_id', 'left_record_id', 'right_record_id', 'confidence', 'status'];

    protected function casts(): array
    {
        return ['confidence' => 'float'];
    }
}

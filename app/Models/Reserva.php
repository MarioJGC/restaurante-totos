<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id','fecha','telefono','cantidad','estado'];

    public function team(): BelongsTo{
        return $this->belongsTo(Team::class);
    }

}

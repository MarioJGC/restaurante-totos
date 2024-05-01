<?php

namespace App\Models;


use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','telefono','email'];

    public function team(): BelongsTo{
        return $this->belongsTo(Team::class);
    }
}  

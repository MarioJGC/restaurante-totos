<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams'; // Nombre personalizado de la tabla

    protected $fillable = ['name','slug'];

    public function empleados(): HasMany {
        return $this->hasMany(Empleado::class);
    }

    public function clientes(): HasMany {
        return $this->hasMany(Cliente::class);
    }

    public function reservas(): HasMany {
        return $this->hasMany(Reserva::class);
    }

    public function members(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

}
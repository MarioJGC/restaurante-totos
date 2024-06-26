<?php

namespace App\Filament\App\Resources\ReservaResource\Pages;

use App\Filament\App\Resources\ReservaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewReserva extends ViewRecord
{
    protected static string $resource = ReservaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

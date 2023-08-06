<?php

namespace Cswni\GastosForPosPlugin\Resources\GastoResource\Pages;

use Cswni\GastosForPosPlugin\Resources\GastoResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Pages\Actions;

class ViewGasto extends ViewRecord
{
    protected static string $resource = GastoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

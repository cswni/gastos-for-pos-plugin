<?php

namespace Cswni\GastosForPosPlugin\Resources\GastoResource\Pages;

use Cswni\GastosForPosPlugin\Resources\GastoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGasto extends CreateRecord
{
    protected static string $resource = GastoResource::class;

    protected function getActions(): array
    {
        return [

        ];
    }
}

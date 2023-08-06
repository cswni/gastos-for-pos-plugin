<?php

namespace Cswni\GastosForPosPlugin\Resources\GastoResource\Pages;

use Cswni\GastosForPosPlugin\Resources\GastoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGasto extends EditRecord
{
    protected static string $resource = GastoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

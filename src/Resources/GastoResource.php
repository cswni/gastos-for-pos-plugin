<?php

namespace Cswni\GastosForPosPlugin\Resources;

use Cswni\GastosForPosPlugin\Models\Gasto;
use Cswni\GastosForPosPlugin\Resources\GastoResource\Pages;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class GastoResource extends Resource
{
    protected static ?string $recordTitleAttribute = 'name';

    public static function getModel(): string
    {
        return Gasto::class;
    }

    protected static function getNavigationGroup(): ?string
    {
        return __('tienda.group') ?? config('cswni-gastos-for-pos.navigation.group');
    }

    protected static function getNavigationSort(): ?int
    {
        return config('cswni-gastos-for-pos.navigation.sort');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGastos::route('/'),
            'create' => Pages\CreateGasto::route('/create'),
            'view' => Pages\ViewGasto::route('/{record}'),
            'edit' => Pages\EditGasto::route('/{record}/edit'),
        ];
    }

    /**--------------------------------*
    | Resource Related Logic Start     |
    *----------------------------------*/

}

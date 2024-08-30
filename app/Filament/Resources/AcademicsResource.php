<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcademicsResource\Pages;
use App\Models\Academics;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AcademicsResource extends Resource
{
    protected static ?string $model = Academics::class;

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Subject name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('Semester')
                    ->label('Year')
                    ->options([
                        'I' => 'I',
                        'II' => 'II',
                        'III' => 'III',
                        'IV' => 'IV',
                        'V' => 'V',
                        'VI' => 'VI',
                        'VII' => 'VII',
                        'VIII' => 'VIII', ]),
                Forms\Components\TextInput::make('Grade')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('Status')
                    ->label('Status')
                    ->options([
                        'Pass' => 'Pass',
                        'Arrear' => 'Arrear', ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAcademics::route('/'),
            'create' => Pages\CreateAcademics::route('/create'),
            'edit' => Pages\EditAcademics::route('/{record}/edit'),
        ];
    }
}

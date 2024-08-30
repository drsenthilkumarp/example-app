<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PiclabResource\Pages;
use App\Filament\Resources\PiclabResource\RelationManagers;
use App\Models\Piclab;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PiclabResource extends Resource
{
    protected static ?string $model = Piclab::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'My Students';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('regnumber')->required(),
              //  TextInput::make('count')->required(),
              //  TextInput::make('email')->email()->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('regnumber'),
               TextColumn::make('name'),
               TextColumn::make('year'),
               TextColumn::make('department'),
              //  TextColumn::make('phone number'),
              //  TextColumn::make('email'),
    
            ])
            ->filters([
                Tables\Filters\Filter::make('verified')
            ->query(fn (Builder $query): Builder => $query->whereNotNull('email_verified_at')),

            ])
            ->actions([
               Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPiclabs::route('/'),
            'create' => Pages\CreatePiclab::route('/create'),
            'edit' => Pages\EditPiclab::route('/{record}/edit'),
        ];
    }
}

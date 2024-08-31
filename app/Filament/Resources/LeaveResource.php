<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeaveResource\Pages;
use App\Models\Leave;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class LeaveResource extends Resource
{
    protected static ?string $model = Leave::class;

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('leave_type')
                    ->label('Type of Leave')
                    ->options([
                        'Casual Leave' => 'casual_leave',
                        'On Duty' => 'on_duty',
                        'Special Permission' => 'special_permission',
                        'Permission' => 'permission',
                    ]),
                Forms\Components\TextInput::make('purpose')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('from_date')
                    ->required(),
                Forms\Components\DatePicker::make('to_date')
                    ->required(),
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::id()), // Automatically set the user_id to the current user's ID
            ]);
    }

    public static function table(Table $table): Table
    {
        /*      return $table
                  ->columns([
                      Tables\Columns\TextColumn::make('leave_type')->searchable(),
                      Tables\Columns\TextColumn::make('purpose')->searchable(),
                      Tables\Columns\TextColumn::make('from_date')->searchable(),
                      Tables\Columns\TextColumn::make('to_date')->searchable(),
                      Tables\Columns\TextColumn::make('user_id')->searchable(),
                  ])*/

        $user = Auth::user();
        $isAdmin = $user && $user->hasRole('student'); // Adjust this line based on your role checking method

        // Define columns conditionally
        $columns = [
            Tables\Columns\TextColumn::make('leave_type')->searchable(),
            Tables\Columns\TextColumn::make('from_date')->searchable(),
            Tables\Columns\TextColumn::make('to_date')->searchable(),
            Tables\Columns\TextColumn::make('purpose')->searchable(),

        ];

        if (! $isAdmin) {
            $columns = array_merge(
          [Tables\Columns\TextColumn::make('user_id')->searchable()],
            $columns
            );
        }

        return $table
            ->columns($columns) // Pass the columns array directly

            ->filters([
                // You can add filters here if needed
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
            // Define your relations here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLeaves::route('/'),
            'create' => Pages\CreateLeave::route('/create'),
            'edit' => Pages\EditLeave::route('/{record}/edit'),
        ];
    }
}

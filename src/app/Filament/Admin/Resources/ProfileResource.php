<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProfileResource\Pages;
use App\Filament\Admin\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('label')
                ->required(),

                Forms\Components\TextInput::make('name')
                    ->required(),

                Forms\Components\Textarea::make('description')
                    ->rows(4)
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('photo')
                    ->image()
                    ->directory('profiles')
                    ->disk('public'),

                Forms\Components\TextInput::make('stat_project')
                    ->label('Project Stat'),

                Forms\Components\TextInput::make('stat_major')
                    ->label('Major Stat'),

                Forms\Components\TextInput::make('stat_university')
                    ->label('University Stat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->disk('public')
                    ->label('Photo'),

                Tables\Columns\TextColumn::make('label')
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('stat_project')
                    ->label('Projects'),

                Tables\Columns\TextColumn::make('stat_major')
                    ->label('Major'),

                Tables\Columns\TextColumn::make('stat_university')
                    ->label('University'),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}

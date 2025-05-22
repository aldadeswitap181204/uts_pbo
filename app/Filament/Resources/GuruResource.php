<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuruResource\Pages;
use App\Models\Guru;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class GuruResource extends Resource
{
    protected static ?string $model = Guru::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Data Guru';
    protected static ?string $pluralLabel = 'Guru';
    protected static ?string $modelLabel = 'Guru';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama')
                ->label('Nama Guru')
                ->required(),

            TextInput::make('nip')
                ->required()
                ->unique(ignoreRecord: true)
                ->label('NIP'),

            TextInput::make('mata_pelajaran')
                ->label('Mata Pelajaran')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('nama')->label('Nama')->searchable(),
            TextColumn::make('nip')->label('NIP'),
            TextColumn::make('mata_pelajaran')->label('Mata Pelajaran'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGurus::route('/'),
            'create' => Pages\CreateGuru::route('/create'),
            'edit' => Pages\EditGuru::route('/{record}/edit'),
        ];
    }
}

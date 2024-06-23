<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressRelationManager extends RelationManager
{
    protected static string $relationship = 'address';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->tel()
                    ->maxLength(20),

                    
                    Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                    
                    Forms\Components\TextInput::make('state')
                    ->required()
                    ->maxLength(255),
                    
                    Forms\Components\TextInput::make('zip_code')
                    ->required()
                    ->numeric()
                    ->maxLength(10),

                    Forms\Components\Textarea::make('street_address')
                        ->required()
                        ->columnSpanFull(),
                ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('street_address')
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                ->label('Full Name'),

                Tables\Columns\TextColumn::make('phone')
                ->label('Phone No'),

                Tables\Columns\TextColumn::make('street_address')
                ->label('Street Address'),
                Tables\Columns\TextColumn::make('city')
                ->label('City'),
                Tables\Columns\TextColumn::make('state')
                ->label('State'),
                Tables\Columns\TextColumn::make('zip_code')
                ->label('Zip Code'),


            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

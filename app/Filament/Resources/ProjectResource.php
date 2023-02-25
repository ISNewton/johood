<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers\ProductsRelationManager;
use App\Filament\Resources\ProjectResource\RelationManagers\InstitutionsRelationManager;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'مشروع';

    protected static ?string $pluralLabel = 'المشاريع';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label(__('admin.projects.title'))->required(),
                Checkbox::make('is_visible')->label(__('admin.projects.is_visible'))->default(true)->columnSpanFull(),
                RichEditor::make('description')->label(__('admin.projects.description'))->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label(__('admin.projects.title'))->searchable(),
                IconColumn::make('is_visible')->label(__('admin.products.is_visible'))->boolean(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ProductsRelationManager::class,
            InstitutionsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
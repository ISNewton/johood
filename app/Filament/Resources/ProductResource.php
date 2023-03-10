<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Pages\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Pages\Actions\EditAction;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ProductResource\RelationManagers;
use Webbingbrasil\FilamentAdvancedFilter\Filters\TextFilter;
use App\Filament\Resources\ProductResource\Pages\EditProduct;
use App\Filament\Resources\ProductResource\Pages\ListProducts;
use App\Filament\Resources\ProductResource\Pages\CreateProduct;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $icon = 'heroicon-o-collection';
    protected static ?string $label = 'المنتج';
    protected static ?string $pluralLabel = 'المنتجات';

 


    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label(__('admin.products.title'))->required(),
                TextInput::make('quantity')->label(__('admin.products.quantity'))->required()->numeric(),
                TextInput::make('price_for_12_months')->label(__('admin.products.price_for_12_months'))->required()->numeric(),
                TextInput::make('price_for_24_months')->label(__('admin.products.price_for_24_months'))->required()->numeric(),
                Checkbox::make('is_visible')->label(__('admin.products.is_visible'))->default(true),
                RichEditor::make('description')->label(__('admin.products.description'))->required()->columnSpanFull(3),
                SpatieMediaLibraryFileUpload::make('images')
                    ->collection(Product::MEDIA_COLLECTION)
                    ->label(__('admin.products.images'))
                    ->required()
                    ->multiple()
                    ->columnSpanFull(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label(__('admin.products.title'))->searchable(),
                Tables\Columns\TextColumn::make('quantity')->label(__('admin.products.quantity'))->sortable(),
                Tables\Columns\TextColumn::make('price')->label(__('admin.products.price'))->sortable(),
                IconColumn::make('is_visible')->label(__('admin.products.is_visible'))->boolean(),

            ])
            ->filters([
                TextFilter::make('title')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),                
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
            'view' => Pages\ViewProduct::route('/{record}'),
        ];
    }

    protected function getActions(): array
    {
        return [
            Action::make('sendMessdlsdsldksage')
            ->label('sendMessage')
            ->action('sendMessage')
            ->color('primary'),
        ];
    }
}

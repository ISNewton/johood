<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Order;
use Pages\CreateOrder;
use App\Models\Product;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OrderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrderResource\Pages\EditOrder;
use App\Filament\Resources\OrderResource\Pages\ListOrders;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Filament\Resources\OrderResource\Pages\CreateOrder as PagesCreateOrder;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;
    protected static ?string $icon = 'heroicon-o-collection';
    protected static ?string $label = 'طلب';
    protected static ?string $pluralLabel = 'الطلبات';


    protected static ?string $navigationIcon = 'heroicon-o-collection';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')->label(__('admin.users.user'))
                    ->relationship('user', 'name')->required(),
                Select::make('product_id')->label(__('admin.products.product'))
                    ->relationship('product', 'title',fn($q) => $q->where('quantity' , '>' , 0))->required()->reactive(),
                TextInput::make('price')->default(function($get) {
                    return Product::find($get('product_id'))?->price;
                }),

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
            'index' => ListOrders::route('/'),
            'create' => PagesCreateOrder::route('/create'),
            'edit' => EditOrder::route('/{record}/edit'),
        ];
    }
}

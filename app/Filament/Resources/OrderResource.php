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
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OrderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrderResource\Pages\EditOrder;
use App\Filament\Resources\OrderResource\Pages\ViewOrder;
use App\Filament\Resources\OrderResource\Pages\ListOrders;
use App\Filament\Resources\OrderResource\Pages\CreateOrder as PagesCreateOrder;
use App\Filament\Resources\OrderResource\RelationManagers\UserRelationManager;

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
                Select::make('product_id')
                    ->label(__('admin.products.product'))
                    ->relationship('product', 'title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($set, $state) {
                        $set('price', Product::find($state)?->price);
                    }),
                TextInput::make('price')->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product.title'),
                TextColumn::make('user.name'),
            ])
            ->filters([
                //
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
            UserRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOrders::route('/'),
            'create' => PagesCreateOrder::route('/create'),
            'edit' => EditOrder::route('/{record}/edit'),
            'view' => ViewOrder::route('/{record}'),
        ];
    }
}

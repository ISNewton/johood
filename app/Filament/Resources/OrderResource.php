<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Order;
use Pages\CreateOrder;
use App\Models\Product;
use Filament\Pages\Page;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Pages\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OrderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Pages\Actions\Modal\Actions\ButtonAction;
use App\Filament\Resources\OrderResource\Pages\EditOrder;
use App\Filament\Resources\OrderResource\Pages\ViewOrder;
use App\Filament\Resources\OrderResource\Pages\ListOrders;
use App\Filament\Resources\OrderResource\Pages\SendMessage;
use App\Filament\Resources\OrderResource\RelationManagers\UserRelationManager;
use App\Filament\Resources\OrderResource\Pages\CreateOrder as PagesCreateOrder;
use App\Filament\Resources\OrderResource\RelationManagers\MessagesRelationManager;
use App\Filament\Resources\OrderResource\RelationManagers\ProductRelationManager;
use App\Filament\Resources\OrderResource\RelationManagers\PaymentsRelationManager;

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
                    ->relationship('user', 'name')->required()->disabledOn('edit')
                    ->searchable()
                    ->preload()
                    // ->dehydrated(fn(Page $livewire) => dd($livewire instanceof EditRecord))
                    ,
                Select::make('product_id')
                    ->label(__('admin.products.product'))
                    ->relationship('product', 'title')
                    ->required()
                    ->reactive()
                    ->disabledOn('edit')
                    // ->dehydrated(fn(Page $livewire) => $livewire instanceof EditRecord)
                // ->afterStateUpdated(fn ($set, $state) => $set('price', Product::find($state)?->price))
                ,
                Select::make('status')->label(__('admin.orders.status'))
                    ->options([
                        Order::STATUS_PENDING => __('admin.orders.' . Order::STATUS_PENDING),
                        Order::STATUS_REVIEWING => __('admin.orders.' . Order::STATUS_REVIEWING),
                        Order::STATUS_RECEIVED => __('admin.orders.' . Order::STATUS_RECEIVED),
                    ])->required(),
                Select::make('price')->label(__('admin.products.price'))
                    ->options(fn(callable $get) => Product::select('price_for_12_months', 'price_for_24_months')->find($get('product_id'))?->toArray())
                    ->required()
                    ,

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product.title')->label('اسم المنتج'),
                TextColumn::make('user.payment_number')->label(__('admin.payments.payment_number'))->searchable(),
                TextColumn::make('user.name')->label(__('admin.users.user'))->searchable(),
                TextColumn::make('created_at')->since()->label(__('admin.site.created_at'))->sortable(),
                BadgeColumn::make('status')->label(__('admin.orders.status'))
                    ->enum([
                        Order::STATUS_PENDING => 'مقدم',
                        Order::STATUS_REVIEWING => 'مرشح',
                        Order::STATUS_RECEIVED => 'مستلم',
                    ], 'Unknown')
                    ->colors([
                        'primary',
                        'warning' => Order::STATUS_REVIEWING,
                        'success' => Order::STATUS_RECEIVED,
                        'danger' => Order::STATUS_PENDING,
                    ]),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            UserRelationManager::class,
            ProductRelationManager::class,
            PaymentsRelationManager::class,
            MessagesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOrders::route('/'),
            'create' => PagesCreateOrder::route('/create'),
            'edit' => EditOrder::route('/{record}/edit'),
            'view' => ViewOrder::route('/{record}'),
            'sendMessage' => SendMessage::route('/{record}/send-message'),
        ];
    }

    protected function getActions(): array
    {
        return [
            Action::make('UPLOAD')->extraAttributes(['class' => 'button'])
                ->action('kkp')
                ->requiresConfirmation()
                ->modalHeading('UPLOAD FILE')
                ->modalButton('UPLOAD FILE')
                ->form([
                    FileUpload::make('attachment')
                        ->extraAttributes(['class' => 'custom'])
                        ->label('UPLOAD SURAT PENGANTAR')
                        ->required()
                ]),
        ];
    }
}
<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Models\Order;
use Filament\Resources\Form;
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\OrderResource;

class SendMessage extends Page
{
    protected static string $icon = 'heroicon-o-chat-alt-2';
    public Order $order;
    public string $name;

    protected static string $resource = OrderResource::class;

    protected static string $view = 'filament.resources.order-resource.pages.send-message';

    public function mount()
    {
        $this->order = Order::find(request()->route()->record);
    }

    public function getChildComponentContainer(): array
    {
        return [
            Grid::make(3)
                ->schema([
                    TextInput::make('name')
                        ->columnSpan(2),
                    // ...
                ])
        ];
    }
    protected function getFormSchema(): array
    {
        return [
            Grid::make(3)
            ->schema([
                TextInput::make('name')
                    ->columnSpan(2),
                // ...
            ])
        ];
    }

    public static function make(): static
    {
        return new static();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)
                    ->schema([
                        TextInput::make('name')
                            ->columnSpan(2),
                        // ...
                    ])
            ]);
    }
}

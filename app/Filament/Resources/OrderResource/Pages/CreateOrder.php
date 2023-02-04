<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Models\Product;
use Filament\Pages\Actions;
use App\Filament\Resources\OrderResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;

    // protected function getProductModel(): Product 
    // {
    //     return $this->product;
    // } 
}

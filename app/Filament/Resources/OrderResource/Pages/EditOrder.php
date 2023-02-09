<?php

namespace App\Filament\Resources\OrderResource\Pages;

use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\OrderResource;

class EditOrder extends EditRecord
{
    protected static string $resource = OrderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    

    // public function do()
    // {
    //     // dd(555);
    //     // return SendMessage::make()
    //     //     ->record($this->record)
    //     //     ->title('Send Message')
    //     //     ->modalSize('sm')
    //     //     ->showCloseButton(true)
    //     //     ->showCancelButton(true)
    //     //     ->showConfirmButton(true)
    //     //     ->confirmButtonText('Send')
    //     //     ->cancelButtonText('Cancel')
    //     //     ->confirmButtonColor('blue')
    //     //     ->cancelButtonColor('gray')
    //     //     ->confirmButtonLoadingText('Sending...')
    //     //     ->cancelButtonLoadingText('Canceling...')
    //     //     ->onConfirm(fn () => $this->sendMessage())
    //     //     ->onCancel(fn () => $this->dismissModal());
    // }
}

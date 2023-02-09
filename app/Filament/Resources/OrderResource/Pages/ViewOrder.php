<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Models\User;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\OrderResource;
use Filament\Forms\Components\RichEditor;

class ViewOrder extends ViewRecord
{
    protected static string $resource = OrderResource::class;

    protected function getActions(): array
    {
        return [
            Action::make('send-message')
                ->label('ارسال رسالة')
                ->icon('heroicon-o-chat-alt-2')
                ->action('do')
                ->form([
                    Select::make('phone')
                        ->label('رقم الهاتف')
                        ->options(fn () => [
                            $this->record->user->first_phone => $this->record->user->first_phone, $this->record->user->second_phone => $this->record->user->second_phone
                        ])
                        ->required(),
                    RichEditor::make('description')
                    ->label('محتوى الرسالة')
                    ->required()
                    ->columnSpanFull(3),

                ]),
        ];
    }

    public function do($data)
    {
        dd($data, $this->record);

        // return SendMessage::make()
        //     ->record($this->record)
        //     ->title('Send Message')
        //     ->modalSize('sm')
        //     ->showCloseButton(true)
        //     ->showCancelButton(true)
        //     ->showConfirmButton(true)
        //     ->confirmButtonText('Send')
        //     ->cancelButtonText('Cancel')
        //     ->confirmButtonColor('blue')
        //     ->cancelButtonColor('gray')
        //     ->confirmButtonLoadingText('Sending...')
        //     ->cancelButtonLoadingText('Canceling...')
        //     ->onConfirm(fn () => $this->sendMessage())
        //     ->onCancel(fn () => $this->dismissModal());
    }
}

<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Models\User;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
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
                    RichEditor::make('message')
                    ->label('محتوى الرسالة')
                    ->required()
                    ->columnSpanFull(3),

                ]),
        ];
    }

    public function do($data)
    {

        $response = Http::get('http://sms.nilogy.com/app/gateway/gateway.php',[
            'sendmessage' => 1,
            'username' => 'عاصم الطيب',
            'password' => 'E-learning123',
            'sender' => 'Ashraf Alhaj',
            'numbers' => 249908783487,
            'text' => $data['message'],
        ]);

        Notification::make() 
        ->title('تم ارسال الرسالة بنجاح')
        ->success()
        ->send(); 
    }
}

<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use App\Models\Payment;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentsRelationManager extends RelationManager
{
    protected static string $relationship = 'payments';

    protected static ?string $recordTitleAttribute = 'payment_date';

    protected static ?string $recordUrl = '/payments/{record.id}';

    protected static ?string $label = 'دفعية';
    protected static ?string $pluralLabel = 'الدفعيات';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('payment_status')->label(__('admin.payments.payment_status'))
                    ->options([
                        Payment::STATUS_PAID => __('admin.payments.' . Payment::STATUS_PAID),
                        Payment::STATUS_REFUSED => __('admin.payments.' . Payment::STATUS_REFUSED),
                    ])->required()->reactive(),
                DatePicker::make('payment_date')
                ->label(__('admin.payments.payment_date'))
                ->hidden(fn ($get) => $get('payment_status') == Payment::STATUS_REFUSED)
                ->required(fn ($get) => $get('payment_status') == Payment::STATUS_PAID)
                ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                BadgeColumn::make('payment_status')->label(__('admin.payments.payment_status'))
                    ->enum([
                        Payment::STATUS_PAID  => __('admin.payments.' . Payment::STATUS_PAID),
                        Payment::STATUS_REFUSED => __('admin.payments.' . Payment::STATUS_REFUSED),
                    ])
                    ->colors([
                        'success' => Payment::STATUS_PAID,
                        'danger' => Payment::STATUS_REFUSED,
                    ]),
                Tables\Columns\TextColumn::make('payment_date')->label(__('admin.payments.payment_date'))->default('---'),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}

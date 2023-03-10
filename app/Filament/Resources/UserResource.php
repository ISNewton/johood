<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Pages\Actions\EditAction;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\RelationManagers;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\UserResource\RelationManagers\OrdersRelationManager;
use App\Filament\Resources\UserResource\RelationManagers\ProductsRelationManager;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $icon = 'heroicon-o-collection';
    protected static ?string $label = 'مستخدم';
    protected static ?string $pluralLabel = 'المستخدمين';


    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // user type student:
                Select::make('type')->label(__('admin.users.type'))
                    ->options(User::TYPES)->default('male')->reactive()->visibleOn('create'),
                Tabs::make('Product')
                    ->tabs([
                        Tabs\Tab::make(__('admin.users.student_data'))
                            ->schema([
                                TextInput::make('name')->label(__('admin.users.name'))->required(),
                                Select::make('gender')->label(__('admin.users.gender'))
                                    ->options([
                                        'male' => 'ذكر',
                                        'female' => 'أنثى',
                                    ]),
                                TextInput::make('first_phone')->label(__('admin.users.first_phone'))->required()->numeric(),
                                TextInput::make('second_phone')->label(__('admin.users.second_phone'))->required()->numeric(),
                                TextInput::make('address')->label(__('admin.users.address'))->required(),
                                TextInput::make('personal_id')->label(__('admin.users.personal_id'))->required(),
                                SpatieMediaLibraryFileUpload::make('personal_id_photo')
                                    ->collection('personal_id_photo')
                                    ->label(__('admin.users.personal_id'))
                                    ->required(),
                                SpatieMediaLibraryFileUpload::make('student_photo')
                                    ->collection('student_photo')
                                    ->label(__('admin.users.photo'))
                                    ->required(),
                            ])->columns(2),
                        Tabs\Tab::make(__('admin.users.guarantor_data'))
                            ->schema([
                                //guarantor
                                TextInput::make('guarantor_name')->label(__('admin.users.guarantor_name'))->required(),
                                TextInput::make('guarantor_gender')->label(__('admin.users.guarantor_gender'))->required()->numeric(),
                                Select::make('guarantor_gender')->label(__('admin.users.guarantor_gender'))
                                    ->options([
                                        'male' => 'ذكر',
                                        'female' => 'أنثى',
                                    ]),
                                TextInput::make('guarantor_first_phone')->label(__('admin.users.guarantor_first_phone'))->required()->numeric(),
                                TextInput::make('guarantor_second_phone')->label(__('admin.users.guarantor_second_phone'))->required()->numeric(),
                                TextInput::make('guarantor_job')->label(__('admin.users.guarantor_job'))->required(),
                                TextInput::make('guarantor_personal_id')->label(__('admin.users.guarantor_personal_id'))->required(),
                                TextInput::make('guarantor_work_company')->label(__('admin.users.guarantor_work_company'))->required(),
                                TextInput::make('guarantor_work_address')->label(__('admin.users.guarantor_work_address'))->required(),
                                SpatieMediaLibraryFileUpload::make('guarantor_personal_id_photo')
                                    ->collection('guarantor_personal_id_photo')
                                    ->label(__('admin.users.personal_id'))
                                    ->required(),
                                SpatieMediaLibraryFileUpload::make('guarantor_photo')
                                    ->collection('guarantor_photo')
                                    ->label(__('admin.users.guarantor_photo'))
                                    ->required(),
                            ])->columns(2),
                        Tabs\Tab::make(__('admin.users.house_data'))
                            ->schema([
                                //housing
                                TextInput::make('house_owner')->label(__('admin.users.house_owner'))->required(),
                                TextInput::make('house_address')->label(__('admin.users.house_address'))->required(),
                                TextInput::make('house_owner_personal_id')->label(__('admin.users.house_owner_personal_id'))->required(),
                                Select::make('house_owner_gender')->label(__('admin.users.house_owner_gender'))
                                    ->options([
                                        'male' => 'ذكر',
                                        'female' => 'أنثى',
                                    ]),
                                TextInput::make('house_owner_phone')->label(__('admin.users.house_owner_phone'))->required(),
                                TextInput::make('house_number')->label(__('admin.users.house_number'))->required(),
                            ])->columns(2),
                    ])->columnSpanFull()->hidden(function (Closure $get) {
                        return $get('type') != User::TYPE_STUDENT;
                    }),

                // user type admin:
                Card::make()
                    ->schema([
                        TextInput::make('name')->label(__('admin.users.name'))->required(),
                        TextInput::make('email')->label(__('admin.users.email'))->required(),
                        TextInput::make('password')->label(__('admin.users.password'))->password()->required(),
                    ])->hidden(function (Closure $get) {
                        return $get('type') == User::TYPE_STUDENT;
                    })


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label(__('admin.users.name'))->searchable(),
                Tables\Columns\TextColumn::make('personal_id')->label(__('admin.users.personal_id'))->sortable(),
                SpatieMediaLibraryImageColumn::make('student_photo')->collection('users')->label(__('admin.users.photo'))
            ])
            ->filters([
                SelectFilter::make('type')->label(__('admin.users.type'))
                    ->options(User::TYPES)
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
            ProductsRelationManager::class,

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
            'view' => Pages\ViewUser::route('/{record}'),

        ];
    }
}
